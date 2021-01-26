<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="refresh" content="60">

    <title>{{ config('app.name', 'IMELBO2077' )}}</title>

    <!-- Scripts -->
    <script src="{{ config('APP_URL', 'https://weather.sandintheface.com') }}/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ config('APP_URL', 'https://weather.sandintheface.com') }}/css/app.css" rel="stylesheet">
</head>

    <body>
        <!-- @include('inc.current') -->
        @include('inc.navbar')

        <div class="container-fluid no-gutters">
            @yield('content')
        </div>

        <footer class="footer">
            @include('inc.footer')
        </footer>

    </body>
</html>
