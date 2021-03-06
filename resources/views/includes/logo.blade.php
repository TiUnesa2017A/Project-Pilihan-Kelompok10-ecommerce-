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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/simpleCart.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
      <!-- Navbar top -->
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="text-decoration: none;" > <i class="fa fa-cart-plus" style="color: #fff; font-size: 21px;"></i><span class="" style="font-size: 60%; background-color: red; padding: 2px 4px; border-radius: 4px;"> {{Cart::count()}} </span> <span class="caret"></span></a>

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
                   <!-- @endforeach -->
                  <li class="divider"></li>
                  <li><a class="text-center pull-right btn btn-info btn-xs" href="{{route('cartIndex')}}" style="margin-right: 10px; margin-top: 4px;">View Cart</a></li>
                   @endif
                  </ul>
                </li>
              </ul>

                    <!-- Right Side Of Navbar -->
                </div>
            </div>
        </nav>

        @yield('content')
        
        <br><br>

        @include('includes.footer')
    </div>

    
</body>
</html>