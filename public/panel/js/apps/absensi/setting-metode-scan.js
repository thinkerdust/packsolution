var table = NioApp.DataTable('#dt-table', {
    processing: true,
    responsive: true,
    searchDelay: 500,
    ajax: {
        url: '/absensi/datatable-setting-metode-scan',
        type: 'POST',
        data: function(d) {
            d._token = token;
        }
    },
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'check', orderable: false, searchable: false},
        {data: 'kelas', name: 'k.tingkat'},
        {data: 'nama', name: 'u.nama'},
        {data: 'wifi'},
        {data: 'lokasi'},
        {data: 'selfie'}
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
                if (typeof status[full['wifi']] === 'undefined') {
                    return data;
                }
                return '<span class="badge '+ status[full['wifi']].class +'">'+ status[full['wifi']].title +'</span>';
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
                if (typeof status[full['lokasi']] === 'undefined') {
                    return data;
                }
                return '<span class="badge '+ status[full['lokasi']].class +'">'+ status[full['lokasi']].title +'</span>';
            }
        },
        {
            targets: -1,
            orderable: false,
            searchable: false,
            render: function(data, type, full, meta) {
                
                var status = {
                    0: {'title': 'Non-Aktif', 'class': ' bg-danger'},
                    1: {'title': 'Aktif', 'class': ' bg-success'},
                };
                if (typeof status[full['selfie']] === 'undefined') {
                    return data;
                }
                return '<span class="badge '+ status[full['selfie']].class +'">'+ status[full['selfie']].title +'</span>';
            }
        },
    ],
    rowCallback: function(row, data) {
        $(row).find('.row-check').prop('checked', false);
    }
});

// Handle click on "Check All" control
$('#check_all').on('click', function() {
    let isChecked = $(this).prop('checked');
    $('.row-check').prop('checked', isChecked);
});

// Handle click on individual checkboxes to update "Check All" control
$('#dt-table tbody').on('change', '.row-check', function() {
    let totalCheckboxes = $('.row-check').length;
    let checkedCheckboxes = $('.row-check:checked').length;
    $('#check_all').prop('checked', totalCheckboxes === checkedCheckboxes);
});

function setMetodeScan(flag)
{
    $('#modalSettingMetodeScan').modal('show');
    $('#metode_scan').val(1).change();
    $('#status').val(1).change();
}

$('#metode_scan').select2({
    dropdownParent: $('#modalSettingMetodeScan')
});

$('#status').select2({
    dropdownParent: $('#modalSettingMetodeScan')
});

$('#btn-setting-metode-scan').click(function() {
    // 1: wifi, 2: lokasi, 3: selfie
    let btn = $('#btn-setting-metode-scan');

    let checkedData = [];
    $('.row-check:checked').each(function() {
        checkedData.push($(this).attr('data-id'));
    });

    let metode_scan = $('#metode_scan').val();
    let status = $('#status').val();

    if(checkedData.length > 0) {
        Swal.fire({
            title: 'Apakah anda yakin akan update data?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, update data',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/absensi/setting-metode-scan-users',
                    method: 'POST',
                    dataType: 'json',
                    data: { _token: token, idx: checkedData, metode_scan: metode_scan, status: status },
                    beforeSend: function() {
                        btn.attr('disabled', true);
                        btn.html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span>Loading ...</span>`);
                    },
                    success: function(response) {
                        if(response.status){
                            $('#check_all').prop('checked', false);
                            $('#modalSettingMetodeScan').modal('hide');
                            $("#dt-table").DataTable().ajax.reload(null, false);
                            NioApp.Toast(response.message, 'success', {position: 'top-right'});
                        }else{
                            NioApp.Toast(response.message, 'warning', {position: 'top-right'});
                        }
                        btn.attr('disabled', false);
                        btn.html('Save');
                    },
                    error: function(error) {
                        console.log(error);
                        NioApp.Toast('Error while fetching data', 'error', {position: 'top-right'});
                    }
                });
            } 
        });
    }else{
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Mohon pilih data terlebih dahulu"
        });
    }
})