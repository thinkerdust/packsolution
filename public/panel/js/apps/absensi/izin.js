var table = NioApp.DataTable('#dt-table', {
    serverSide: true,
    processing: true,
    responsive: true,
    searchDelay: 500,
    ajax: {
        url: '/absensi/datatable-izin',
        type: 'POST',
        data: function(d) {
            d._token = token;
            d.start_date = $('#start_date').val();
            d.end_date = $('#end_date').val();
        }
    },
    order: [1, 'ASC'],
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
        {data: 'nama', name: 'u.nama'},
        {data: 'tanggal_dari', name: 'i.tanggal_dari'},
        {data: 'tanggal_sampai', name: 'i.tanggal_sampai'},
        {data: 'kategori', name: 'i.kategori'},
        {data: 'keterangan', name: 'i.keterangan'},
        {data: 'link'},
        {data: 'status'},
        {data: 'action', orderable: false, searchable: false},
    ],
    columnDefs: [
        {
            targets: -3,
            orderable: false,
            searchable: false,
            render: function(data, type, full, meta) {
                return `<a target="_blank" class="btn btn-info btn-xs" href="${full['link']}">File</a>`;
            }
        },
        {
            targets: -2,
            orderable: false,
            searchable: false,
            render: function(data, type, full, meta) {
                
                var status = {
                    1: {'title': 'Sedang Proses', 'class': ' bg-secondary'},
                    2: {'title': 'Sudah Terverifikasi', 'class': ' bg-success'},
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

function verifikasi(id) {
    Swal.fire({
        title: 'Apakah anda yakin memverifikasi data?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, saya yakin'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: '/absensi/verifikasi-izin/'+id,
                dataType: 'JSON',
                success: function(response) {
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
}