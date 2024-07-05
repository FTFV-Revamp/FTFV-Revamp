@extends('layouts.app')
@push('style')
<style>
    html,body{
        margin: 0px;
    }
    #map {
        width: 100%;
        height: 100%;
        position: absolute;
    }
</style>
@endpush
@section('content')
<div class=" w3-container1">
    <div id="map"></div>
</div>
@endsection

@push('scripts')

<script type="text/javascript">
    //Code to load the map with center point of Monterey MA
    function initialize() {

    $.ajax({
    method: "GET",
    url: "{{ route('locations') }}",
    // dataType: "json",
    success: function (response) {
        var center = new google.maps.LatLng(40.001517, 115.652531);

        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 3,
            center: center,
            gestureHandling: 'greedy',
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var imagePath = "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m";

        var markers = [];

        let locations = (response.locations);
        // console.log(locations);
        for (var i = 0; i < locations.length; i++) {
            var dataPhoto = locations[i];

            //add all info into infocontent and display in infoWindow
            var infoContent = '<strong>' + dataPhoto.longname + '</strong>';
            infoContent += '<p>' + '<a href="' + dataPhoto.baidu + '" target="_blank">' + dataPhoto.baidu + '</a>' + '</p>';

            var latLng = new google.maps.LatLng(
                dataPhoto.latitude,
                dataPhoto.longitude
            );
            //bookmark
            infoContent += `<button id = "bookmark" name="bookmark" class="icon" style="background-color:white; border-color:white;" onclick="myBookmark('${dataPhoto.id}')"><i class="fas fa-bookmark"></i><span class="tooltiptext"></span></button></span></p>`;

            //share social & embeded
            infoContent += '<button onclick="share(' + dataPhoto.latitude + ',' + dataPhoto.longitude + ')">Share</button>';

            var marker = new google.maps.Marker({
                position: latLng,
            });
            markers.push(addMarker(marker));
        }

        function addMarker(dataPhoto) {
            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
            });

            /*if(props.iconImage){
            marker.setIcon(props.iconImage);
            } */

            //Check content
            if (infoContent) {
                var infoWindow = new google.maps.InfoWindow({
                    content: infoContent
                });
                marker.addListener('click', function() {
                    infoWindow.open(map, marker);
                });
            }
            return marker;
        }

        var markerCluster = new MarkerClusterer(map, markers, {
            imagePath: imagePath
        });
            }
        });

    }
    google.maps.event.addDomListener(window, "load", initialize);
</script>
<script type="text/javascript">
    $(document).ready(function() {
        initialize(); // init map
    });
</script>
<script>
    // // Get the Sidebar
        // var mySidebar = document.getElementById("mySidebar");

        // // Get the DIV with overlay effect
        // var overlayBg = document.getElementById("myOverlay");

        // // Toggle between showing and hiding the sidebar, and add overlay effect
        // function w3_open() {
        //   if (mySidebar.style.display === 'block') {
        //     mySidebar.style.display = 'none';
        //     overlayBg.style.display = "none";
        //   } else {
        //     mySidebar.style.display = 'block';
        //     overlayBg.style.display = "block";
        //   }
        // }

        // // Close the sidebar with the close button
        // function w3_close() {
        //   mySidebar.style.display = "none";
        //   overlayBg.style.display = "none";
        // }

        // collapse sidebar function
        /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }
        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }

        // script for the share popup
        const popup = document.querySelector(".popup");
        const close = popup.querySelector(".close");
        const tabs = popup.querySelector(".tabs");
        const tabs_content = tabs.querySelector(".tabs_content");
        const icons = tabs_content.querySelector(".icons");
        const facebookIcon = icons.querySelector(".facebook");
        const whatsappIcon = icons.querySelector(".whatsapp");
        const instagramIcon = icons.querySelector(".instagram");

        const fieldURL = document.getElementById("fieldURL");
        const inputURL = document.getElementById("inputURL");
        const fieldIframe = document.getElementById("fieldIframe");
        const inputIframe = document.getElementById("inputIframe");
        const copyUrlButton = document.getElementById("copyURL");
        const copyIframeButton = document.getElementById("copyIframe");

        var blur = document.getElementById('blur');
        var map = document.getElementById('map');
        var mapRect = map.getBoundingClientRect();
        popup.style.top = (mapRect.top + window.scrollY + mapRect.height / 2) + 'px';
        popup.style.left = (mapRect.left + window.scrollX + mapRect.width / 2) + 'px';
        popup.style.transform = 'translate(-50%, -50%)';

        var url = "";
        var latitude = "";
        var longitude = "";
        var singleLocation = false;
        var allLocation = false;

        function share(lat, lng) {
            allLocation = false;
            singleLocation = true;
            // url = "https://www.google.com/maps/search/?api=1&query=" + lat + "%2C" + lng;
            // url = "https://www.google.com/maps/place/" + lat + "+" + lng;
            url = "https://www.google.com/maps/place/" + lat + "," + lng;
            urlIframe = 'https://maps.google.com/maps?q=' + lat + ',' + lng + '&hl=es;z=14&output=embed';
            latitude = lat;
            longitude = lng;

            popup.classList.toggle("show");
            blur.classList.toggle('active');
            document.getElementById("inputURL").value = url;
            document.getElementById("inputIframe").value = "<iframe src='" + urlIframe + "' width='400' height='300' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
            document.getElementById("iframe").src = urlIframe;
        }

        function shareWholeMap() {
            singleLocation = false;
            allLocation = true;
            // url = "https://chinaetravel.com/ftfv/map.php";
            url = "demo";

            popup.classList.toggle("show");
            blur.classList.toggle('active');
            document.getElementById("inputURL").value = url;
            document.getElementById("inputIframe").value = "<iframe src='" + url + "' width='400' height='300' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
            document.getElementById("iframe").src = url;
        }

        close.onclick = () => {
            share();
        }

        facebookIcon.onclick = () => {
        if (singleLocation) {
            url = "https://www.facebook.com/sharer.php?u=https://www.google.com/maps/search/?q=" + latitude + "," + longitude;
        } else if (allLocation) {
            url = "https://www.facebook.com/sharer.php?u=https://chinaetravel.com/china-project/ftfv/map.php";
        }
        window.open(url, '_blank');
        }

        whatsappIcon.onclick = () => {
        if (singleLocation) {
            url = "https%3A%2F%2Fwww.google.com%2Fmaps%2Fsearch%2F%3Fapi%3D1%26query%3D" + latitude + "%252C" + longitude;
            // var message = "Check this location out!!!" + url;
        } else if (allLocation) {
            url = "https%3A%2F%2Fchinaetravel.com%2Fchina-project%2Fftfv%2Fmap.php";
        }
        //mobile version
        window.location.href = 'whatsapp://send?text=' + url;

        //web version
        // window.location.href = 'https://web.whatsapp.com://send?text=' + url;
        }

        instagramIcon.onclick = () => {
        if (singleLocation) {
            var igurl = "https://www.google.com/maps/search/?q=" + latitude + "," + longitude;
        } else if (allLocation) {
            var igurl = "https://chinaetravel.com/china-project/ftfv/map.php";
        }
        navigator.clipboard.writeText(igurl)
            .then(() => {
            alert("successfully copied");
            // window.location.href = "https://www.instagram.com/direct/inbox/";
            window.open("https://www.instagram.com/direct/inbox/", '_blank');
            })
            .catch(() => {
            alert("something went wrong");
            });
        }

        copyUrlButton.onclick = () => {
        inputURL.select(); //select the input value
        if (document.execCommand("copy")) { //if selected value is copied
            fieldURL.classList.add("active");
            copyUrlButton.innerText = "Copied";
            setTimeout(() => {
            fieldURL.classList.remove("active");
            copyUrlButton.innerText = "Copy";
            window.getSelection().removeAllRanges();
            }, 3000); //after 3sec remove active class and change button style
        }
        }

        copyIframeButton.onclick = () => {
        inputIframe.select(); //select the input value
        if (document.execCommand("copy")) { //if selected value is copied
            fieldIframe.classList.add("active");
            copyIframeButton.innerText = "Copied";
            setTimeout(() => {
                fieldIframe.classList.remove("active");
                copyIframeButton.innerText = "Copy";
                window.getSelection().removeAllRanges();
            }, 3000); //after 3sec remove active class and change button style
        }
        }

        //bookmark function
        var isUserLoggedIn = "{{ Auth::check() ? 'true' : 'false' }}";
        function myBookmark(id) {
            if (isUserLoggedIn == "true") {
                var location_id = id;
                $.ajax({
                    url: '/bookmark',
                    type: "POST",
                    data: {
                        'location_id': location_id,
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'json',
                    success: function(data) {
                        alert(data.message);
                    },
                    error: function(jqXHR) {
                        console.log(jqXHR);
                        if (jqXHR.status == 403) {
                            loginBookmark();
                        } else {
                            alert('An error occurred while saving the bookmark.');
                        }
                    }
                });
            } else {
                loginBookmark();
            }
        }

        function loginBookmark() {
            alert('Please login to access bookmark feature.');
            window.location = "{{ route('login') }}";
        }
</script>

{{-- <script src="{{ asset('js/oldvillage.js') }}"></script> --}}
@endpush
