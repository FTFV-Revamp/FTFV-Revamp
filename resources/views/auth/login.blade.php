@extends('layouts.app')
@push('style')
<link rel="stylesheet" href="{{ asset('css/login.css') }}"> 
@endpush
@section('content')

<div class="container-full">
    <div>
        <div class="custom-header">{{ __('Login') }}</div>
        <p class="custom-paragraph">Please fill your detail to access your account.</p>
        <form id="loginForm" method="POST" action="{{ route('login') }}" class="mb-3">
            @csrf
            <div class="mb-3">
                <label for="Username" class="form-label">{{ __('Username') }}</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="username" required>
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 position-relative">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control toggle-password @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                    <span class="input-group-text toggle-password-icon">
                        <i class="far fa-eye"></i>
                    </span>
                </div>
                @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
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
