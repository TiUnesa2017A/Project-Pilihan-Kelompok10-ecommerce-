@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="mid-class">
         <div class="art-right-w3ls">
            <h2 >{{ __('Register') }} Here</h2>
               <div class="letter-w3ls">
                     <form action="#" method="post" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-left-to-w3l">
                          <label for="name" class="col-form-label text-md-right" style="color: white;">{{ __('Name') }}</label>

                            <div >
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus style="width: 425px;">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-left-to-w3l">
                           <label for="email" class="col-form-label text-md-right" style="color: white;">{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-left-to-w3l">
                           <label for="password" class="col-form-label text-md-right" style="color: white;">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-left-to-w3l">
                           <label for="password-confirm" class="col-form-label text-md-right" style="color: white;">{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="btnn">
                           <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                           <br>
                        </div>
                     </form>
                     <div class="clear"></div>
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
               GettBus Register Form
            </h1>
            <br><br>
            <h4 style="color: black; text-align: center;">* <span>Register now to get intouch with our services!!!</span></h4>
         </div>
      </div>
</div>
@endsection
