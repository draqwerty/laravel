@extends('layouts.live')

@section('content')


    <script type="text/javascript" src="https://gitcdn.xyz/cdn/Yerren/FreshWDL/master/InnerContent.js"></script>

    <div id="loadingScreen">
        <div id="loadingText">
            <p id="titleText">Live data for IMELBO2077</p>
            <p id="loadingMessage">Collecting Data.</p>
        </div>
    </div>

    <!-- First script that must be loaded -->
    <script type="text/javascript" src="https://gitcdn.xyz/cdn/Yerren/FreshWDL/master/js_bundles/Loading.js"></script>

    <!-- Include remiaing Scripts -->
    <script type="text/javascript" src="/config.js"></script> <!--Includes the local script that sets customisable variables-->
    <script type="text/javascript" src="https://code.createjs.com/easeljs-0.8.2.min.js"></script> <!--Includes the drawing part of CreateJS: EaselJS-->
    <script type="text/javascript" src="https://code.createjs.com/tweenjs-0.6.2.min.js"></script> <!--Includes the animation part of CreateJS: TweenJS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/opentip/2.4.6/downloads/opentip-native.js"></script> <!--Includes the tooltip library: OpenTip-->
    <script type="text/javascript" src="https://gitcdn.xyz/cdn/Yerren/FreshWDL/master/js_bundles/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script type="text/javascript" src="https://gitcdn.xyz/cdn/Yerren/FreshWDL/master/js_bundles/Globals.js"></script> <!--Includes the script that sets global variables-->
    <script type="text/javascript" src="https://gitcdn.xyz/cdn/Yerren/FreshWDL/master/js_bundles/WidgetsHandlers.min.js"></script> <!--Includes most of the Scripting-->


@endsection
