<x-guest-layout>
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>/</li>
                <li><span>Apply Now</span></li>
            </ul>
            <h2>Apply Now</h2>
        </div>
    </section>

    <section class="apply-one">
        <div class="container">
            <form method="post" action="{{ route('apply.for.loan.submit', ['_m' => request()->_m]) }}" id="apply-for-loan-module" class="contact-one__form">
                @csrf

                <div class="contact-one__form-box">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-title">
                                <p class="small-title">Apply for loan</p>
                                <h2 class="title-block">Loan Details</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employment Status*</label>
                                <select name="employment_status" class="contact-one__form-input custom-select" required="">
                                    @foreach ($employmentStatuses ?? [] as $employmentStatus)
                                        <option value="{{ $employmentStatus->id }}">{{ $employmentStatus->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="email" name="email" class="form-control contact-one__form-input" placeholder="Email" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Monthly Income*</label>
                                <input type="text" name="income" id="income" minlength="1" pattern="[3-9]{10}" maxlength="10" class="form-control contact-one__form-input" placeholder="Monthly Income" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender*</label>
                                <select name="gender" class="contact-one__form-input custom-select" required="">
                                    @foreach ($genders ?? [] as $gender)
                                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Marital Status</label>
                                <select name="marital_status" class="contact-one__form-input custom-select" required="">
                                    @foreach ($maritalStatuses ?? [] as $maritalStatus)
                                        <option value="{{ $maritalStatus->id }}">{{ $maritalStatus->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date of Birth*</label>
                                <input type="text" name="date_of_birth" class="form-control contact-one__form-input" placeholder="Your Date of Birth" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Residential Type*</label>
                                <select name="residential_type" class="contact-one__form-input custom-select" required="">
                                    @foreach ($residentialTypes ?? [] as $residentialType)
                                        <option value="{{ $residentialType->id }}">{{ $residentialType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Residential Address*</label>
                                <input type="text" name="residential_address" class="form-control contact-one__form-input" placeholder="Residential Address" required="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-one__form-submit">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Submit" class="thm-btn">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>

    <x-slot name="script">
        <script type="text/javascript">
            // Restricts input for the given textbox to the given inputFilter function.
            function setInputFilter(textbox, inputFilter) {
                ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
                    textbox.addEventListener(event, function() {
                        if (inputFilter(this.value)) {
                            this.oldValue = this.value;
                            this.oldSelectionStart = this.selectionStart;
                            this.oldSelectionEnd = this.selectionEnd;
                        } else if (this.hasOwnProperty("oldValue")) {
                            this.value = this.oldValue;
                            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                        } else {
                            this.value = "";
                        }
                    });
                });
            }

            setInputFilter(document.getElementById("income"), function(value) {
                return /^\d*$/.test(value);
            });
        </script>

        <script>
            $(document).ready(function() {
                $('[name="date_of_birth"]').datetimepicker({
                    timepicker: false,
                    format: 'd-M-Y',
                    maxDate: 0
                });

                $("#apply-for-loan-module").validate({
                    rules: {
                        employment_status: {
                            required: true,
                        },
                        email: {
                            required: true,
                        },
                        income: {
                            required: true,
                        },
                        gender: {
                            required: true,
                        },
                        marital_status: {
                            required: true,
                        },
                        date_of_birth: {
                            required: true,
                        },
                        residential_type: {
                            required: true,
                        },
                        residential_address: {
                            required: true,
                        },
                    }
                })
            });
        </script>>
    </x-slot>
</x-guest-layout>
