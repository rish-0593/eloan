<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $title ?? '' }}</title>

    <link rel="stylesheet" href="{{ asset('css/backend/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/components.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/izitoast/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/pretty-checkbox/pretty-checkbox.min.css') }}">

    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('favicon.ico') }}' />
    <script src="{{ asset('js/backend/app.js') }}"></script>
    <link href="{{ asset('css/backend/app.css') }}" rel="stylesheet" />

    {{ $styles ?? '' }}
</head>

<body x-data="mainState"
    :class="{
        ['dark dark-sidebar theme-black']: isDarkMode,
        ['light light-sidebar theme-white']: !isDarkMode
    }">
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <!-- Navbar -->
            <x-admin.navbar />

            <!-- Sidebar -->
            <x-admin.sidebar />

            <!-- Main Content -->
            {{ $slot }}

            <!-- footer -->
            <x-admin.footer />
        </div>
    </div>

    {{ $modals ?? '' }}

    <script src="{{ asset('js/backend/app.min.js') }}"></script>
    <script src="{{ asset('js/backend/scripts.js') }}"></script>
    <script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/izitoast/iziToast.min.js') }}"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    {{ $scripts ?? '' }}
</body>

</html>
