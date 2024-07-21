var table = NioApp.DataTable('#dt-table', {
    serverSide: true,
    processing: true,
    responsive: true,
    searchDelay: 500,
    ajax: {
        url: '/informasi/datatable-pengumuman',
        type: 'POST',
        data: function(d) {
            d._token = token;
            d.start_date = $('#start_date').val();
            d.end_date = $('#end_date').val();
        }
    },
    order: [2, 'DESC'],
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'judul'},
        {data: 'tanggal_release'},
        {data: 'gambar'},
        {data: 'status'},
        {data: 'action', orderable: false, searchable: false},
    ],
    columnDefs: [
        {
            targets: -3,
            orderable: false,
            searchable: false,
            render: function(data, type, full, meta) {
                return `<a target="_blank" class="btn btn-info btn-xs" href="${full['gambar']}">File</a>`;
            }
        },
        {
            targets: -2,
            orderable: false,
            searchable: false,
            render: function(data, type, full, meta) {
                
                var status = {
                    0: {'title': 'Non-Aktif', 'class': ' bg-danger'},
                    1: {'title': 'Aktif', 'class': ' bg-success'},
                };
                if (typeof status[full['status']] === 'undefined') {
                    return data;
                }
                return '<span class="badge '+ status[full['status']].class +'">'+ status[full['status']].title +'</span>';
            }
        },
    ] 
});

$('#btn-filter').click(function() {
    $("#dt-table").DataTable().ajax.reload();
})

$('#kategori').select2({
    placeholder: 'Pilih Kategori',
    allowClear: true,
    dropdownParent: $('#modalForm')
});

$('#kategori').change(function() {
    let applied = $(this).val();
    let container = $('#section-kategori');

    if(applied == 5) {
        // personal
        container.html(`<div class="form-group">
            <label class="form-label">Users</label>
            <div class="form-control-wrap">
                <select class="form-control" name="users[]" id="users" multiple required></select>
            </div>
        </div>`);

        $('#users').select2({
            placeholder: 'Pilih Users',
            allowClear: true,
            dropdownParent: $('#modalForm'),
            ajax: {
                url: '/data-users',
                dataType: "json",
                type: "GET",
                delay: 250,
                data: function (params) {
                    return { q: params.term };
                },
                processResults: function (data, params) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.nama,
                                id: item.kode
                            }
                        })
                    };
                },
                cache: true
            }
        })
    }
})

function tambah() {
    $('#modalForm').modal('show');
    $('#form-data')[0].reset();
    $('#kode').val('');
    $('#kategori').val(1).change();
    $('#section-kategori').html('');
}

$('#deskripsi').summernote({
    tabsize: 2,
    height: 120,
});


$('#preview_image').attr('src', "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.png");

const readURL = (input,el) => {
	if (input.files && input.files[0]) {
		const reader = new FileReader()
		reader.onload = (e) => {
			$('#'+el).removeAttr('src')
			$('#'+el).attr('src', e.target.result)
		}
		reader.readAsDataURL(input.files[0])
	}
}

$('#gambar').on('change', function() {

    // The recommended plugin to animate custom file input: bs-custom-file-input, is what bootstrap using currently
    // bsCustomFileInput.init();

    // Set maximum filesize
    var maxSizeMb = 10;

    // Get the file by using JQuery's selector
    var file = $('#gambar')[0].files[0];

    // Make sure that a file has been selected before attempting to get its size.
    if(file !== undefined) {

        // Get the filesize
        var totalSize = file.size;

        // Convert bytes into MB
        var totalSizeMb = totalSize  / Math.pow(1024,2);

        // Check to see if it is too large.
        if(totalSizeMb > maxSizeMb) {

            // Create an error message
            var errorMsg = 'File too large. Maximum file size is ' + maxSizeMb + ' MB. Selected file is ' + totalSizeMb.toFixed(2) + ' MB';
            toastr.warning(errorMsg);

            // Clear the value
            $('#gambar').val('');
            $('#preview_image').attr('src', "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.png");
            $('#gambar').next('label').html('Choose file');
        }else{
        	readURL(this,'preview_image');
        }
    }

});

$('#form-data').submit(function(e) {
    e.preventDefault();
    formData = new FormData($(this)[0]);
    var btn = $('#btn-submit');

    $.ajax({
        url : "/informasi/store-pengumuman",  
        data : formData,
        type : "POST",
        dataType : "JSON",
        cache:false,
        async : true,
        contentType: false,
        processData: false,
        beforeSend: function() {
            btn.attr('disabled', true);
            btn.html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span>Loading ...</span>`);
        },
        success: function(response) {
            if(response.status){
                $('#form-data')[0].reset();
                $('#modalForm').modal('hide');
                $("#dt-table").DataTable().ajax.reload(null, false);
                NioApp.Toast(response.message, 'success', {position: 'top-right'});
            }else{
                NioApp.Toast(response.message, 'warning', {position: 'top-right'});
            }
            btn.attr('disabled', false);
            btn.html('Save');
        },
        error: function(error) {
            console.log(error)
            btn.attr('disabled', false);
            btn.html('Save');
            NioApp.Toast('Error while fetching data', 'error', {position: 'top-right'});
        }
    });
});

function edit(kode) {
    $.ajax({
        url: '/informasi/edit-pengumuman/'+kode,
        dataType: 'JSON',
        success: function(response) {
            if(response.status) {
                $('#modalFormUpdate').modal('show');
                let data = response.data;
                if(data.gambar) {
                    $('#preview_image').attr('src', data.gambar);
                }
                $('#kode').val(kode);
                $('#kategori').val(data.kategori).change();
                $('#judul').val(data.judul);
                $('#sub_judul').val(data.sub_judul);
                $("#deskripsi").summernote('code', data.deskripsi);
                $("#tanggal_release").val(data.tanggal_release);
                $("#jam_release").val(data.jam_release);
                
            }
        },
        error: function(error) {
            console.log(error)
            NioApp.Toast('Error while fetching data', 'error', {position: 'top-right'});
        }
    })
}

function hapus(kode) {
    Swal.fire({
        title: 'Apakah anda yakin akan menghapus data?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, hapus data.'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: '/informasi/delete-pengumuman/'+kode,
                dataType: 'JSON',
                success: function(response) {
                    if(response.status){
                        $("#dt-table").DataTable().ajax.reload(null, false);
                        NioApp.Toast(response.message, 'success', {position: 'top-right'});
                    }else{
                        NioApp.Toast(response.message, 'warning', {position: 'top-right'});
                    }
                },
                error: function(error) {
                    console.log(error)
                    NioApp.Toast('Error while fetching data', 'error', {position: 'top-right'});
                }
            })
        }
    });
}