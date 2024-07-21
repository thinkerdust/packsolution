var table = NioApp.DataTable('#dt-table', {
    serverSide: true,
    processing: true,
    responsive: true,
    searchDelay: 500,
    ajax: {
        url: '/absensi/datatable-report-presensi',
        type: 'POST',
        data: function(d) {
            d._token = token;
            d.periode = $('#periode').val();
        }
    },
    order: [1, 'ASC'],
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'nama', name: 'u.nama'},
        {data: 'masuk'},
        {data: 'ijin'},
        {data: 'mangkir'},
        {data: 'flag'},
    ],
    columnDefs: [
        {
            targets: -1,
            orderable: false,
            searchable: false,
            render: function(data, type, full, meta) {
                
                var status = {
                    1: {'title': 'Guru', 'class': ' bg-primary'},
                    2: {'title': 'Siswa', 'class': ' bg-orange'},
                };
                if (typeof status[full['flag']] === 'undefined') {
                    return data;
                }
                return '<span class="badge '+ status[full['flag']].class +'">'+ status[full['flag']].title +'</span>';
            }
        },
    ] 
});

$('#btn-filter').click(function() {
    $("#dt-table").DataTable().ajax.reload();
})

$('#periode').datepicker({
    autoclose: true,
    format: "MM-yyyy",
    startView: "months", 
    minViewMode: "months"
});

$('#btn-proses-presensi').click(function() {
    let periode = $('#periode').val();

    Swal.fire({
        title: 'Apakah anda yakin memproses hitung presensi?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, saya yakin'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: '/absensi/proses-hitung-presensi',
                dataType: 'JSON',
                type: 'POST',
                data: {'_token': token, 'periode': periode},
                beforeSend: function() {
                    Swal.fire({
                        title: 'Loading...',
                        text: 'Please wait while we load the data.',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function(response) {
                    Swal.close();
                    $("#dt-table").DataTable().ajax.reload(null, false);
                    NioApp.Toast(response.message, 'success', {position: 'top-right'});
                },
                error: function(error) {
                    console.log(error)
                    NioApp.Toast('Error while fetching data', 'error', {position: 'top-right'});
                }
            })
        }
    });
})