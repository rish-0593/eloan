<script>
    $(document).ready(function() {
        let datatable = _initDatatable();

        $(document).on('click', '[data-modal-target]', function(){
            let target = $(this).data('modal-target');
            let __id = $(this).data('modal-id');

            if(__id != ''){
                let __name = $(this).closest('tr').find('.__name').text() ?? '';

                $('[name="id"]').val(__id);
                $('[name="name"]').val(__name);
            }

            $(target).modal('show');
        });

        $("#addOrUpdate, #updatePasswordModal").on('hide.bs.modal', function(){
            $('[name="id"]').val('');
            $('#add-update-module, #password-module').trigger("reset");
        });

        $('#add-update-module, #password-module').on('submit', function(e){
            e.preventDefault();

            const url = $(this).attr('action');
            const formData = new FormData($(this)[0]);

            $.ajax({
                url: url,
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
            })
            .done(function(response) {
                $('#addOrUpdate, #updatePasswordModal').modal('hide');
                datatable.ajax.reload();
            })
            .fail(function(error) {
                console.log( "error" );
            });
        });

        $(document).on('click', '[data-trash]', function(){
            let __id = $(this).attr('data-trash');

            if(confirm('Are you sure you want to delete this?')) {
                $.ajax({
                    url: trash_url,
                    method: "POST",
                    data: {
                        id: __id,
                    },
                })
                .done(function(response) {
                    datatable.ajax.reload();
                })
                .fail(function(error) {
                    console.log( "error" );
                });
            }
        });

        $(document).on('click', '[data-status]', function(){
            let __id = $(this).data('modal-id');

            $.ajax({
                url: update_status_url,
                method: "POST",
                data: {
                    id: __id,
                },
            })
            .done(function(response) {
                datatable.ajax.reload();
            })
            .fail(function(error) {
                console.log( "error" );
            });
        });

        $(document).on('click', '[data-login]', function(){
            let id = $(this).data('login');
            window.location.href = `${LOGIN_BY_USER_URL}?id=${id}`;
        });
    });
</script>
