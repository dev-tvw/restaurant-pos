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
    <link href="{{asset('assets/vendor/aos/dist/aos.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('assets/css/hope-ui.min.css?v=1.2.0')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('assets/css/custom.min.css?v=1.2.0')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('assets/css/dark.min.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('assets/css/customizer.min.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('assets/css/rtl.min.css')}}" type="text/css" rel="stylesheet"/>
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body class="theme-color-yellow" data-aos-easing="ease" data-aos-duration="700" data-aos-delay="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
    @include('partials.sidebar')
    <main class="main-content">
        @include('partials.header')
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            @yield('content')
        </div>
    </main>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
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
