<header id="site-header" class="site-header sticky-header mobile-header-light header-style-1">
    <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="social-list fleft">
                        <li><a href="javascript:void(0);" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:void(0);" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="javascript:void(0);" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="javascript:void(0);" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="javascript:void(0);" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                    <div class="topbar-text fright">Opening Hours : Monday to Saturday - 8am to 9pm</div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header md-hidden sm-hidden">
        <div class="main-header-top" {{-- main-header-bottom --}}>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-wrap-table">
                            <div id="site-logo" class="site-logo col-media-left col-media-middle">
                                <a href="{{ route('index') }}">
                                    <img class="logo-static"
                                        src="{{ asset('guest/img/cropped-cropped-Blue-With-Sparkles-Cleaning-Service-Logo-1-3.png') }}"
                                        alt="Money Housing" />
                                    <img class="logo-scroll"
                                        src="{{ asset('guest/img/cropped-cropped-Blue-With-Sparkles-Cleaning-Service-Logo-1-3.png') }}"
                                        alt="Money Housing" />
                                </a>
                            </div>
                            <div class="col-media-body col-media-middle">
                                <ul class="info-list info_on_right_side fright">
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <b style="color:#fff">Free call:
                                            <a href="tel:+919891845151" style="font-size:24px">+91 989 184 5151</a>
                                        </b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header_mobile">
        <div class="mlogo_wrapper clearfix">
            <div class="mobile_logo">
                <a href="{{ route('index') }}">
                    <img
                        src="{{ asset('guest/img/cropped-cropped-Blue-With-Sparkles-Cleaning-Service-Logo-1-3.png') }}"
                        alt="Money Housing" />
                </a>
            </div>
        </div>
    </div>
</header>
