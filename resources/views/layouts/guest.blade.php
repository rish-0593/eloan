<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Money Housing</title>

        <link rel='stylesheet' href="{{ asset('guest/css/style.min.css') }}" />
        <link rel='stylesheet' href="{{ asset('guest/css/styles.css') }}" />
        <link rel='stylesheet' href="{{ asset('guest/css/bootstrap.css') }}" />
        <link rel='stylesheet' href="{{ asset('guest/css/font-awesome.css') }}" />
        <link rel='stylesheet' href="{{ asset('guest/css/ionicon.css') }}" />
        <link rel='stylesheet' href="{{ asset('guest/css/slick.css') }}" />
        <link rel='stylesheet' href="{{ asset('guest/css/slick-theme.css') }}" />
        <link rel='stylesheet' href="{{ asset('guest/css/magnific-popup.css') }}" />
        <link rel='stylesheet' href="{{ asset('guest/css/style.css') }}" />
        <link rel='stylesheet' href="{{ asset('guest/css/js_composer.min.css') }}" />


        <link rel="stylesheet" href="{{ asset('css/frontend/bootstrap-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/datetimepicker/jquery.datetimepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/jquery-ui.css') }}">

        <script src="{{ asset('guest/js/jquery.min.js') }}"></script>
        <script src="{{ asset('guest/js/jquery-migrate.min.js') }}"></script>

        <link rel='stylesheet' href="{{ asset('guest/css/custom.css') }}" />

        <link rel="icon" href="{{ asset('guest/icon/logo-32x32.png') }}" sizes="32x32" />
        <link rel="icon" href="{{ asset('guest/icon/logo-192x192.png') }}" sizes="192x192" />
        <link rel="apple-touch-icon" href="{{ asset('guest/icon/logo-180x180.png') }}" sizes="180x180" />
        <link rel="icon" href="{{ asset('guest/icon/logo-270x270.png') }}" sizes="270x270" />

        <link rel='stylesheet' href="{{ asset('guest/css/fonts.css') }}" />
        <style>
            span > label{
                font-size: 16px;
                color: #fff;
            }
            span > label.error{
                color: #ff5151;
                font-style: italic;
                font-size: 15px;
            }
        </style>
    </head>
    <body class="home page-template-default page page-id-1530 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">
        <div id="page" class="site">
            {{-- Header --}}
            <x-guest.header />

            {{ $slot }}

            {{-- Footer --}}
            <x-guest.footer />
        </div>

        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:800%2C300%2C700%7COpen+Sans:400%7CRoboto:400&amp;display=swap"
            rel="stylesheet" property="stylesheet" media="all" type="text/css">

        <link rel="preload" as="font" id="rs-icon-set-revicon-woff"
            href="{{ asset('guest/fonts/revicons.woff') }}"
            type="font/woff" crossorigin="anonymous" media="all" />

            <script src="{{ asset('js/frontend/jquery-3.5.1.min.js') }}"></script>
            <script src="{{ asset('js/frontend/jquery.validate.min.js') }}"></script>
            <script src="{{ asset('js/frontend/bootstrap-select.min.js') }}"></script>
            <script src="{{ asset('plugins/datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
            <script src="{{ asset('js/frontend/jquery-ui.js') }}"></script>

        <link rel='stylesheet' id='rs-plugin-settings-css'
            href='{{ asset('guest/css/rs6.css') }}'
            type='text/css' media='all' />

        <style id='rs-plugin-settings-inline-css' type='text/css'>
            .tparrows {
                background: rgba(0, 56, 122, 0.2);
                transition: 0.3s
            }

            .tparrows:hover {
                background: rgba(0, 56, 122, 1)
            }

            #rev_slider_3_1_wrapper .custom.tparrows {
                cursor: pointer;
                background: #000;
                background: rgba(0, 0, 0, 0.5);
                width: 40px;
                height: 40px;
                position: absolute;
                display: block;
                z-index: 1000
            }

            #rev_slider_3_1_wrapper .custom.tparrows.rs-touchhover {
                background: #000
            }

            #rev_slider_3_1_wrapper .custom.tparrows:before {
                font-family: 'revicons';
                font-size: 15px;
                color: #fff;
                display: block;
                line-height: 40px;
                text-align: center
            }

            #rev_slider_3_1_wrapper .custom.tparrows.tp-leftarrow:before {
                content: '\e824'
            }

            #rev_slider_3_1_wrapper .custom.tparrows.tp-rightarrow:before {
                content: '\e825'
            }

            #rev_slider_3_1_wrapper .ares.tp-bullets {}

            #rev_slider_3_1_wrapper .ares.tp-bullets:before {
                content: ' ';
                position: absolute;
                width: 100%;
                height: 100%;
                background: transparent;
                padding: 10px;
                margin-left: -10px;
                margin-top: -10px;
                box-sizing: content-box
            }

            #rev_slider_3_1_wrapper .ares .tp-bullet {
                width: 13px;
                height: 13px;
                position: absolute;
                background: #e5e5e5;
                border-radius: 50%;
                cursor: pointer;
                box-sizing: content-box
            }

            #rev_slider_3_1_wrapper .ares .tp-bullet.rs-touchhover,
            #rev_slider_3_1_wrapper .ares .tp-bullet.selected {
                background: #ffffff
            }

            #rev_slider_3_1_wrapper .ares .tp-bullet-title {
                position: absolute;
                color: #888888;
                font-size: 12px;
                padding: 0px 10px;
                font-weight: 600;
                right: 27px;
                top: -4px;
                background: rgba(255, 255, 255, 0.75);
                visibility: hidden;
                transform: translatex(-20px);
                -webkit-transform: translatex(-20px);
                transition: transform 0.3s;
                -webkit-transition: transform 0.3s;
                line-height: 20px;
                white-space: nowrap
            }

            #rev_slider_3_1_wrapper .ares .tp-bullet-title:after {
                width: 0px;
                height: 0px;
                border-style: solid;
                border-width: 10px 0 10px 10px;
                border-color: transparent transparent transparent rgba(255, 255, 255, 0.75);
                content: ' ';
                position: absolute;
                right: -10px;
                top: 0px
            }

            #rev_slider_3_1_wrapper .ares .tp-bullet.rs-touchhover .tp-bullet-title {
                visibility: visible;
                transform: translatex(0px);
                -webkit-transform: translatex(0px)
            }

            #rev_slider_3_1_wrapper .ares .tp-bullet.selected.rs-touchhover .tp-bullet-title {
                background: #ffffff
            }

            #rev_slider_3_1_wrapper .ares .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {
                border-color: transparent transparent transparent #ffffff
            }

            #rev_slider_3_1_wrapper .ares.tp-bullets.rs-touchhover .tp-bullet-title {
                visibility: hidden
            }

            #rev_slider_3_1_wrapper .ares.tp-bullets.rs-touchhover .tp-bullet.rs-touchhover .tp-bullet-title {
                visibility: visible;
                transform: translateX(0px) translatey(0px);
                -webkit-transform: translateX(0px) translatey(0px)
            }

            #rev_slider_3_1_wrapper .ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title {
                right: auto;
                left: 27px;
                transform: translatex(20px);
                -webkit-transform: translatex(20px)
            }

            #rev_slider_3_1_wrapper .ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title:after {
                border-width: 10px 10px 10px 0 !important;
                border-color: transparent rgba(255, 255, 255, 0.75) transparent transparent;
                right: auto !important;
                left: -10px !important
            }

            #rev_slider_3_1_wrapper .ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {
                border-color: transparent #ffffff transparent transparent !important
            }

            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet-title,
            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet-title {
                top: -35px;
                left: 50%;
                right: auto;
                transform: translateX(-50%) translateY(-10px);
                -webkit-transform: translateX(-50%) translateY(-10px)
            }

            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet-title:after,
            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet-title:after {
                border-width: 10px 10px 0px 10px;
                border-color: rgba(255, 255, 255, 0.75) transparent transparent transparent;
                right: auto;
                left: 50%;
                margin-left: -10px;
                top: auto;
                bottom: -10px
            }

            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet.selected.rs-touchhover .tp-bullet-title:after,
            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {
                border-color: #ffffff transparent transparent transparent
            }

            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet.rs-touchhover .tp-bullet-title,
            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet.rs-touchhover .tp-bullet-title {
                transform: translateX(-50%) translatey(0px);
                -webkit-transform: translateX(-50%) translatey(0px)
            }

            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title {
                top: 25px;
                left: 50%;
                right: auto;
                transform: translateX(-50%) translateY(10px);
                -webkit-transform: translateX(-50%) translateY(10px)
            }

            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title:after {
                border-width: 0 10px 10px 10px;
                border-color: transparent transparent rgba(255, 255, 255, 0.75) transparent;
                right: auto;
                left: 50%;
                margin-left: -10px;
                bottom: auto;
                top: -10px
            }

            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {
                border-color: transparent transparent #ffffff transparent
            }

            #rev_slider_3_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet.rs-touchhover .tp-bullet-title {
                transform: translateX(-50%) translatey(0px);
                -webkit-transform: translateX(-50%) translatey(0px)
            }

            #rev_slider_3_1_wrapper rs-loader.spinner2 {
                background-color: #FFFFFF !important
            }
        </style>

        <script type='text/javascript'
            src='{{ asset('guest/js/index-swv.js') }}'
            id='swv-js'></script>

        <script type='text/javascript'
            src='{{ asset('guest/js/index.js') }}'
            id='contact-form-7-js'></script>

        <script type='text/javascript'
            src='{{ asset('guest/js/rbtools.min.js') }}'
            defer async id='tp-tools-js'></script>

        <script type='text/javascript'
            src='{{ asset('guest/js/rs6.min.js') }}'
            defer async id='revmin-js'></script>

        <script type='text/javascript'
            src='{{ asset('guest/js/countto.min.js') }}'
            id='countto-js'></script>

        <script type='text/javascript'
            src='{{ asset('guest/js/isotope.pkgd.min.js') }}'
            id='isotope-js'></script>

        <script type='text/javascript'
            src='{{ asset('guest/js/jquery.magnific-popup.min.js') }}'
            id='magnific-js'></script>

        <script type='text/javascript'
            src='{{ asset('guest/js/slick.min.js') }}'
            id='slick-slider-js'></script>

        <script type='text/javascript'
            src='{{ asset('guest/js/scripts.js') }}'
            id='consultax-scripts-js'></script>

        <script type='text/javascript'
            src='{{ asset('guest/js/header-footer.js') }}'
            id='custom-header-scripts-js'></script>

        <script type='text/javascript'
            src='{{ asset('guest/js/js_composer_front.min.js') }}'
            id='wpb_composer_front_js-js'></script>

        <script id="rs-initialisation-scripts">
            var	tpj = jQuery;
            var	revapi3;

            if(window.RS_MODULES === undefined) window.RS_MODULES = {};
            if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
            RS_MODULES.modules["revslider31"] = {once: RS_MODULES.modules["revslider31"]!==undefined ? RS_MODULES.modules["revslider31"].once : undefined, init:function() {
                window.revapi3 = window.revapi3===undefined || window.revapi3===null || window.revapi3.length===0  ? document.getElementById("rev_slider_3_1") : window.revapi3;
                if(window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length==0) { window.revapi3initTry = window.revapi3initTry ===undefined ? 0 : window.revapi3initTry+1; if (window.revapi3initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider31"].init()}); return;}
                window.revapi3 = jQuery(window.revapi3);
                if(window.revapi3.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_3_1"); return;}
                revapi3.revolutionInit({
                        revapi:"revapi3",
                        DPR:"dpr",
                        duration:7000,
                        visibilityLevels:"1240,1240,778,480",
                        gridwidth:"1200,1200,750,480",
                        gridheight:"700,700,500,500",
                        lazyType:"smart",
                        spinner:"spinner2",
                        perspective:600,
                        perspectiveType:"local",
                        editorheight:"700,760,500,500",
                        responsiveLevels:"1240,1240,778,480",
                        progressBar:{disableProgressBar:true},
                        navigation: {
                            mouseScrollNavigation:false,
                            wheelCallDelay:1000,
                            arrows: {
                                enable:true,
                                style:"custom",
                                hide_onmobile:true,
                                hide_under:767,
                                hide_onleave:true,
                                left: {
                                    h_offset:0,
                                    v_offset:-20
                                },
                                right: {
                                    h_offset:0,
                                    v_offset:-20
                                }
                            },
                            bullets: {
                                enable:true,
                                tmp:"<span class=\"tp-bullet-title\">title</span>",
                                style:"ares",
                                hide_over:768
                            }
                        },
                        viewPort: {
                            global:true,
                            globalDist:"-200px",
                            enable:false,
                            visible_area:"20%"
                        },
                        fallbacks: {
                            allowHTML5AutoPlayOnAndroid:true
                        },
                });

            }}

            if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
        </script>

        {{ $script ?? ''}}
    </body>
</html>
