<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/typicons.min.css">
     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/FAQ-Frequentlly-Asked-Questions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/FAQ-Frequentlly-Asked-Questions.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <!-- Navbar top -->
          <!-- <div class="nav_top">
            <ul>
              <li><a href="\faq">FAQ</a></li>
              <li><a href="\produk">Product</a></li>
              <li><a href="\blog">Blog</a></li>
              <li><a href="\home">Home</a></li>
            </ul>
        </div> -->
      <!-- End Navbar top -->
        <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <!-- Branding Image -->
                    <span class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </span>
                </div>

                <div class="navbar" >
                    <!-- Left Side Of Navbar -->                                        

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="nav navbar-nav navbar-right ml-auto">
                       
                        @guest
                            <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a href="{{ route('register') }}">Register</a></li>
                        @else
                              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> -->
                </div>
            </div>
        </nav>

        @yield('content')

        @include('includes.footer')
    </div>

   
</body>
</html>