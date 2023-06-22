<x-guest-layout>
    <div id="content" class="site-content">
        <section class="wpb-content-wrapper">
            <section class="wpb_row vc_row-fluid section-padd bg-second vc_custom_1554172062065 vc_row-has-fill">
                <div class="container">
                    <div class="vc_row">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <h2 style="color: #ffffff;text-align: left"
                                        class="vc_custom_heading vc_custom_1686453095663">Loan Details
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpcf7 no-js" id="wpcf7-f2090-p1530-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form method="post" action="{{ route('apply.for.loan.submit', ['_m' => request()->_m]) }}" id="apply-for-loan-module" class="wpcf7-form init">
                                            @csrf
                                            <div class="scf_o">
                                                <div class="scf_row">
                                                    <div class="fld_o">
                                                        <p>
                                                            <span class="wpcf7-form-control-wrap" data-name="employment_status">
                                                                <label>Employment Status</label>
                                                                <select name="employment_status" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fldo" required="">
                                                                    @foreach ($employmentStatuses ?? [] as $employmentStatus)
                                                                        <option value="{{ $employmentStatus->id }}">{{ $employmentStatus->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="fld_o">
                                                        <p>
                                                            <span class="wpcf7-form-control-wrap" data-name="email">
                                                                <label>Email*</label>
                                                                <input type="email" name="email" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fldo" placeholder="Email" required="">
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="scf_row">
                                                    <div class="fld_o">
                                                        <p>
                                                            <span class="wpcf7-form-control-wrap" data-name="income">
                                                                <label>Monthly Income*</label>
                                                                <input type="text" name="income" id="income" minlength="1" pattern="[3-9]{10}" maxlength="10" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fldo" placeholder="Monthly Income" required="">
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="fld_o">
                                                        <p>
                                                            <span class="wpcf7-form-control-wrap" data-name="gender">
                                                                <label>Gender*</label>
                                                                <select name="gender" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fldo" required="">
                                                                    @foreach ($genders ?? [] as $gender)
                                                                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="scf_row">
                                                    <div class="fld_o">
                                                        <p>
                                                            <span class="wpcf7-form-control-wrap" data-name="marital_status">
                                                                <label>Marital Status</label>
                                                                <select name="marital_status" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fldo" required="">
                                                                    @foreach ($maritalStatuses ?? [] as $maritalStatus)
                                                                        <option value="{{ $maritalStatus->id }}">{{ $maritalStatus->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="fld_o">
                                                        <p>
                                                            <span class="wpcf7-form-control-wrap" data-name="date_of_birth">
                                                                <label>Date of Birth*</label>
                                                                <input type="text" name="date_of_birth" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fldo" placeholder="Your Date of Birth" required="">
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="scf_row">
                                                    <div class="fld_o">
                                                        <p>
                                                            <span class="wpcf7-form-control-wrap" data-name="residential_type">
                                                                <label>Residential Type*</label>
                                                                <select name="residential_type" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fldo" required="">
                                                                    @foreach ($residentialTypes ?? [] as $residentialType)
                                                                        <option value="{{ $residentialType->id }}">{{ $residentialType->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="fld_o">
                                                        <p>
                                                            <span class="wpcf7-form-control-wrap" data-name="residential_address">
                                                                <label>Residential Address*</label>
                                                                <input type="text" name="residential_address" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required fldo" placeholder="Residential Address" required="">
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="scf_row">
                                                    <p>
                                                        <input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="Submit" />
                                                    </p>
                                                </div>
                                            </div>
                                            <p style="display: none !important;"><label>&#916;<textarea
                                                        name="_wpcf7_ak_hp_textarea" cols="45" rows="8"
                                                        maxlength="100"></textarea></label><input type="hidden"
                                                    id="ak_js_1" name="_wpcf7_ak_js" value="186" />
                                                <script>
                                                    document.getElementById( "ak_js_1" ).setAttribute( "value", ( new Date() ).getTime() );
                                                </script>
                                            </p>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="wpb_row vc_row-fluid bg-second vc_custom_1555470524461">
                <div class="container">
                    <div class="vc_row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-9">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  vc_custom_1686453320942 text-light">
                                        <div class="wpb_wrapper">
                                            <h3>Now! Get a Free <span class="lighter">consultation for Your Home Loan<br /></span></h3>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space  lg-hidden" style="height: 20px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="text-right mobile-left">
                                        <a class="btn" href="tel:+919891845151" style="">Get it now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>

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
        </script>
    </x-slot>
</x-guest-layout>
