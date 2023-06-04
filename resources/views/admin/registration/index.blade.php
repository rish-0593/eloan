<x-admin-layout>
    <x-slot name="title">{{ __('Registrations') }}</x-slot>

    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Registrations') }}</h4>
                            <div class="card-header-form">
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admin.registration.filters')

                            <div class="table-responsive">
                                <table id="example" class="table table-striped display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>{{ __('ID') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Mobile Number') }}</th>
                                            <th>{{ __('Purpose of Loan') }}</th>
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
            const DATATABLE_URL = "{{ route('admin.registration.index') }}"
        </script>

        @include('admin.registration.script')
    </x-slot>
</x-admin-layout>
