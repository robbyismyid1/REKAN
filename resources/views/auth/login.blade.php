@extends('layouts.login')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-26">
                    <img style="width: 75%; height: 75%;" src="../admin/assets/img/uinlogo.png" alt=""> 
                </span>
                <span class="login100-form-title p-b-48">
                    Selamat Datang
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                    <input id="login" class="form-control input100 {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="login" placeholder="Username / E-mail">
                    @if ($errors->has('username') || $errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                        </span>
                    @endif   
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="form-control input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>
                 @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Lupa Kata Sandi?') }}
                    </a>
                @endif

                <div class="text-center p-t-115">
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection