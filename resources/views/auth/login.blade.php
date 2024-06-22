@extends('layouts.app')

@section('content')

<style>

    
    .login-form {
        background-color: #ffffff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        max-width: 400px;
        padding: auto;
        margin: auto;
    }

    .login-form .card-header {
        background-color: transparent;
        color: #c79850; /* Ubah warna teks header */
        border-bottom: none;
        text-align: center;
        font-size: 32px;
        padding: 10px 0;
        font-weight: bold;
    }

    .form-control {
        background-color: #f7f7f7;
        border: 1px solid #eaeaea;
        color: #333333;
        border-radius: 5px;
        font-size: 16px;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control:focus {
        border-color: #c79850; /* Ubah warna border saat focus */
        box-shadow: 0 0 0 0.2rem rgba(199, 152, 80, 0.25); /* Ubah shadow saat focus */
    }

    .btn-primary {
        background-color: #c79850; /* Ubah warna background tombol */
        border-color: #c79850; /* Ubah warna border tombol */
        color: white;
        font-size: 18px;
        border-radius: 5px;
        padding: 12px 20px;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #b5833d; /* Ubah warna background tombol saat hover */
        border-color: #b5833d; /* Ubah warna border tombol saat hover */
    }

    .btn-link {
        color: #c79850; /* Ubah warna link */
        font-size: 16px;
        text-decoration: none;
    }

    .forgot-password {
        text-align: center;
    }

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> <!-- Menggunakan col-md-8 untuk layout yang lebih baik -->
            <div class="card login-form">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="row g-3"> <!-- Menambahkan class row g-3 untuk Bootstrap grid -->
                        @csrf

                        <div class="col-12 mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="col-12">
                                <a class="btn btn-link d-block text-center forgot-password" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
