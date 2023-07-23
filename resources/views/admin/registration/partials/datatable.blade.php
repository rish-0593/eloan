<script>
    function _initDatatable() {
        let datatable = $('#registration').DataTable({
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
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                    d.trashed = $('input[name="filter_trashed"]').is(":checked");
                    d.search = $('input[name="filter_search"]').val();
                    d.assign_to = $('[name="filter_assign_to"]').val();
                    d.city = $('select[name="filter_city"]').val();
                    d.date = $('input[name="filter_date"]').val();
                    d.registration_status = $('[name="filter_registration_status"]').val();
                },
            },
            columns: [{
                    data: 'id',
                    orderable: false
                },
                {
                    name: 'name',
                    data: function(d) {
                        let html = `
                            <div class="text-center">${d.name}</div>
                            <div class="text-center">(<span class="text-muted">${d.resource_type}</span>)</div>
                            <div class="text-center">(<span class="text-muted">${d.updated_at}</span>)</div>
                        `;

                        return html;
                    },
                    orderable: false
                },
                {
                    data: 'mobile',
                    orderable: false,
                },
                {
                    data: 'city',
                    orderable: false,
                },
                {
                    data: 'product_id',
                    orderable: false,
                },
                {
                    data: 'pincode',
                    orderable: false,
                },
                {
                    data: 'amount',
                    orderable: false,
                },
                {
                    data: 'assign_to',
                    orderable: false,
                },
                {
                    name: 'action',
                    data: function(d) {
                        let html = `
                            <a href="${d.action.view}" target="_blank">
                                <i class="fas fa-eye" style="font-size: 15px;"></i>
                            </a>
                        `;

                        if (!d.deleted_at) {
                            html += `
                                @can('admin')
                                    <a href="javascript:void(0);" data-trash="${ d.id }">
                                        <i class="fas fa-trash" style="font-size: 15px;"></i>
                                    </a>
                                @endcan
                            `;
                        }

                        return html;
                    },
                    orderable: false,
                },
            ],
        });

        return datatable;
    };
</script>
