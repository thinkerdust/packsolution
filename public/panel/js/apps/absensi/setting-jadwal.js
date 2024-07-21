var table = NioApp.DataTable('#dt-table', {
    serverSide: true,
    processing: true,
    responsive: true,
    searchDelay: 500,
    ajax: {
        url: '/absensi/datatable-setting-jadwal',
        type: 'POST',
        data: function(d) {
            d._token = token;
        }
    },
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'nama', name: 'u.nama'},
        {data: 'jadwal', name: 'j.nama'},
        {data: 'tgl_awal', name: 'sj.tgl_awal'},
        {data: 'tgl_akhir', name: 'sj.tgl_akhir'},
        {data: 'status'},
        {data: 'action', orderable: false, searchable: false},
    ],
    columnDefs: [
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

$('#jadwal').select2({
    placeholder: 'Pilih Jadwal',
    allowClear: true,
    dropdownParent: $('#modalFormUpdate'),
    ajax: {
        url: '/data-jadwal',
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
                        text: item.kode + ' - ' +item.nama,
                        id: item.kode
                    }
                })
            };
        },
        cache: true
    }
})

function hapus(kode) {
    Swal.fire({
        title: 'Apakah anda yakin akan menghapus data?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, hapus data.'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: '/absensi/delete-setting-jadwal/'+kode,
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

$('#form-data-update').submit(function(e) {
    e.preventDefault();
    formData = new FormData($(this)[0]);
    var btn = $('#btn-submit-update');

    $.ajax({
        url : "/absensi/update-setting-jadwal",  
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
                $('#form-data-update')[0].reset();
                $('#modalFormUpdate').modal('hide');
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
        url: '/absensi/edit-setting-jadwal/'+kode,
        dataType: 'JSON',
        success: function(response) {
            if(response.status) {
                $('#modalFormUpdate').modal('show');
                let data = response.data;
                $('#kode').val(kode);
                $('#nama').val(data.nama);
                $('#tanggal_awal').val(data.tgl_awal);
                $('#tanggal_akhir').val(data.tgl_akhir);
                $("#jadwal").empty().append(`<option value="${data.kode_jadwal}">${data.jadwal}</option>`).val(data.kode_jadwal).trigger('change');
                
            }
        },
        error: function(error) {
            console.log(error)
            NioApp.Toast('Error while fetching data', 'error', {position: 'top-right'});
        }
    })
}

$('#setting_jadwal').select2({
    placeholder: 'Pilih Jadwal',
    allowClear: true,
    dropdownParent: $('#modalForm'),
    ajax: {
        url: '/data-jadwal',
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

$('#diterapkan').change(function() {
    let applied = $(this).val();
    let container = $('#select-diterapkan');

    console.log(applied);
    if(applied == 4) {
        // per kelas
        container.html(`<div class="form-group">
                        <label class="form-label">Kelas</label>
                        <div class="form-control-wrap">
                            <select class="form-control" name="setting_kelas[]" id="setting_kelas" multiple required></select>
                        </div>
                    </div>`);

        $('#setting_kelas').select2({
            placeholder: 'Pilih Kelas',
            allowClear: true,
            dropdownParent: $('#modalForm'),
            ajax: {
                url: '/data-kelas',
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
    }else if(applied == 5) {
        // per users
        container.html(`<div class="form-group">
            <label class="form-label">Users</label>
            <div class="form-control-wrap">
                <select class="form-control" name="setting_users[]" id="setting_users" multiple required></select>
            </div>
        </div>`);

        $('#setting_users').select2({
            placeholder: 'Pilih Users',
            allowClear: true,
            dropdownParent: $('#modalForm'),
            ajax: {
                url: '/data-all-users',
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
                                text: item.kode + ' - ' + item.nama,
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

$('#diterapkan').select2({
    placeholder: 'Pilih Jenis Penerapan',
    allowClear: true,
    dropdownParent: $('#modalForm')
});

function tambah() {
    $('#modalForm').modal('show');
    $('#diterapkan').val(1).change();
    $('#select-diterapkan').html('');
    $('#setting_jadwal').val('').change();
}

$('#form-data').submit(function(e) {
    e.preventDefault();
    formData = new FormData($(this)[0]);
    var btn = $('#btn-submit');

    $.ajax({
        url : "/absensi/store-setting-jadwal",  
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