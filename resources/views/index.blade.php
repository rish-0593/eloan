<!DOCTYPE html><html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eLoan</title>
        <!-- favicons Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <meta name="description" content="eLoan">

        <!-- fonts -->
        <link rel="stylesheet" href="{{ asset('css/frontend/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/pylon-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/bootstrap-select.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/flaticon.css') }}">

        <!-- template styles -->
        <link rel="stylesheet" href="{{ asset('css/frontend/main.css') }}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    </head>
    <body>
        <div class="preloader">
            <img class="preloader__image" src="{{ asset('images/frontend/loader.png') }}" alt>
        </div>

        <div class="page-wrapper">
            <header class="main-header">
                <div class="topbar">
                    <div class="container">
                        <div class="topbar__left">
                            <div class="topbar__social">
                                <a href="javascript:void(0);" class="fab fa-facebook-square"></a>
                                <a href="javascript:void(0);" class="fab fa-twitter"></a>
                                <a href="javascript:void(0);" class="fab fa-instagram"></a>
                            </div>
                            <a href="javascript:void(0);">Login</a>
                            <a href="faq.html">FAQs</a>
                        </div>
                        <div class="topbar__right">
                            <a href="javascript:void(0);"><i class="pylon-icon-email1"></i>eloan@company.com</a>
                            <a href="javascript:void(0);"><i class="pylon-icon-clock2"></i>Mon - Sat 8:00 AM - 6:00 PM</a>
                        </div>
                    </div>
                </div>

                <nav class="main-menu">
                    <div class="container">
                        <div class="logo-box">
                            <a href="javascript:void(0);" aria-label="logo image">
                                <img src="{{ asset('images/frontend/logo-dark.png') }}" width="155" alt>
                            </a>
                            <span class="fa fa-bars mobile-nav__toggler"></span>
                        </div>
                        <ul class="main-menu__list">
                            <li class="dropdown">
                                <a href="javascript:void(0);">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);">About Us</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Contact Us</a>
                            </li>
                        </ul>

                        <div class="main-header__info">
                            <div class="main-header__info-phone">
                                <i class="pylon-icon-tech-support"></i>
                                <div class="main-header__info-phone-content">
                                    <span>Call Anytime</span>
                                    <h3><a href="tel:+00123456789">+0 0123456789</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <div class="stricky-header stricked-menu main-menu">
                <div class="sticky-header__content"></div>
            </div>

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

            <section class="service-one">
                <div class="container">
                    <div class="block-title text-center">
                        <p>What We’re Offering</p>
                        <h2>All Loans Services</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="service-one__card">
                                <div class="service-one__image">
                                    <a href="service-details.html">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('images/frontend/services-1-1.png') }}" alt>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-one__content">
                                    <a href="service-details.html">
                                        <div class="service-icon">
                                            <i class="flaticon-car-loan"></i>
                                        </div>
                                    </a>
                                    <h3><a href="service-details.html">Personal Loan</a></h3>
                                    <p>There are many variations of passages of lorem ipsum available the majority have some.</p>
                                    <a href="service-details.html" class="pylon-icon-right-arrow service-one__link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-one__card">
                                <div class="service-one__image">
                                <a href="service-details.html">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('images/frontend/services-1-2.png') }}" alt>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-one__content">
                                    <a href="service-details.html">
                                        <div class="service-icon">
                                            <i class="flaticon-online-money"></i>
                                        </div>
                                    </a>
                                    <h3><a href="service-details.html">Education Loan</a></h3>
                                    <p>There are many variations of passages of lorem ipsum available the majority have some.</p>
                                    <a href="service-details.html" class="pylon-icon-right-arrow service-one__link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-one__card">
                                <div class="service-one__image">
                                    <a href="service-details.html">
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('images/frontend/services-1-3.png') }}" alt>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-one__content">
                                    <a href="service-details.html">
                                        <div class="service-icon">
                                            <i class="flaticon-property-1"></i>
                                        </div>
                                    </a>
                                    <h3><a href="service-details.html">Business Loan</a></h3>
                                    <p>There are many variations of passages of lorem ipsum available the majority have some.</p>
                                    <a href="service-details.html" class="pylon-icon-right-arrow service-one__link"></a>
                                </div>
                            </div>
                        </div>
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
                                <p>Get to Know About</p>
                                <h2>Flexible and Quick Business Loans For You</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="block-text">Turpis cursus in hac habitasse platea dictumst quisque. Aenean euismod elementum nisi quis eleifend quam adipiscing vitae proin.There of available but the majority have suffered alteration in some form, by injected humou or randomised words which don’t look even slightly believable.Nam aliquam sem et tortor consequat at urna mattis pellentesque..</p><!-- /.block-text -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="feature-one__box">
                                <i class="pylon-icon-asset"></i/frontend>
                                <p>Very Low Rates on
                                    All Loans</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-one__box">
                                <i class="pylon-icon-verification"></i>
                                <p>99.9% Success Rate
                                    Guarantee</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feature-one__box">
                                <i class="pylon-icon-finance"></i>
                                <p>Flexible with Your
                                    Repayments</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="funfact-one">
                <div class="funfact-one__bg" style="background-image: url({{ asset('images/frontend/funfact-bg-1-1.jpg') }});"></div><!-- /.funfact-one__bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__box">
                                <h3><span class="odometer" data-count="99">00</span>%</h3>
                                <p>We Approve Loans</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__box">
                                <h3>$<span class="odometer" data-count="90">00</span>K</h3>
                                <p>Daily Payments</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__box">
                                <h3><span class="odometer" data-count="8900">00</span></h3>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__box">
                                <h3><span class="odometer" data-count="346">00</span></h3>
                                <p>Staff Members</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="call-to-action" style="background-image: url(images/call-to-action-bg-1-1.jpg);">
                <div class="container">
                    <div class="left-content">
                        <p><span>Simple</span><span>Transparent</span><span>Secure</span></p>
                        <h3>Get a Business Loans Quickly</h3>
                    </div>
                    <div class="right-content">
                        <a href="javascript:void(0);" class="thm-btn" id="goto-apply-for-loan">Apply For Loan</a>
                    </div>
                </div>
            </section>

            <footer class="site-footer">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget footer-widget__about">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('images/frontend/logo-light.png') }}" width="155" alt>
                                </a>
                                <p>Welcome to pylon loand company we are provide loan as very reasonably interest and you can provide document etur labore.</p>
                                <div class="footer-widget__about-phone">
                                    <i class="pylon-icon-tech-support"></i>
                                    <div class="footer-widget__about-phone-content">
                                        <span>Call Anytime</span>
                                        <h3><a href="tel:+00123456789">+0 0123456789</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="footer-widget footer-widget__link">
                                <h3 class="footer-widget__title">Explore</h3>
                                <ul class="list-unstyled footer-widget__link-list">
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrow-right"></i>About</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-arrow-right"></i>Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget footer-widget__contact">
                                <h3>Contact</h3>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <a href="mailto:needhelp@company.com"><i class="pylon-icon-email1"></i>eloan@company.com</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="pylon-icon-clock2"></i>Mon - Sat 8:00 AM - 6:00 PM</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="pylon-icon-pin1"></i>Addess,
                                            India.</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="bottom-footer">
                <div class="container">
                    <p>© Copyright 2021 by Company.com</p>
                    <div class="bottom-footer__social">
                        <a href="javascript:void(0);" class="fab fa-facebook-f"></a>
                        <a href="javascript:void(0);" class="fab fa-twitter"></a>
                        <a href="javascript:void(0);" class="fab fa-instagram"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"></span>
                <div class="logo-box">
                    <a href="javascript:void(0);" aria-label="logo image"><img src="{{ asset('images/frontend/logo-light.png') }}" width="155" alt></a>
                </div>
                <div class="mobile-nav__container"></div>

                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="pylon-icon-email1"></i>
                        <a href="mailto:needhelp@azino.com">needhelp@pylon.com</a>
                    </li>
                    <li>
                        <i class="pylon-icon-telephone"></i>
                        <a href="tel:+00123456789">(+1) 9812310000</a>
                    </li>
                </ul>
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a href="javascript:void(0);" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="javascript:void(0);" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="javascript:void(0);" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <a href="javascript:void(0);" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

        <script src="{{ asset('js/frontend/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/frontend/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/frontend/swiper.min.js') }}"></script>
        <script src="{{ asset('js/frontend/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/frontend/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/frontend/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/frontend/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('js/frontend/wow.js') }}"></script>
        <script src="{{ asset('js/frontend/odometer.min.js') }}"></script>
        <script src="{{ asset('js/frontend/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('js/frontend/wNumb.min.js') }}"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

        <!-- template js -->
        <script src="{{ asset('js/frontend/theme.js') }}"></script>

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
    </body>
</html>
