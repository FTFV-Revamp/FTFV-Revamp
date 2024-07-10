@extends('layouts.app')
@push('style')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<style>
    .container-full {
        width: 100%;
        padding: 0;
        margin: 0;
    }
</style>

@endpush
@section('content')

<div class="container-full">
    <div class="container mt-5">
        <h2 class="custom-header text-center mb-3">{{ __('Contact Us') }}</h2>
        <div class="row d-flex align-items-stretch">
            <div class="col-md-6 d-flex flex-column h-100">
                <!-- Contact Form -->
                <form id="loginForm" method="POST" action="{{ route('post-contact') }}" class="mb-3 flex-fill">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter your name" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">{{ __('Message') }}</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" placeholder="Enter your message"></textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-custom">{{ __('Send') }}</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex flex-column h-100">
                <!-- Google Map -->
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.83543450929!2d144.95373531531544!3d-37.816279279751554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5779f0a0f8487e!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1601062513081!5m2!1sen!2sau" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
