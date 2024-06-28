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
    @include('layouts.header')
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const togglePasswordIcon = document.querySelector('.toggle-password-icon');

            togglePasswordIcon.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.querySelector('i').classList.toggle('fa-eye');
                this.querySelector('i').classList.toggle('fa-eye-slash');
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

    @include('layouts.footer')
</body>
</html>
