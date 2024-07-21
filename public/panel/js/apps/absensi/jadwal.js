var table = NioApp.DataTable('#dt-table', {
    serverSide: true,
    processing: true,
    responsive: false,
    searchDelay: 500,
    scrollX: true,
    ajax: {
        url: '/absensi/datatable-jadwal',
        type: 'POST',
        data: function(d) {
            d._token = token;
        }
    },
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'nama', name: 'j.nama'},
        {data: 'sunday', name: 'mj_sunday.nama'},
        {data: 'monday', name: 'mj_monday.nama'},
        {data: 'tuesday', name: 'mj_tuesday.nama'},
        {data: 'wednesday', name: 'mj_wednesday.nama'},
        {data: 'thursday', name: 'mj_thursday.nama'},
        {data: 'friday', name: 'mj_friday.nama'},
        {data: 'saturday', name: 'mj_saturday.nama'},
        {data: 'flag_default'},
        {data: 'status'},
        {data: 'action', orderable: false, searchable: false},
    ],
    columnDefs: [
        {
            targets: -3,
            orderable: false,
            searchable: false,
            render: function(data, type, full, meta) {
                
                var status = {
                    0: {'title': 'Non-Aktif', 'class': ' bg-danger'},
                    1: {'title': 'Aktif', 'class': ' bg-success'},
                };
                if (typeof status[full['flag_default']] === 'undefined') {
                    return data;
                }
                return '<span class="badge '+ status[full['flag_default']].class +'">'+ status[full['flag_default']].title +'</span>';
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

$('#flag_default').select2({
    placeholder: 'Pilih Flag Default',
    allowClear: true,
    dropdownParent: $('#modalForm')
});

$('.select-shift').select2({
    placeholder: 'Pilih Shift',
    allowClear: true,
    ajax: {
        url: '/data-shift',
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

function hapus(kode) {
    Swal.fire({
        title: 'Apakah anda yakin akan menghapus data?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, hapus data.'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: '/absensi/delete-master-jadwal/'+kode,
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

function tambah() {
    $('#modalForm').modal('show');
    $('#form-data')[0].reset();
    $('#kode').val('');
    $('#senin').val('').change();
    $('#selasa').val('').change();
    $('#rabu').val('').change();
    $('#kamis').val('').change();
    $('#jumat').val('').change();
    $('#sabtu').val('').change();
    $('#minggu').val('').change();
}

$('#form-data').submit(function(e) {
    e.preventDefault();
    formData = new FormData($(this)[0]);
    var btn = $('#btn-submit');

    $.ajax({
        url : "/absensi/store-jadwal",  
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
        url: '/absensi/edit-jadwal/'+kode,
        dataType: 'JSON',
        success: function(response) {
            if(response.status) {
                $('#modalForm').modal('show');
                let data = response.data;
                $('#kode').val(kode);
                $('#nama').val(data.nama);
                $("#minggu").empty().append(`<option value="${data.kode_sunday}">${data.sunday}</option>`).val(data.kode_sunday).trigger('change');
                $("#senin").empty().append(`<option value="${data.kode_monday}">${data.monday}</option>`).val(data.kode_monday).trigger('change');
                $("#selasa").empty().append(`<option value="${data.kode_tuesday}">${data.tuesday}</option>`).val(data.kode_tuesday).trigger('change');
                $("#rabu").empty().append(`<option value="${data.kode_wednesday}">${data.wednesday}</option>`).val(data.kode_wednesday).trigger('change');
                $("#kamis").empty().append(`<option value="${data.kode_thursday}">${data.thursday}</option>`).val(data.kode_thursday).trigger('change');
                $("#jumat").empty().append(`<option value="${data.kode_friday}">${data.friday}</option>`).val(data.kode_friday).trigger('change');
                $("#sabtu").empty().append(`<option value="${data.kode_saturday}">${data.saturday}</option>`).val(data.kode_saturday).trigger('change');
            }
        },
        error: function(error) {
            console.log(error)
            NioApp.Toast('Error while fetching data', 'error', {position: 'top-right'});
        }
    })
}

function setDefault(kode) {
    Swal.fire({
        title: 'Apakah anda yakin update data?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, saya yakin'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: '/absensi/set-default-jadwal/'+kode,
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