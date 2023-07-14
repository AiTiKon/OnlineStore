<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm css_boot_nav">
            <div class="container">
                <a class="navbar-brand text-white d-flex align-items-center" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'ArmStrong') }} -->
                    <svg class="logotype" fill="white" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                        <path d="m829.109 472.674-46.783-46.544 42.13-42.13L672 231.544l-42.13 42.13-47.544-47.544 30-30.76q23.717-23.957 58.526-23.582 34.808.376 58.822 24.342L859.63 326.087q23.957 23.951 23.957 58.41 0 34.46-23.957 58.177l-30.521 30ZM347.913 954.87q-23.951 23.956-58.53 23.956t-58.535-23.956L87.13 810.913q-17.956-18.329-17.956-44.599 0-26.271 17.956-44.227l43.761-43.761 47.544 46.544-41.891 42.369 152.217 152.217 42.369-41.891 46.544 47.544-29.761 29.761Zm393.413-314.935 79.739-79.978-325.022-325.022-79.978 79.739 325.261 325.261Zm-277.369 277.13 80.739-80.5-325.261-325.261-80.5 80.739 325.022 325.022Zm9.239-246.087 102.543-102.543-88.174-88.174-102.543 102.543 88.174 88.174Zm34.434 295.5q-17.887 17.957-43.759 17.957-25.871 0-43.828-17.957L89.283 635.717q-17.957-17.888-17.837-43.639.12-25.752 18.076-43.708l85.239-86.479q18.329-17.956 44.48-17.956 26.15 0 44.107 17.956l74.13 74.37 103.544-103.304-74.37-74.609q-17.956-17.888-17.837-43.64.12-25.751 18.155-43.787l85.321-86.32q18.413-18.036 44.444-18.036 26.031 0 43.982 17.957l330.761 330.521q17.718 18.329 17.837 44.48.12 26.151-17.916 44.186l-86.32 85.321q-17.97 18.035-43.841 18.035-25.871 0-43.825-17.956l-74.37-74.131-103.304 103.544 74.131 74.13q17.956 18.329 18.076 44.48.119 26.151-17.837 44.107l-86.479 85.239Z"/>
                    </svg>
                    <h1>{{ __('ArmStrong') }}</h1>
                </a>
                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
