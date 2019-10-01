@extends('layouts.login')

@section('content')
<div class="container-login100">
    <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
            <img src="{{ asset('admin/assets/img/uin.png')}}" alt="IMG">
        </div>

        <form method="POST" action="{{ route('password.email') }}" class="login100-form validate-form">
            @csrf
            <span class="login100-form-title">
                Forgot Password
            </span>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input style="width: 150%" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>

            <div class="text-center p-t-12">
            
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