<!DOCTYPE html><html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Money Housing</title>

        <!-- favicons Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/frontend/favicon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/frontend/favicon-32x32.png') }}">
        <meta name="description" content="Money Housing">

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
        <link rel="stylesheet" href="{{ asset('css/frontend/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontend/jquery-ui.css') }}">
    </head>
    <body>
        <div class="preloader">
            <img class="preloader__image" src="{{ asset('images/frontend/loader.png') }}" alt>
        </div>

        <div class="page-wrapper">
            {{-- Header --}}
            <x-guest.header />

            {{ $slot }}

            {{-- Footer --}}
            <x-guest.footer />
        </div>

        {{-- Mobile Nav --}}
        <x-guest.mobile-nav />

        <a href="javascript:void(0);" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

        <script src="{{ asset('js/frontend/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/frontend/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/frontend/swiper.min.js') }}"></script>
        <script src="{{ asset('js/frontend/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/frontend/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/frontend/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/frontend/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('plugins/datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
        <script src="{{ asset('js/frontend/wow.js') }}"></script>
        <script src="{{ asset('js/frontend/odometer.min.js') }}"></script>
        <script src="{{ asset('js/frontend/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('js/frontend/wNumb.min.js') }}"></script>
        <script src="{{ asset('js/frontend/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/frontend/theme.js') }}"></script>

        {{ $script ?? ''}}
    </body>
</html>
