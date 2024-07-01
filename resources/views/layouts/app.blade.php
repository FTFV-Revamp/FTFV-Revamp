<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="中国历史名镇名村" name="keywords">
    <meta content="中国历史文化名镇名村" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>中国历史文化名镇名村</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

      <!-- css style from w3 -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('style')
</head>
<body>
    <div id="blur" class="blurbox">
        @include('layouts.header')
        <main class="py">
            @yield('content')
        </main>
        @include('layouts.footer')

    </div>

                      <!-- popup window start -->
                      <div class="popup">
                        <header>
                          <span>Share the location</span>
                          <div class="close"><i class="uil uil-times"></i></div>
                        </header>
                        <div class="tabs">
                          <input type="radio" class="tabs_radio" name="tabs-example" id="tab1" checked>
                          <label for="tab1" class="tabs_label">Share link</label>
                          <div class="tabs_content">
                            <p>Share this location link via</p>
                            <ul class="icons">
                              <a href="#" class="facebook" data-href="https://developers.facebook.com/docs/plugins/"><i class="fab fa-facebook-f"></i></a>
                              <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                              <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            </ul>
                            <p>Or copy link</p>
                            <div id="fieldURL" class="field">
                              <i class="uil uil-link"></i>
                              <input id="inputURL" type="text" value="">
                              <button id="copyURL">Copy</button>
                            </div>
                          </div>
                          <input type="radio" class="tabs_radio" name="tabs-example" id="tab2">
                          <label for="tab2" class="tabs_label">Embed map</label>
                          <div class="tabs_content">
                            <div id="fieldIframe" class="field mb-3">
                              <!-- <input type="text" value="example.com/share-link"> -->
                              <input id="inputIframe" type="text" value="">
                              <button id="copyIframe">Copy</button>
                            </div>
                            <iframe id="iframe" src="" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                          </div>
                        </div>
                      </div>
                      <!-- popup window end -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePasswordIcons = document.querySelectorAll('.toggle-password-icon');

            togglePasswordIcons.forEach(togglePasswordIcon => {
                togglePasswordIcon.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                    input.setAttribute('type', type);
                    this.querySelector('i').classList.toggle('fa-eye');
                    this.querySelector('i').classList.toggle('fa-eye-slash');
                });
            });


        });

    </script>

    <!-- Import js and api -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script data-ad-client="ca-pub-6329141236261613" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="http://google-maps-utility-library-v3.googlecode.com/svn/tags/markerclusterer/1.0/src/data.json"></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARIZbUxcAbaOrRWORojcB127pwxvRfZIQ&callback=initMap" type="text/javascript"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyARIZbUxcAbaOrRWORojcB127pwxvRfZIQ"></script>

    @stack('scripts')




</body>
</html>
