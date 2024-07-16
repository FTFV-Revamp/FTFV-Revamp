@extends('layouts.app')
@push('style')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush
@section('content')
    <div class="container-full">
        <div class="about-section">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 text-lg-start">
                    <h1>About Us</h1>
                    <div class="align-items-center">
                        <div class="d-flex flex-column mt-6">
                            <h2 class="display-5">Welcome to FTFV</h2>
                            <p class="mb-5">At FTFV Revamp, we bring the charm and history of China's Old Towns and Old
                                Villages to your fingertips. Our platform is dedicated to sharing comprehensive and engaging
                                information about these unique and culturally rich destinations across China.</p>
                        </div>
                    </div>
                    <button class="button">Learn More</button>
                </div>
                <div class="col-lg-6">
                    <div class="device-wrapper">
                        <div class="screen">
                            <img src="{{ asset('images/about.png') }}" alt="App Screenshot" class="device-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stats Section -->
        <div class="stats section light-background">
            <div class="container">

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-5">
                        <div class="images-overlap">
                            <img src="{{ asset('images/mission.png') }}" alt="student" class="img-fluid img-1"
                                data-aos="fade-up">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <span class="content-subtitle">Our Mission</span>
                        <h2 class="content-title">Our mission is to preserve and promote the cultural heritage of China's
                            Old Towns and Old Villages.</h2>
                        <p class="lead">
                            We aim to provide a comprehensive resource for travelers, historians, and cultural enthusiasts
                            to explore and appreciate the beauty and history of these remarkable places.
                        </p>
                        {{-- <p class="mb-5">
                    There live the blind texts. Separated they live in Bookmarksgrove
                    right at the coast of the Semantics, a large language ocean.
                </p> --}}
                    </div>
                </div>
            </div>
        </div><!-- /Stats Section -->
        <hr></hr>
        <div class="features">
            <div class="container px-lg-5">
                <h1>Our Benefits</h1>
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 ">

                                <h2 class="fs-4 fw-bold">In-Depth Information</h2>
                                <p class="mb-0">We provide detailed information about each Old Town and Old Village,
                                    including historical significance, cultural highlights, and travel tips.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4">

                                <h2 class="fs-4 fw-bold">User-Friendly Interface</h2>
                                <p class="mb-0">Our website is designed to offer an intuitive and seamless browsing
                                    experience, making it easy for users to find and explore destinations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4">

                                <h2 class="fs-4 fw-bold">Authentic Content</h2>
                                <p class="mb-0">All our content is carefully curated and verified to ensure authenticity
                                    and accuracy, offering you a true glimpse into the heritage of each location.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4">

                                <h2 class="fs-4 fw-bold">Community Engagement</h2>
                                <p class="mb-0">We encourage our users to share their experiences and insights, creating a
                                    vibrant community of travelers and culture enthusiasts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4">

                                <h2 class="fs-4 fw-bold">Rich Visual Content</h2>
                                <p class="mb-0">Enjoy high-quality photos of each Old Town and Old Village, letting you
                                    experience their beauty and atmosphere before you visit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4">

                                <h2 class="fs-4 fw-bold">Expert Recommendations</h2>
                                <p class="mb-0">Benefit from tips by local experts and historians, ensuring you discover
                                    the must-see landmarks and hidden gems for an authentic experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
