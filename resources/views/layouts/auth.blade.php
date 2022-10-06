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
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="{{asset('assets/images/favicon.ico')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('assets/css/core/libs.min.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('assets/css/hope-ui.min.css?v=1.2.0')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('assets/css/custom.min.css?v=1.2.0')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('assets/css/dark.min.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('assets/css/customizer.min.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('assets/css/rtl.min.css')}}" type="text/css" rel="stylesheet"/>
</head>
<body class=" ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
            @yield('content')
    <script src="{{asset('assets/js/core/libs.min.js')}}"></script>
    <script src="{{asset('assets/js/core/external.min.js')}}"></script>
    <script src="{{asset('assets/js/charts/widgetcharts.js')}}"></script>
    <script src="{{asset('assets/js/charts/vectore-chart.js')}}"></script>
    <script src="{{asset('assets/js/charts/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/plugins/fslightbox.js')}}"></script>
    <script src="{{asset('assets/js/plugins/setting.js')}}"></script>
    <script src="{{asset('assets/js/plugins/slider-tabs.js')}}"></script>
    <script src="{{asset('assets/js/plugins/form-wizard.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/dist/aos.js')}}"></script>
    <script src="{{asset('assets/js/hope-ui.js')}}"></script>
</body>
</html>
