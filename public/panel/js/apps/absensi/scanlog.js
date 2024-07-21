var table = NioApp.DataTable('#dt-table', {
    serverSide: true,
    processing: true,
    responsive: true,
    searchDelay: 500,
    ajax: {
        url: '/absensi/datatable-scanlog',
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
        {data: 'scan_at', name: 's.scan_at'},
        {data: 'longitude', orderable: false, searchable: false},
        {data: 'latitude', orderable: false, searchable: false},
        {data: 'link'},
        {data: 'flag', orderable: false, searchable: false},
    ],
    columnDefs: [
        {
            targets: -2,
            orderable: false,
            searchable: false,
            render: function(data, type, full, meta) {
                
                return `<a target="_blank" class="btn btn-gray btn-xs" href="${full['link']}">File</a>`;
            }
        },
        {
            targets: -1,
            orderable: false,
            searchable: false,
            render: function(data, type, full, meta) {
                
                var status = {
                    1: {'title': 'Scan Masuk', 'class': ' bg-primary'},
                    2: {'title': 'Scan Pulang', 'class': ' bg-orange'},
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