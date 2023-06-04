<script>
    $(document).ready(function () {
        let datatable = $('#example').DataTable({
            lengthMenu: [
                [50, 100],
                [50, 100],
            ],
            pageLength: 50,
            processing: true,
            serverSide: true,
            searching: false,
            ajax: {
                url: DATATABLE_URL,
                type: "POST",
                data: function ( d ) {
                    d._token = "{{ csrf_token() }}";
                    d.search = '';
                },
            },
            columns: [
                {
                    data: 'id',
                    orderable: false
                },
                {
                    data: 'name',
                    orderable: false
                },
                {
                    data: 'email',
                    orderable: false,
                },
                {
                    data: 'mobile',
                    orderable: false,
                },
                {
                    data: 'purpose_of_loan',
                    orderable: false,
                },
                {
                    name: 'action',
                    data: function ( d ) {
                        return `<a href="javascript:void(0);"><i class="fas fa-edit" style="font-size: 15px;"></i></a>`;
                    },
                    orderable: false,
                },
            ],
        });

        $(document).on('keyup', 'input', function(){
            if (typeof $ !== "undefined" && $.fn.dataTable) {
                var all_settings = $($.fn.dataTable.tables()).DataTable().settings();
                for (var i = 0, settings; (settings = all_settings[i]); ++i) {
                    if (settings.jqXHR)
                        settings.jqXHR.abort();
                }
            }
            datatable.draw();
        });
    });
</script>
