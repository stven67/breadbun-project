@extends('layouts.app')

@section('content')

<style>
    .register-form {
        background-color: #ffffff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        max-width: 400px;
        margin: auto;
    }

    .register-form .card-header {
        background-color: transparent;
        color: #c79850; /* Ubah warna teks header */
        border-bottom: none;
        text-align: center;
        font-size: 32px;
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
        margin-top: 15px;
    }

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card register-form">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="row g-3">
                        @csrf

                        <div class="col-12 mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
