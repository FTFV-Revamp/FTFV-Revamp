@extends('layouts.app')
@push('style')
<link rel="stylesheet" href="{{ asset('css/login.css') }}"> 
@endpush
@section('content')

<div class="container-full">
    <div>
        <div class="custom-header">{{ __('Register') }}</div>
        <p class="custom-paragraph">Please provide your details to create your account.</p>
        <form id="loginForm" method="POST" action="{{ route('login') }}" class="mb-3">
            @csrf
            <div class="mb-3">
                <label for="Username" class="form-label">{{ __('Username') }}</label>
                <input type="text" class="form-control " id="Username" name="Username" placeholder="Username" required>
                <div class="invalid-feedback">
                    Please enter a valid username.
                </div>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">{{ __('Email') }}</label>
                <input type="email" class="form-control " id="email" name="email" placeholder="Email" required>
                <div class="invalid-feedback">
                    Please enter a valid username.
                </div>
            </div>
            <div class="mb-3">
                <label for="Phone" class="form-label">{{ __('Phone Number') }}</label>
                <input type="number" class="form-control " id="Phone" name="Phone" placeholder="Phone Number" required>
                <div class="invalid-feedback">
                    Please enter a valid username.
                </div>
            </div>
            <div class="mb-3 position-relative">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control toggle-password" id="password" name="password" required>
                    <span class="input-group-text toggle-password-icon">
                        <i class="far fa-eye"></i>
                    </span>
                </div>
                <div class="invalid-feedback">
                    Please enter your password.
                </div>
            </div>
            <div class="mb-3 position-relative">
                <label for="password_confirmation" class="form-label">{{ __('Password') }}</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control toggle-password" id="password_confirmation" name="password_confirmation" required>
                    <span class="input-group-text toggle-password-icon">
                        <i class="far fa-eye"></i>
                    </span>
                </div>
                <div class="invalid-feedback">
                    Please enter your password.
                </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-custom">{{ __('Register') }}</button>
            </div>
        </form>
        <div>Don’t have an account?<a href="{{ route('login') }}" class="text-decoration-none"> Login</a> </div>
        
    </div>
</div>
@endsection
