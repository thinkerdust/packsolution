var table = NioApp.DataTable('#dt-table', {
    serverSide: true,
    processing: true,
    responsive: false,
    scrollX: true,
    searchDelay: 500,
    ajax: {
        url: '/admin/produk/datatable'
    },
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'kategori', name: 'pk.nama'},
        {data: 'kategori_judul', name: 'pk.kategori_judul'},
        {data: 'judul', name: 'p.judul'},
        {data: 'action', orderable: false, searchable: false},
    ],
    columnDefs: [] 
});

$('#kategori_produk').select2({
    placeholder: 'Pilih Kategori',
    allowClear: true,
    dropdownParent: $('#modalForm'),
    ajax: {
        url: '/admin/data-produk-kategori',
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
                        id: item.id
                    }
                })
            };
        },
        cache: true
    }
})

$('#deskripsi').summernote({
    tabsize: 2,
    height: 120,
});


$('.preview_image').attr('src', "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.png");

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
            $('#preview_image_gambar').attr('src', "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.png");
            $('#gambar').next('label').html('Choose file');
        }else{
        	readURL(this,'preview_image_gambar');
        }
    }

});

$('#gambar_ukuran').on('change', function() {

    // The recommended plugin to animate custom file input: bs-custom-file-input, is what bootstrap using currently
    // bsCustomFileInput.init();

    // Set maximum filesize
    var maxSizeMb = 10;

    // Get the file by using JQuery's selector
    var file = $('#gambar_ukuran')[0].files[0];

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
            $('#gambar_ukuran').val('');
            $('#preview_image_gambar_ukuran').attr('src', "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.png");
            $('#gambar_ukuran').next('label').html('Choose file');
        }else{
        	readURL(this,'preview_image_gambar_ukuran');
        }
    }

});

function hapus(uid) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: '/admin/produk/delete/'+uid,
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

function clear_form() {
    $('#uid').val('');
    $('#form-data')[0].reset();
    $('.preview_image').attr('src', "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.png");
    $("#deskripsi").summernote('code', '');
    $("#kategori_produk").val('').change();
    $("#ukuran_custom").val('').change();
    $("#laminasi").val('').change();
}

function tambah() {
    $('#modalForm').modal('show');
    clear_form();
}

$('#form-data').submit(function(e) {
    e.preventDefault();
    formData = new FormData($(this)[0]);
    var btn = $('#btn-submit');

    $.ajax({
        url : "/admin/produk/store",  
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

function edit(uid) {
    clear_form();
    $.ajax({
        url: '/admin/produk/edit/'+uid,
        dataType: 'JSON',
        success: function(response) {
            if(response.status) {
                $('#modalForm').modal('show');
                let data = response.data;
                $('#uid').val(uid);
                $("#kategori_produk").empty().append(`<option value="${data.produk_kategori_id}">${data.kategori}</option>`).val(data.produk_kategori_id).trigger('change');
                $('#kategori_judul').val(data.kategori_judul);
                $('#judul').val(data.judul);
                $("#deskripsi").summernote('code', data.deskripsi);
                $('#warna').val(data.warna);
                $('#ukuran_custom').val(data.custom).trigger('change');
                $('#laminasi').val(data.laminasi).trigger('change');

                if(data.gambar) {
                    $('#preview_image_gambar').attr('src', 'storage/'+data.gambar);
                }

                if(data.ukuran) {
                    $('#preview_image_gambar_ukuran').attr('src', 'storage/'+data.ukuran);
                }
            }
        },
        error: function(error) {
            console.log(error)
            NioApp.Toast('Error while fetching data', 'error', {position: 'top-right'});
        }
    })
}