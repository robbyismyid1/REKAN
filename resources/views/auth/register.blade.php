@extends('layouts.login')

@section('content')
<div class="container-login100">
    <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
            <img src="{{ asset('admin/assets/img/uin.png')}}" alt="IMG">
        </div>

        <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
            @csrf
            <span class="login100-form-title">
                Register
            </span>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" style="width: 150%" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" style="width: 150%" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" style="width: 150%" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" style="width: 150%" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            
            <div class="container-login100-form-btn">
                <button style="width: 150%" type="submit" class="login100-form-btn">
                    Login
                </button>
            </div>


            <div class="text-center p-t-136">
                @if (Route::has('login'))
                <a class="btn btn-link" href="{{ route('login') }}">
                    {{ __('Already have an account? Login here ->') }}
                </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection