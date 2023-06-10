<script>
    function _initDatatable() {
        let datatable = $('#datatable').DataTable({
            lengthMenu: [
                [50, 100],
                [50, 100],
            ],
            pageLength: 50,
            processing: true,
            serverSide: true,
            searching: false,
            ajax: {
                url: datatable_url,
                type: "POST",
                data: function ( d ) {
                    let status = $('select[name="filter_status"]').val();

                    d._token = "{{ csrf_token() }}";
                    d.status = status;
                },
            },
            columns: [
                {
                    data: 'name',
                    orderable: false
                },
                {
                    name: 'email',
                    data: function ( d ) {
                        return `
                            <span>${d.email}</span><br>
                            Password: <span>${d.plain_password ?? '*******'}</span><br>
                        `;
                    },
                    orderable: false
                },
                {
                    name: 'data',
                    data: function (d){
                        return `
                            <span>--</span><br>
                        `;
                    },
                    orderable: false
                },
                {
                    name: 'last-activity',
                    data: function (d){
                        return `
                            <span>--</span><br>
                        `;
                    },
                    orderable: false
                },
                {
                    name: 'status',
                    data: function (d){
                        return `
                            <span class="__status">
                                <div class="pretty p-switch p-fill">
                                    <input type="checkbox" ${d.status ? 'checked' : ''} data-status data-modal-id="${ d.id }">
                                    <div class="state p-success">
                                        <label></label>
                                    </div>
                                </div>
                            </span>
                        `;
                    },
                    orderable: false
                },
                {
                    name: 'action',
                    orderable: false,
                    data: function ( d ) {
                        let html = `
                            <a href="javascript:void(0);" data-modal-target="#updatePasswordModal" data-modal-id="${ d.id }">
                                <i class="fas fa-edit" style="font-size: 15px;"></i>
                            </a>

                            <a href="javascript:void(0);" data-login="${ d.id }">
                                <i class="fas fa-unlock" style="font-size: 15px;"></i>
                            </a>
                        `;

                        return html;
                    }
                }
            ],
        });

        return datatable;
    };
</script>