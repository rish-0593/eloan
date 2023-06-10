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
        <link rel="stylesheet" href="{{ asset('plugins/datetimepicker/jquery.datetimepicker.css') }}">
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

            <section class="page-header">
                <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
                <div class="container">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="javascript:void(0);">Home</a></li>
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
                                        <input type="number" name="income" class="form-control contact-one__form-input" placeholder="Monthly Income" required="">
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
        <script src="{{ asset('plugins/datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

        <!-- template js -->
        <script src="{{ asset('js/frontend/theme.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('[name="date_of_birth"]').datetimepicker({
                    timepicker: false,
                    format: 'd-M-Y',
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
    </body>
</html>
