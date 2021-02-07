<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Script-Type" content="javascript" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IMELBO2077' )}}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ config('APP_URL', 'https://weather.sandintheface.com') }}/css/app.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://gitcdn.xyz/cdn/Yerren/FreshWDL/master/css/stylesheet01.css" /> <!--Includes the project's css sheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/opentip/2.4.6/css/opentip.css" rel="stylesheet" type="text/css" /> <!--Includes the tooltip's css sheet -->


</head>


	<body onload='initAll();'>

        <script src="{{ config('APP_URL', 'https://weather.sandintheface.com') }}/js/app.js" defer></script>
        <script type="text/javascript" src="https://gitcdn.xyz/cdn/Yerren/FreshWDL/master/UpperContent.js"></script>

        <div class="container-fluid no-gutters">
            @yield('content')
        </div>

        <footer class="footer">
            @include('inc.footer')
        </footer>

    </body>
</html>
