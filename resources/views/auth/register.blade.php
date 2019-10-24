@extends('layouts.login')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-26">
                    Register Page
                </span>
                <span class="login100-form-title p-b-48">
                    <i class="zmdi zmdi-font"></i>
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Enter name">
                    <input class="form-control input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="form-control input100 @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>

                <div class="wrap-input100 validate-input" data-validate = "ex: a@b.c">
                    <input class="form-control input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="E-mail">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
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

                <div class="wrap-input100 validate-input" data-validate="Confirm password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="form-control input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Send
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        Do you have an account?
                    </span>

                    <a class="txt2" href="{{ route('login') }}">
                        Sign In
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection