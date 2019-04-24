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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/simpleCart.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animation-aos.css') }}" rel="stylesheet">
    <!-- payment -->
    <link href="{{ asset('css/creditly.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paymentMethod.css') }}" rel="stylesheet">
    <link href="{{ asset('css/easy-responsive-tabs.css') }}" rel="stylesheet">
    <!-- main menu (home) theme -->
    <link href="{{ asset('css/home/default-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/jquery.simpleLens.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/nouislider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/sequence-theme.modern-slide-in.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/style.css') }}" rel="stylesheet">
    <!-- -->
    <!-- post blog -->

</head>
<body>
    <div id="app">
      <!-- Navbar top -->
          <div class="nav_top">
            <ul>
              <li><a href="\faq">FAQ</a></li>
              <li><a href="\produk">Product</a></li>
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
                      <!-- Cart -->
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="text-decoration: none;" > <i class="fa fa-cart-plus" style="color: black; font-size: 21px;"></i><span class="" style="font-size: 60%; background-color: #e5222c; color: black; padding: 2px 4px; border-radius: 4px;"> {{Cart::count()}} </span> <span class="caret"></span></a>

                      <ul class="dropdown-menu dropdown-cart" role="menu" style="margin-top: 8px; margin-left: -70px;">
                        @if($cartItems->isEmpty())
                        <div class="text-center">Cart is Empty</div>
                        <li><a class="text-center pull-right btn btn-info btn-xs" href="{{route('cartIndex')}}" style="margin-right: 10px; margin-top: 4px;">View Cart</a></li>

                        @else
                        @foreach ($cartItems as $cart)
                      <li style="height: 100px;">
                          <span class="item">
                          <span class="item-left">
                           <div class="row">
                            <div class="col-md-4" style="padding-right: 0;">
                                <img src="http://localhost:8000/image/{{$cart->options->has('image')?$cart->options->image:''}}" alt="" style="width: 100%" />
                            </div>
                           <div class="col-md-8" style="padding-left: 0;">
                            <span class="item-info">
                            <p style="line-height: 1  ; margin-bottom: 0;">Nama: {{$cart->name}}</p>
                            <p><b>Harga: {{$cart->price}}</b></p>
                          </span>
                          </div>
                          <div class="col-md-2">
                             <form action="{{route('deleteCart', $cart->rowId)}}" method="post">
                                {{ csrf_field() }}
                                 {{ method_field('DELETE') }}
                             <button type="submit" class="btn btn-sm btn-danger pull-right">x</button>
                            </form>
                        </div>
                        </div>
                      </span>
                    </span>
                  </li>
                  <!--  @endforeach -->
                  <li class="divider"></li>
                  <li><a class="text-center pull-right btn btn-info btn-xs" href="{{route('cartIndex')}}" style="margin-right: 10px; margin-top: 4px;">View Cart</a></li>
                  @endif
                  </ul>
                </li>
              </ul>

                    <!-- Right Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li style="margin-left: 70px; margin-top: -24px;"><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('welcome') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        @include('includes.footer')
    </div>

   
<!-- dropdown smooth -->
  <script>
    $(document).ready(function () {
      $(".dropdown").hover(
        function () {
          $('.dropdown-menu', this).stop(true, true).slideDown("fast");
          $(this).toggleClass('open');
        },
        function () {
          $('.dropdown-menu', this).stop(true, true).slideUp("fast");
          $(this).toggleClass('open');
        }
      );
    });
  </script>
  <!-- //dropdown smooth -->

  <script>
    AOS.init({
      easing: 'ease-out-back',
      duration: 1000
    });
  </script>
  <!-- //animation js -->

<!-- Main menu Script js -->
  <script src="{{ asset('js/mainMenu/custom.js') }}"></script>
  <script src="{{ asset('js/mainMenu/jquery.simpleGallery.js') }}"></script>
  <script src="{{ asset('js/mainMenu/jquery.simpleLens.js') }}"></script>
  <script src="{{ asset('js/mainMenu/jquery.smartmenus.bootstrap.js') }}"></script>
  <script src="{{ asset('js/mainMenu/jquery.smartmenus.js') }}"></script>
  <script src="{{ asset('js/mainMenu/nouislider.js') }}"></script>
  <script src="{{ asset('js/mainMenu/sequence.js') }}"></script>
  <script src="{{ asset('js/mainMenu/sequence-theme.modern-slide-in.js') }}"></script>
  <script src="{{ asset('js/mainMenu/slick.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- //Main menu Script js// -->

<!-- Payment -->
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
<!-- payment -->

</body>
</html>