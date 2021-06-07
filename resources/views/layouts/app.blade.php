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
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">Easy Astronomy</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse rounded" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/community">{{ __('Community') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/soon">{{ __('Partpicker') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/soon">{{ __('Observing') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/soon">{{ __('News') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif

                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Sign in') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-12 ">
                    <h1>LOGO</h1>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="">Community</a></li>
                        <li><a href="">Partpicker</a></li>
                        <li><a href="">Observing</a></li>
                        <li><a href="">News</a></li>
                      </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <h3>Contact</h3>
                    <ul class="">
                        <li><a href="">Link</a></li>
                        <li><a href="">Link</a></li>
                        <li><a href="">Link</a></li>
                        <li><a href="">Link</a></li>
                      </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <h3>About</h3>
                    <p>We are Easy Astronomy and we believe that astronomy should be easy. </p>
                </div>
            </div>    
            <hr>
            <h5 class="text-center mt-4">Social media</h5>
            <div class="text-center">
                    <a href="#"><i class="fab fa-twitter footer-social"></i></a>
                    <a href="#"><i class="fab fa-facebook footer-social"></i></a>
                    <a href="#"><i class="fab fa-instagram footer-social"></i></a>
                    <a href="#"><i class="fab fa-github footer-social"></i></a>
                    <a href="#"><i class="fab fa-youtube footer-social"></i></a>
                   
                </div>
                </div>       
            <p class="text-center mt-3"> Copyright © 2021. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
