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
     <!-- Scripts -->
<!--     <script src="{{ asset('js/app.js') }}"></script>
 --><script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/creditly.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paymentMethod.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/easy-responsive-tabs.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <!-- Navbar top -->
          <div class="nav_top">
            <ul>
              <li><a href="\faq">FAQ</a></li>
              <li><a href="\produk">Product</a></li>
              <li><a href="\blog">Blog</a></li>
              <li><a href="\home">Home</a></li>
            </ul>
        </div>
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

<script src="{{ asset('js/creditly.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            var creditly = Creditly.initialize(
              '.creditly-wrapper .expiration-month-and-year',
              '.creditly-wrapper .credit-card-number',
              '.creditly-wrapper .security-code',
              '.creditly-wrapper .card-type');

            $(".creditly-card-form .submit").click(function(e) {
            e.preventDefault();
            var output = creditly.validate();
            if (output) {
              // Your validated credit card output
              console.log(output);
            }
            });
        });
    </script>

 <script src="{{ asset('js/easy-responsive-tabs.js') }}"></script>
    <script>
        $(document).ready(function () {
          $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
            }
          });
        });
    </script>

   
</body>
</html>