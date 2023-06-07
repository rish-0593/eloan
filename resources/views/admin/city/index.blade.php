<x-admin-layout>
    <x-slot name="title">{{ __('City') }}</x-slot>

    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('City') }}</h4>
                            <div class="card-header-form">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary" data-modal-target="#addOrUpdate">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @includeIf('admin.city.filters')

                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-slot name="modals">
        @includeIf('admin.city.modals')
    </x-slot>

    <x-slot name="scripts">
        <script>
            const datatable_url = `{{ route('admin.city.index') }}`;
            const trash_url = `{{ route('admin.city.trash') }}`;
            const update_status_url = `{{ route('admin.city.update.status') }}`;
        </script>

        @includeIf('admin.city.datatable')
        @includeIf('admin.city.scripts')
    </x-slot>
</x-admin-layout>
