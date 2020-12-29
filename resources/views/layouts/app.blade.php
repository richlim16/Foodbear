<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Food Bear</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="margin-bottom: 0px;">
                <a href="/landing"><img src="images/foodbear-logo-w-title.png" alt="" srcset="" width="35%" style="float: left; text-align: center; padding: 10px 0px"></a>
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Food Bear') }}
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                                <li  class="nav-item">
                                    <a class="nav-link" href="/landing">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/menu">Menu</a>
                                </li>

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
                            @if(Auth::user())
                            <li class="nav-item">
                            <form class="nav-link" action="/cart" method="post">
                              @csrf
                              <input type="hidden" id="customerId" name="customerId"value="{{Auth::user()->id}}">
                              <input type="submit" value="Cart">
                            </li>
                            </form>
                            @endif
                            <li  class="nav-item">
                                <a class="nav-link" href="/landing">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/menu">Menu</a>
                            </li>
                            @if(Auth::user()->admin == 1)
                            <li>
                                <a class="nav-link" href="/foodForm">Food Form</a>
                            </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @if(Auth::user())
                                    <form action="/history" method="post">
                                      @csrf
                                      <input type="hidden" id="customerId" name="customerId"value="{{Auth::user()->id}}">
                                      <button type="submit" class="dropdown-item">History</button>
                                    </form>
                                    @endif
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>

    <footer class="footer footer-font">
        <div class="row">
            <div class="col-4 offset-md-1">
                <div class="footer-desc">
                    <a href=""><img class="footer-logo" src="images/foodbear-logo-w-title.png" alt="logo" style="width: 250px; margin-bottom: 10px;"></a>
                    <p style="text-align: justify;">
                        Food Bear group is the leading global online food delivery marketplace. Headquatered in Cebu, Philippines. It operates
                        is more than 40 cities in the nation. Food Bear allows users to conveniently discover food around their neighborhood and directly order
                        their favourite meals online.<br><br>

                        In the Philippines, Food Bear was launched in December 2020 and has since grown to over 1,000 partner restaurants nationwide.
                    </p>
                </div>
                <p class="separator-right"></p>
            </div>
            <div class="col-1 offset-md navigation">
                <div class="about-footer">
                    <b><p class="footer-title">Navigation</p></b>
                    <p class="footer-underline"></p>
                    <ul class="footer-menu inline-padding">
                        <a href="#top"><li>Top</li></a>
                        <a href="/menu"><li>Menu</li></a>
                        <a href=""><li>Policy</li></a>
                    </ul>
                </div>
            </div>
            <div class="col-2 offset-md ">
                <div class="top-loc-footer">
                    <b><p class="footer-title">Opening Hours</p></b>
                    <p class="footer-underline1"></p>
                    <ul class="footer-menu inline-padding">
                        <li>Mon - Fri</li>
                        <p>9:00 AM - 6:00 PM</p>
                        <li>Sat - Sun</li>
                        <p>9:00 AM - 6:00 PM</p>
                    </ul>
                </div>
            </div>
            <div class="col-3 offset-md">
                <div class="top-loc-footer">
                    <b><p class="footer-title">Contact Us</p></b>
                    <p class="footer-underline"></p>
                    <ul class="footer-menu inline-padding">
                        <li>Email</li>
                        <p><a class="highlight" href=""><b>support@foodbear.com</b></a></p>
                        <li>Phone</li>
                        <p><a class="highlight" href=""><b>0912-345-6789</b></a></p>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col center">
                <p>Copyright © <a class="highlight" href=""><b>FoodBear</b></a> 2020</p>
            </div>
        </div>
    </footer>
</body>
</html>
