@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="mid-class">
         <div class="art-right-w3ls">
            <h2>Sign In Here</h2>
            <form method="POST" action="{{ route('login') }}">
               {{ csrf_field() }}
               <div class="main">
                  <div class="form-left-to-w3l{{ $errors->has('email') ? ' has-error' : '' }}">
                     <label for="email" class="control-label" style="color: white;">E-Mail Address</label>

                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" style="width: 450px;" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                     <div class="clear"></div>
                  </div>
                  <div class="form-left-to-w3l{{ $errors->has('password') ? ' has-error' : '' }} ">
                     <label for="password" class="control-label" style="color: white;">Password</label>

                            <div>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div class="left-side-forget">
                  <input class="form-check-input remenber-me" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color: white;">
                                        {{ __('Remember Me') }}
                                    </label>
               </div>
               <div class="right-side-forget">
                  
                    @if (Route::has('password.request'))
                        <a class="label label-danger" href="{{ route('password.request') }}" style="text-decoration: none; color: black;">
                          {{ __('Forgot Your Password...?') }}
                        </a>
                     @endif
               </div>
               <div class="clear"></div>
               <div class="btnn">
                  
                     <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                     </button>
                            
               </div>
            </form>
            <div class="w3layouts_more-buttn">
               <h3>Don't Have an account..?</h3>
               <br>
                <span class="label label-danger"> 
                    <a href="{{ route('register') }}" class="">Sign Up Here
                    </a>
                </span>
            </div>
            <!-- popup-->
            <div id="content1" class="popup-effect">
               <div class="popup">
                  <!--login form-->
                  
                  <!--//login form-->
                  <a class="close" href="#">&times;</a>
               </div>
            </div>
            <!-- //popup -->
         </div>
         <div class="art-left-w3ls">
            <h1 class="header-w3ls">
               Gett Buss Login Form
            </h1>
            <br>
            <h4 style="color: black;">Lets get in Touch witn The Best Bus in Indonesia</h4>
         </div>
      </div>
</div>
@endsection
