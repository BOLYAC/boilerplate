<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="hold-transition sidebar-mini" id="app">
    <div class="wrapper">
        @include('backend.partials.navBar')
        @include('backend.partials.sideBar')

        @yield('content')

        @include('backend.partials.footer')

    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('backend/js/app.js') }}" defer></script>
</body>
</html>
