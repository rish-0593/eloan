<x-admin-layout>
    <x-slot name="title">{{ __('Registrations') }}</x-slot>
    <x-slot name="styles">
        <style>
            .breadcrumb-item + .breadcrumb-item::before {
                content: ":";
            }
        </style>
    </x-slot>

    <div class="main-content" style="min-height: 489px;">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Name</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->name }}
                                        </li>
                                    </ol>
                                </nav>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Mobile Number</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->mobile }}
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Email</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->loanDetails->email ?? '-' }}
                                        </li>
                                    </ol>
                                </nav>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Gender</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->loanDetails->gender->name ?? '-' }}
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>City</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->city }}
                                        </li>
                                    </ol>
                                </nav>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Pincode</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->pincode }}
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Product</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->product->name ?? '-'}}
                                        </li>
                                    </ol>
                                </nav>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Loan Amount</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->amount }}
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Employment Status</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->loanDetails->employmentStatus->name ?? '-' }}
                                        </li>
                                    </ol>
                                </nav>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Monthly Income</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->loanDetails->income ?? '-' }}
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Date of Birth</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->loanDetails->date_of_birth ?? '-'}}
                                        </li>
                                    </ol>
                                </nav>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Marital Status</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->loanDetails->maritalStatus->name ?? '-' }}
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Residential Type</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->loanDetails->residentialType->name ?? '-' }}
                                        </li>
                                    </ol>
                                </nav>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <b>Residential Address</b>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $view->loanDetails->residential_address ?? '-' }}
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-admin-layout>
