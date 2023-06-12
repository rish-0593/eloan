<script>
    $(document).ready(function() {
          $(document).submit('form', function(e){
            e.preventDefault();

            let _token = "{{ csrf_token() }}";

            let name = $('[name="name"]').val();
            let password = $('[name="password"]').val();

            $.ajax({
                url: update_url,
                type: 'POST',
                data: {_token, name, password},
                success: function(response) {
                    if(response.action == 'profile'){
                        $('.user-name').text(response.data.name ?? '');

                        toastMsg('Profile updated successfully');
                    }

                    if(response.action == 'password'){
                        $('[name="password"]').val('');

                        toastMsg('Password updated successfully');
                    }
                },
                error: function(error) {
                    alert('Something went wrong!');
                }
            });
        });

        function toastMsg(message, title='Success!') {
            iziToast.success({
                title: title,
                message: message,
                position: 'topCenter'
            });
        }
    });
</script>
