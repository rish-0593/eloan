<x-admin-layout>
    <x-slot name="title">{{ __('Support Team') }}</x-slot>

    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Support Team') }}</h4>
                            <div class="card-header-form">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary" data-modal-target="#addOrUpdate">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @includeIf('admin.team.filters')

                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Username') }}/{{ __('Email') }}</th>
                                            <th>{{ __('Data') }}</th>
                                            <th>{{ __('Last Activity') }}</th>
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
        @includeIf('admin.team.modals')
    </x-slot>

    <x-slot name="scripts">
        <script>
            const datatable_url = `{{ route('admin.team.index', [$role]) }}`;
            const trash_url = `{{ route('admin.team.trash', [$role]) }}`;
            const update_status_url = `{{ route('admin.team.update.status', [$role]) }}`;
            const LOGIN_BY_USER_URL = `{{ route('admin.team.login.by.user', [$role]) }}`;
        </script>

        @includeIf('admin.team.datatable')
        @includeIf('admin.team.scripts')
    </x-slot>
</x-admin-layout>
