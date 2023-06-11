<x-guest-layout>
    <section class="main-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{ asset('images/frontend/main-slider-1-1.jpg') }});"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <p>Simple & Secure Payment Process</p>
                                <h2>Connecting Your Loan
                                    Needs</h2>
                                <a href="apply-now.html" class=" thm-btn">Apply For Loan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-2"></div>
                <div class="col-lg-12 col-xl-8">
                    <form method="POST" action="{{ route('registration') }}" id="loan-module" class="about-one__form wow fadeInUp" data-wow-duration="1500ms">
                        @csrf
                        <h3>Basic Details</h3>
                        <div class="about-one__form-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Select Product</label>
                                        <select name="product" class="contact-one__form-input custom-select" required="">
                                            @foreach ($products ?? [] as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" maxlength="100" class="form-control contact-one__form-input" placeholder="Name" required="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mobile Number*</label>
                                        <input type="text" name="mobile" id="mobile" minlength="10" pattern="[3-9]{10}" maxlength="10" class="form-control contact-one__form-input" placeholder="Mobile Number" required="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>City*</label>
                                        <input type="text" name="city" id="city" class="form-control contact-one__form-input" placeholder="Your City" required="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Pincode*</label>
                                        <input type="text" name="pincode" id="pincode" minlength="6" pattern="[3-9]{10}" maxlength="6" class="form-control contact-one__form-input" placeholder="Pincode" required="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Loan Amount*</label>
                                        <input type="text" name="amount" id="amount" minlength="5" pattern="[3-9]{10}" maxlength="10" class="form-control contact-one__form-input" placeholder="Loan Amount" required="">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="thm-btn">Apply For Loan</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12 col-xl-2"></div>
            </div>
        </div>
    </section>

    <section class="feature-one">
        <img src="{{ asset('images/frontend/feature-shape-1-1.png') }}" alt class="feature-one__shape-1">
        <img src="{{ asset('images/frontend/feature-shape-1-2.png') }}" alt class="feature-one__shape-2">
        <img src="{{ asset('images/frontend/feature-shape-1-3.png') }}" alt class="feature-one__shape-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="block-title text-left">
                        <p>WHY</p>
                        <h2>Choose Money Housing?</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="block-text">
                        We go above and beyond to ensure your home loan journey is seamless and stress-free. Contact us today to schedule a consultation and take the first step towards realizing your homeownership dreams. Together, we’ll make your housing aspirations a reality! Here’s what sets us apart:
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature-one__box">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <i class="pylon-icon-verification"></i>
                                    <span style='font-family: "Rajdhani";color: var(--thm-black);font-weight: 700;position: relative;vertical-align: top;top: 20px;'>Extensive Expertise</span>
                                </p>
                            </div>
                            <div class="col-sm-12 mt-4">
                                Our team consists of highly experienced professionals well-versed in the intricacies of the home loan industry. We stay up-to-date with the latest market trends and lending practices, allowing us to offer you the best possible advice and solutions.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-one__box">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <i class="pylon-icon-finance"></i>
                                    <span style='font-family: "Rajdhani";color: var(--thm-black);font-weight: 700;position: relative;vertical-align: top;top: 20px;'>Personalized Approach</span>
                                </p>
                            </div>
                            <div class="col-sm-12 mt-4">
                                We understand that no two individuals or families are the same. That’s why we take the time to listen and understand your specific requirements, financial goals, and preferences. With this knowledge, we can tailor a home loan solution that aligns perfectly with your needs.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-one__box">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                    <i class="pylon-icon-finance"></i>
                                    <span style='font-family: "Rajdhani";color: var(--thm-black);font-weight: 700;position: relative;vertical-align: top;top: 20px;'>Simplified Process</span>
                                </p>
                            </div>
                            <div class="col-sm-12 mt-4">
                                We believe in making the home loan process hassle-free for our customers. Our team will guide you through the entire journey, assisting you with paperwork, documentation, and other formalities. We strive to ensure that you have a clear understanding of the process at every stage.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="funfact-one">
        <div class="funfact-one__bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="funfact-one__box">
                        <h3><span class="odometer" data-count="5000">5,000 </span> +</h3>
                        <p>Trusted Clients</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="funfact-one__box">
                        <h3><span class="odometer" data-count="10">10 </span> +</h3>
                        <p>Years of Experience</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="funfact-one__box">
                        <h3><span class="odometer" data-count="5000">5,000 </span> +</h3>
                        <p>Loan Sanctioned</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="funfact-one__box">
                        <h3><span class="odometer" data-count="99.5">99.5 </span> %</h3>
                        <p>Success Rate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action">
        <div class="container">
            <div class="left-content">
                <h3>Now! Get a Free consultation for Your Home Loan</h3>
            </div>
            <div class="right-content">
                <a href="javascript:void(0);" class="thm-btn" id="goto-apply-for-loan">Apply For Loan</a>
            </div>
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

            setInputFilter(document.getElementById("mobile"), function(value) {
                return /^\d*$/.test(value);
            });

            setInputFilter(document.getElementById("pincode"), function(value) {
                return /^\d*$/.test(value);
            });

            setInputFilter(document.getElementById("amount"), function(value) {
                return /^\d*$/.test(value);
            });
        </script>

        <script>
            $(window).bind("pageshow", function() {
                var form = $('#loan-module');
                form[0].reset();
            });

            $(document).ready(function() {
                $("#city").autocomplete({
                    source: @json($cities ?? [])
                });

                $(document).on('click', '#goto-apply-for-loan', function() {
                    console.log('Application');
                    const element = document.getElementById("loan-module");
                    element.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
                });

                $("#loan-module").validate({
                    rules: {
                        product: {
                            required: true,
                        },
                        name: {
                            required: true,
                        },
                        mobile: {
                            required: true,
                        },
                        city: {
                            required: true,
                        },
                        pincode: {
                            required: true,
                        },
                        amount: {
                            required: true,
                        }
                    }
                })
            });
        </script>
    </x-slot>
</x-guest-layout>
