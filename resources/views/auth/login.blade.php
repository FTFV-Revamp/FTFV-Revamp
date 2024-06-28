@extends('layouts.app')
@push('style')
<link rel="stylesheet" href="{{ asset('css/login.css') }}"> 
@endpush
@section('content')
<!-- <style>
    .custom-header {
        font-size: 2rem;
        font-weight: 900;
    }
    .custom-paragraph {
        font-size: 1rem;
        color: #A4A9B2;
    }
    .btn-custom {
        background-color: #010E51;
        border-color: #010E51;
        color: white;
        width: 100%;
    }
    .btn-custom:hover {
        background-color: #3967C2;
        border-color: #3967C2;
        color: white;
    }
    .container-full {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .forgot-password {
        /* text-align: start; */
        margin-top: 10px;
        font-size: 0.9rem;
    }
</style> -->
<div class="container-full">
    <div>
        <div class="custom-header">{{ __('Login') }}</div>
        <p class="custom-paragraph">Please fill your detail to access your account.</p>
        <form id="loginForm" method="POST" action="{{ route('login') }}" class="mb-3">
            @csrf
            <div class="mb-3">
                <label for="Username" class="form-label">{{ __('Username') }}</label>
                <input type="text" class="form-control " id="Username" name="Username" placeholder="Username" required>
                <div class="invalid-feedback">
                    Please enter a valid username.
                </div>
            </div>
            <div class="mb-3 position-relative">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control toggle-password" id="password" name="password" placeholder="Password" required>
                    <span class="input-group-text toggle-password-icon">
                        <i class="far fa-eye"></i>
                    </span>
                </div>
                <div class="invalid-feedback">
                    Please enter your password.
                </div>
            </div>
            <div class="mb-3">
                <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-custom">{{ __('Login') }}</button>
            </div>
        </form>
        <div>Don’t have an account?<a href="{{ route('register') }}" class="text-decoration-none"> Register</a> </div>
        
    </div>
</div>
@endsection
