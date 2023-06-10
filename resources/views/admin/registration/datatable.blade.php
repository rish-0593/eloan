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
</script>
