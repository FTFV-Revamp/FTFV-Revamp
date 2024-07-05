@extends('layouts.app')
@push('style')
<link rel="stylesheet" href="{{ asset('css/register.css') }}"> 
@endpush
@section('content')

<div class="container-register">
    <div>
        <div class="register-header">{{ __('Register') }}</div>
        <p class="register-paragraph">Please provide your details to create your account.</p>
        <form id="registerForm" method="POST" action="{{ route('register') }}" class="mb-3">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">{{ __('Username') }}</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" required>
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">{{ __('Email') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Phone" class="form-label">{{ __('Phone Number') }}</label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" placeholder="Phone Number" required>
                @error('phone_number')
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
            
            
            <div class="mb-3 position-relative">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control toggle-password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                    <span class="input-group-text toggle-password-icon">
                        <i class="far fa-eye"></i>
                    </span>
                </div>
            </div>  
            <div class="mb-3">
                <button type="submit" class="btn btn-register">{{ __('Register') }}</button>
            </div>
        </form>
        <div>Don’t have an account?<a href="{{ route('login') }}" class="text-decoration-none"> Login</a> </div>
        
    </div>
</div>
@endsection
