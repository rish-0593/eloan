<script>
    $(document).ready(function() {
        let datatable = _initDatatable();

        $('#datetimepicker').datetimepicker({
            timepicker: false,
            format: 'd-m-Y',
            scrollInput: false,
            closeOnDateSelect: true,
            onSelectDate: function(dp, $input) {
                datatable.draw();
            }
        });

        $(document).on('click', '.clear-date', function(e) {
            $('#datetimepicker').val('');
            datatable.draw();
        });

        if (typeof ASSIGN_TO_USER_URL != 'undefined') {
            $(document).on('change', '#assign_to', function() {
                let user_id = $(this).val();

                if (user_id != '') {
                    var ids = [];
                    $("input:checkbox[name=registration_id]:checked").each(function() {
                        ids.push($(this).val());
                    });

                    if (ids.length > 0) {
                        $.ajax({
                            url: ASSIGN_TO_USER_URL,
                            type: 'POST',
                            data: {
                                user_id,
                                ids
                            },
                            success: function(response) {
                                datatable.ajax.reload();

                                $('[checkbox-all]').prop('checked', false);
                                $('#assign_to').val('').trigger('change');
                            },
                            error: function(error) {
                                $('#assign_to').val('').trigger('change');
                            }
                        });
                    } else {
                        alert('Please select registration');
                        $('#assign_to').val('').trigger('change');
                    }
                }
            });
        }

        if (typeof ASSIGN_TO_USER_STATUS_URL != 'undefined') {
            $(document).on('change', 'select[data-assign-status]', function() {
                let _registration = $(this).data('assign-status');
                let _status = $(this).val();

                if (_registration != '' && _status != '') {
                    $.ajax({
                        url: ASSIGN_TO_USER_STATUS_URL,
                        type: 'POST',
                        data: {
                            _registration,
                            _status
                        },
                        success: function(response) {
                            datatable.ajax.reload();
                        },
                        error: function(error) {}
                    });
                }
            });
        }

        $(document).on('click', '[data-trash]', function() {
            let __id = $(this).attr('data-trash');

            if (confirm('Are you sure you want to delete this?')) {
                $.ajax({
                        url: TRASH_URL,
                        method: "POST",
                        data: {
                            id: __id,
                        },
                    })
                    .done(function(response) {
                        datatable.ajax.reload();
                    })
                    .fail(function(error) {
                        console.log("error");
                    });
            }
        });

        // filters
        $(document).on('keyup', 'input', '[filter-search]', function() {
            if (typeof $ !== "undefined" && $.fn.dataTable) {
                var all_settings = $($.fn.dataTable.tables()).DataTable().settings();
                for (var i = 0, settings;
                    (settings = all_settings[i]); ++i) {
                    if (settings.jqXHR)
                        settings.jqXHR.abort();
                }
            }
            datatable.draw();
        });

        $(document).on('change', '[filter-data]', function() {
            datatable.draw();
        });
    });
</script>
