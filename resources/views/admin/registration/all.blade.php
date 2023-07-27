<x-admin-layout>
    <x-slot name="title">{{ __('Enquiry') }}</x-slot>

    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                {{ __('Enquiry') }}
                                @isset($status)
                                    ({{ $status }})
                                @endisset
                            </h4>
                            <div class="card-header-form mr-4">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" data-export>Export</button>
                                </div>
                            </div>
                            <div class="card-header-form">
                                <label>Deleted Enquiries :</label>
                                <input type="checkbox" name="filter_trashed" filter-data>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admin.registration.partials.filters')

                            <div class="table-responsive">
                                <table id="registration" class="table table-striped display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>{{ __('ID') }}</th>
                                            <th class="text-center">{{ __('Name') }}</th>
                                            <th>{{ __('Mobile Number') }}</th>
                                            <th>{{ __('City') }}</th>
                                            <th>{{ __('Product') }}</th>
                                            <th>{{ __('Pincode') }}</th>
                                            <th>{{ __('Loan Amount') }}</th>
                                            <th>{{ __('Assign To') }}</th>
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

    <x-slot name="scripts">
        <script>
            const DATATABLE_URL = `{{ route('admin.registration.all') }}`;
            const ASSIGN_TO_USER_URL = `{{ route('admin.registration.assign.to.user') }}`;
            const statuses = @json($statuses ?? []);
            const ASSIGN_TO_USER_STATUS_URL = `{{ route('admin.registration.assign.status') }}`;
            const TRASH_URL = `{{ route('admin.registration.trash') }}`;
        </script>

        @includeIf('admin.registration.partials.datatable')
        @include('admin.registration.scripts')
    </x-slot>
</x-admin-layout>
