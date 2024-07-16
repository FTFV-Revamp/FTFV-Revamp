@extends('layouts.app')
@push('style')
<link rel="stylesheet" href="{{ asset('css/oldvillage-detail.css') }}">
@endpush
@section('content')
<div  onclick="w3_close()" style="cursor:pointer" title="close side menu"
    id="myOverlay"></div>

    <div class="w3-main">
        <div class="w3-row w3-padding-64">
            <div class="w3-container">
                <div class="mb-3">
                    <button style="width: unset" onclick="goBack()" class="btn btn-secondary">
                        <i class="fas fa-backward"></i> Back
                    </button>
                </div>
                <h2>{{ $village->longname }}</h2>
                <p><a href="{{ $village->baidu }}" target="_blank">Baidu</a></p>

                <p></p>

                <!---MAPBOX---------------------------------------------------------------------->

                <div id="map" style="width: 100%; height: 500px"></div>
                <script>
                    function initMap() {
                        // The location of Uluru
                        var uluru = {
                        lat: {{ $village->latitude }},
                        lng: {{ $village->longitude }}
                        };
                        // The map, centered at Uluru
                        var map = new google.maps.Map(
                        document.getElementById('map'), {
                            zoom: 11,
                            center: uluru
                        });
                        // The marker, positioned at Uluru
                        var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                        });
                    }
                </script>
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTzxjPohB40FZEksFJ6m-FMPILqn78fHs&callback=initMap">
                </script>
            </div>
        </div>
    </div>
</div>
<script>
    function goBack() {
          window.history.back();
          setTimeout(function() {
              if (document.referrer === "") {
                  window.location.href = document.referrer || '/';
              }
          }, 500);
      }
</script>
@endsection
