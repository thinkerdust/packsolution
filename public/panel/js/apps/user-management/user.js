var table = NioApp.DataTable('#dt-table', {
    serverSide: true,
    processing: true,
    responsive: true,
    searchDelay: 500,
    ajax: {
        url: '/datatable-user-management'
    },
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'kode'},
        {data: 'nama'},
        {data: 'username'},
        {data: 'email'},
        {data: 'nohp'},
        {data: 'status'},
        {data: 'id'},
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
        {
            targets: -1,
            orderable: false,
            searchable: false,
            render: function(data, type, full, meta) {
                if(full['status'] == 1) {
                    return `<div class="drodown">
                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <ul class="link-list-opt no-bdr">
                                    <li><a class="btn" onclick="edit(${full['id']})"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                    <li><a class="btn" onclick="aktivasi(${full['id']})"><em class="icon ni ni-lock-alt"></em><span>Activation</span></a></li>
                                    <li><a class="btn" onclick="reset_password(${full['id']})"><em class="icon ni ni-security"></em><span>Reset Password</span></a></li>
                                </ul>
                            </div>
                        </div>`;
                }

                return '';
            }
        },
    ] 
});

$('#nohp').keyup(function() {
    $(this).val(function (index, value) {
      return value.replace(/\D/g, "");
    });
});

$('#username').on('keyup', function() {
    var value = $(this).val();
    $(this).val(value.replace(/\s/g, ''));
});

$('#user_kategori').select2({
    placeholder: 'Pilih User Kategori',
    allowClear: true,
    dropdownParent: $('#modalForm')
});

function reset_password(id) {
    $.ajax({
        url: '/reset-password/'+id,
        dataType: 'json',
        success: function(response) {
            if(response.status) {
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

function aktivasi(id) {
    $.ajax({
        url: '/user-activation/'+id,
        dataType: 'json',
        success: function(response) {
            if(response.status) {
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

$('#kode').select2({
    placeholder: 'Pilih User',
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
                        text: item.kode + ' - ' +item.nama,
                        id: item.kode
                    }
                })
            };
        },
        cache: true
    }
})

$('#jabatan').select2({
    placeholder: 'Pilih Jabatan',
    allowClear: true,
    dropdownParent: $('#modalForm'),
    ajax: {
        url: '/data-jabatan',
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

$('#role').select2({
    placeholder: 'Pilih Role',
    allowClear: true,
    dropdownParent: $('#modalForm'),
    ajax: {
        url: '/data-role',
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

$('#kode').change(function() {
    let kode = $(this).val();
    if(kode) {
        $.ajax({
            url: '/get-detail-user/'+kode,
            dataType: 'json',
            success: function(res) {
                if(res){
                    $('#nama').val(res.nama);
                    $('#email').val(res.email);
                    $('#nohp').val(res.nohp);
                    $('#username').val(kode);
                }
            },
            error: function(error) {
                console.log(error);
            }
        })
    }
})

function tambah() {
    $('#modalForm').modal('show');
    $('#form-data')[0].reset();
    $('#id_user').val('');
    $('#jabatan').val('').change();
    $('#role').val('').change();
    $('#user_kategori').val('').change();
}

$('#form-data').submit(function(e) {
    e.preventDefault();
    formData = new FormData($(this)[0]);
    var btn = $('#btn-submit');

    $.ajax({
        url : "/register",  
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

function edit(id) {
    $.ajax({
        url: '/edit-user/'+id,
        dataType: 'json',
        success: function(response) {
            if(response.status) {
                $('#modalForm').modal('show');
                let data = response.data;
                $('#id_user').val(id);
                $("#kode").empty().append(`<option value="${data.username}">${data.username} - ${data.nama}</option>`).val(data.username).trigger('change');
                $("#jabatan").empty().append(`<option value="${data.id_jabatan}">${data.nama_jabatan}</option>`).val(data.id_jabatan).trigger('change');
                $("#role").empty().append(`<option value="${data.id_role}">${data.nama_role}</option>`).val(data.id_role).trigger('change');
                $('#nama').val(data.nama);
                $('#email').val(data.email);
                $('#nohp').val(data.nohp);
                $('#username').val(data.username);
                $('#user_kategori').val(data.flag).change();
            }
        },
        error: function(error) {
            console.log(error)
            NioApp.Toast('Error while fetching data', 'error', {position: 'top-right'});
        }
    })
}