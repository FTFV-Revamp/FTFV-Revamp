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
            @if($favourites->isNotEmpty())
                @foreach ($favourites as $favourite)
                    <div class="favourite-item">
                        <a href="{{ $favourite->location->baidu }}"><img src="{{ $favourite->location->image_url }}" alt="Favourite Image"></a>
                        <button class="icon-bookmark" onclick="deleteFavourite({{ $favourite->id }})">
                            <i class="bi bi-bookmark-fill"></i>
                        </button>
                        <div class="favourite-item-content">
                            <a href="{{ $favourite->location->baidu }}"><h2>{{ $favourite->location->longname }}</h2></a>
                            <p>{{ $favourite->location->description }}</p>
                        </div>
                    </div>
                @endforeach 
            @else
                <h4>You have not marked any locations.</h4>
            @endif
        </div>
        <div class="paginationbookmark">
            {{ $favourites->links() }}
        </div>
    </div>

    <script>
        var isUserLoggedIn = "{{ Auth::check() ? 'true' : 'false' }}";

        function deleteFavourite(id) {
            if (isUserLoggedIn === "true") {
                if (confirm('Are you sure you want to delete this favourite?')) {
                    fetch(`/favourite/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        }
                    }).then(response => response.json())
                      .then(data => {
                          if (data.message === 'Favourite deleted successfully.') {
                              location.reload();
                          } else {
                              alert('Failed to delete favourite.');
                          }
                      }).catch(error => {
                          console.error('Error:', error);
                          alert('An error occurred while deleting the favourite.');
                      });
                }
            } else {
                loginBookmark();
            }
        }

        function loginBookmark() {
            alert('Please login to access bookmark feature.');
            window.location = "{{ route('login') }}";
        }
    </script>
@endsection
