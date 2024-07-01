@extends('layouts.app')

@push('style')
    <link href="/path/to/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bookmark.css') }}">
@endpush

@section('content')
    <div class="favourite">
        <h1>Favourite Lists</h1>
        <div class="favourite-list">
            <div class="favourite-item">
                <img src="https://th.bing.com/th/id/OIP.0rOCd3tdMHRApyJamtOV4gHaE8?rs=1&pid=ImgDetMain" alt="Favourite Image">
                <button class="icon-bookmark"><i class="bi bi-bookmark-fill"></i></button>
                <div class="favourite-item-content">
                    <h2>Favourite Name</h2>
                    <p>This is a description of the favourite item. It provides more details about why this item is on the list.</p>
                </div>
            </div>
            <div class="favourite-item">
                <img src="https://th.bing.com/th/id/OIP.0rOCd3tdMHRApyJamtOV4gHaE8?rs=1&pid=ImgDetMain" alt="Favourite Image">
                <button class="icon-bookmark"><i class="bi bi-bookmark-fill"></i></button>
                <div class="favourite-item-content">
                    <h2>Favourite Name</h2>
                    <p>This is a description of the favourite item. It provides more details about why this item is on the list.</p>
                </div>
            </div>
            <div class="favourite-item">
                <img src="https://th.bing.com/th/id/OIP.0rOCd3tdMHRApyJamtOV4gHaE8?rs=1&pid=ImgDetMain" alt="Favourite Image">
                <button class="icon-bookmark"><i class="bi bi-bookmark-fill"></i></button>
                <div class="favourite-item-content">
                    <h2>Favourite Name</h2>
                    <p>This is a description of the favourite item. It provides more details about why this item is on the list.</p>
                </div>
            </div>
        </div>
    </div>
@endsection


