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
                    <form action="apply-now.php" method="post" class="contact-one__form">
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
                                        <label>Loan Amount*</label>
                                        <input type="number" name="loanamount" class="form-control contact-one__form-input" placeholder="Loan Amount" required="" fdprocessedid="j1id8k">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Monthly Income*</label>
                                        <input type="number" name="income" class="form-control contact-one__form-input" placeholder="Monthly Income" required="" fdprocessedid="tzx7na">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Purpose of Loan</label>
                                        <select name="purposeloan" class="contact-one__form-input custom-select" required="" fdprocessedid="dejpie">
                                            <option value="Business">Business</option>
                                            <option value="Home Purchase">Home Purchase</option>
                                            <option value="Car Purchase">Car Purchase</option>
                                            <option value="Holiday">Holiday</option>
                                            <option value="Wedding">Wedding</option>
                                            <option value="Investment">Investment</option>
                                            <option value="Payday Loan">Payday Loan</option>
                                            <option value="Startup">Startup</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Loan Years</label>
                                        <select name="loanyears" class="contact-one__form-input custom-select" required="" fdprocessedid="8mikbc">
                                            <option value="6 Months">6 Months</option>
                                            <option value="1 Year">1 Year</option>
                                            <option value="2 Years">2 Years</option>
                                            <option value="3 Years">3 Years</option>
                                            <option value="4 Years">4 Years</option>
                                            <option value="5 Years">5 Years</option>
                                            <option value="6 Years">6 Years</option>
                                            <option value="7 Years">7 Years</option>
                                            <option value="8 Years">8 Years</option>
                                            <option value="9 Years">9 Years</option>
                                            <option value="10 Years">10 Years</option>
                                            <option value="11 Years">11 Years</option>
                                            <option value="12 Years">12 Years</option>
                                            <option value="13 Years">13 Years</option>
                                            <option value="14 Years">14 Years</option>
                                            <option value="15+ Years">15+ Years</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contact-one__form-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-title">
                                        <p class="small-title">Ask for More Details</p>
                                        <h2 class="title-block">Personal Details</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Full Name <strong>[as per Taxpayer ID]</strong></label>
                                        <input type="text" name="yourname" class="form-control contact-one__form-input" placeholder="Full Name" required="" fdprocessedid="19rje8">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" name="your-email" class="form-control contact-one__form-input" placeholder="Your Email" required="" fdprocessedid="pdllg7">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile Number*</label>
                                        <input type="number" name="phonenumber" class="form-control contact-one__form-input" placeholder="Mobile Number" required="" fdprocessedid="7uhk07">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Marital Status*</label>
                                        <select name="martialstatus" class="contact-one__form-input custom-select" required="" fdprocessedid="yx5lbs">
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Co Habiting">Co Habiting</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Civil Union">Civil Union</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Partner">Partner</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Birth Date* <strong>[as per Taxpayer ID]</strong></label>
                                        <input type="text" name="birthdate" class="form-control contact-one__form-input" placeholder="Birth Date" required="" fdprocessedid="bwl13">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Number Of Dependents*</label>
                                        <select name="numberofdependents" class="contact-one__form-input custom-select" required="" fdprocessedid="1ixn69">
                                            <option value="0 Dependents">0 Dependents</option>
                                            <option value="1 Dependents">1 Dependents</option>
                                            <option value="2 Dependents">2 Dependents</option>
                                            <option value="3 Dependents">3 Dependents</option>
                                            <option value="4+ Dependents">4+ Dependents</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="contact-one__form-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-title">
                                        <p class="small-title">Street, City And State</p>
                                        <h2 class="title-block">Address Details</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>House No/Name*</label>
                                        <input type="text" name="house-no" class="form-control contact-one__form-input" placeholder="House Number/Name" required="" fdprocessedid="kml1v">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Street*</label>
                                        <input type="text" name="street" class="form-control contact-one__form-input" placeholder="Street" required="" fdprocessedid="39hq2h">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>City*</label>
                                        <input type="text" name="city" class="form-control contact-one__form-input" placeholder="Birth Date" required="" fdprocessedid="rc38cq">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>State*</label>
                                        <input type="text" name="state" class="form-control contact-one__form-input" placeholder="State" required="" fdprocessedid="vgzsr">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country*</label>
                                        <input type="text" name="country" class="form-control contact-one__form-input" placeholder="Country" required="" fdprocessedid="6fh9ro">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Pin Code*</label>
                                        <input type="number" name="pin" class="form-control contact-one__form-input" placeholder="Pin Code" required="" fdprocessedid="medduf">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contact-one__form-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-title">
                                        <p class="small-title">Employment and other stuff</p>
                                        <h2 class="title-block">Other Details</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employment Industry*</label>
                                        <input type="text" name="employmentindustry" class="form-control contact-one__form-input" placeholder="Employment Industry" required="" fdprocessedid="wu6fhr">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employer Name*</label>
                                        <input type="text" name="employer_name" class="form-control contact-one__form-input" placeholder="Employer Name" required="" fdprocessedid="t4iwfw">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Employer Status*</label>
                                        <select name="employer_status" class="contact-one__form-input custom-select" required="" fdprocessedid="dkfm7s">
                                            <option value="Full Time Employed">Full Time Employed</option>
                                            <option value="Part Time Employed">Part Time Employed</option>
                                            <option value="Self Employed">Self Employed</option>
                                            <option value="Temporarily Employed">Temporarily Employed</option><option value="Student">Student</option>
                                            <option value="Pension">Pension</option>
                                            <option value="Disability">Disability</option>
                                            <option value="Unemployed">Unemployed</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Length of Employment*</label>
                                        <input type="text" name="lengthemployment" class="form-control contact-one__form-input" placeholder="Length of Employment" required="" fdprocessedid="veanr">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Work Phone Number*</label>
                                        <input type="number" name="worknumber" class="form-control contact-one__form-input" placeholder="Work Phone Number" required="" fdprocessedid="28idb8">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contact-one__form-submit">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Submit" class="thm-btn" fdprocessedid="zzam4e">
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

        <!-- template js -->
        <script src="{{ asset('js/frontend/theme.js') }}"></script>
    </body>
</html>
