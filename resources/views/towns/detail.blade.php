@extends('layouts.app')

@section('content')
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

    <div class="w3-row w3-padding-64">

        <div class="w3-twothird w3-container">
            <div class="d-flex justify-content-start mb-3">
                <button onclick="goBack()" class="btn btn-secondary">
                    <i class="fas fa-backward"></i> Back
                </button>
            </div>
            <h2>{{ $town->longname }}</h2>
            <p><a href="{{ $town->baidu }}" target="_blank">Baidu</a></p>

            <p></p>

            <!---MAPBOX---------------------------------------------------------------------->

            <div id="map" style="width: 100%; height: 500px"></div>
            <script>
                function initMap() {
                    // The location of Uluru
                    var uluru = {
                        lat: {{ $town->latitude }},
                        lng: {{ $town->longitude }}
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
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTzxjPohB40FZEksFJ6m-FMPILqn78fHs&callback=initMap"></script>
            <p>
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
