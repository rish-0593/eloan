<script>
    $(document).ready(function () {
        let datatable = _initDatatable();

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
