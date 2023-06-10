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
                data: function ( d ) {
                    d._token = "{{ csrf_token() }}";
                    d.search = '';
                    d.status = `{{ request()->status ?? ''}}`;
                },
            },
            columns: [
                {
                    name: '',
                    data: function(d) {
                        return `
                            <input type="checkbox" name="registration_id" value="${d.id}" checkbox-single>
                        `;
                    },
                    orderable: false
                },
                {
                    data: 'id',
                    orderable: false
                },
                {
                    data: 'name',
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
                @can('support')
                    {
                        name: 'status',
                        data: function ( d ) {
                            let html = `
                                <select class="form-control" data-assign-status="${d.id}">
                                    <option value="">Select Status</option>
                                    ${mapStatusOptions(statuses, d.status_id)}
                                </select>
                                <div class="text-center">(<span class="text-muted">${d.status_updated_at}</span>)</div>
                            `;

                            return html;
                        },
                        orderable: false,
                    },
                @endcan
                {
                    name: 'action',
                    data: function ( d ) {
                        return `<a href="${d.action.view}" target="_blank"><i class="fas fa-eye" style="font-size: 15px;"></i></a>`;
                    },
                    orderable: false,
                },
            ],
        });

        return datatable;
    };

    function mapStatusOptions(statuses, status) {
        let options = '';

        $.each(statuses, function(index, value) {
            if(status != value.id){
                options += `<option value="${value.id}">${value.name}</option>`
            }
        });

        return options;
    }
</script>
