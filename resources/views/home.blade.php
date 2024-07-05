@extends('layouts.app')

@push('style')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<style>

</style>
@endpush
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="image-container">
    <img src="{{ asset('images/home.png') }}" class="img-fluid full-screen-img " alt="Your Image">
    <div class="overlay">
        <h2>中国历史文化名镇名村</h2>
        <h4 class="mt-3">Chinese famous towns & villages in history & culture</h4>
        <a href="" class="btn btn-readmore mt-3">READ MORE</a>
    </div>
</div>
<div class="container-fluid">
    <div id="main">

        <!-- map start -->
        <div class="w3-row w3-padding-top-64">
            <div class=" w3-container1">
                <div style="text-align: center;">
                    <h2><a href="https://zh.m.wikipedia.org/zh-my/%E4%B8%AD%E5%9B%BD%E5%8E%86%E5%8F%B2%E6%96%87%E5%8C%96%E5%90%8D%E6%9D%91"
                            target="_blank">中国历史文化名镇名村</a></h2>
                    <p>Chinese famous towns & villages in history & culture</p>
                </div>

                <!-- the div which will display map with pointers -->
                <div id="map" style="width: 80%; height: 600px; margin-left: auto; margin-right: auto;"></div>

            </div>
        </div>
        <!-- map end -->

        <!-- share the whole map button start -->
        <div class="pb-5" style="text-align: center;">
            <button class="shareBtn mt-3" onclick="shareWholeMap()">Share</button>
        </div>
        <!-- share the whole map button end -->

        <h3 class="w3-center">Some famous towns and villages of China</h3>
        <!-- table start -->
        <div class="w3-responsive">
            <table class="w3-table-all" style="width: 80%; margin-left: auto; margin-right: auto;">
                <thead>
                    <tr class="w3-grey">
                        <th>省/自治区/直辖市</th>
                        <th>名村</th>
                        <th>名镇</th>
                        <th>合计</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="153" valign="top">山西省</a></td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 140000]) }}">96</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 140000]) }}">15</td>
                    <td width="153" valign="top">111</td>
                </tr>
                <tr>
                    <td width="153" valign="top">福建省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 350000]) }}">57</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 350000]) }}">19</a></td>
                    <td width="153" valign="top">76</td>
                </tr>
                <tr>
                    <td width="153" valign="top">浙江省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 330000]) }}">44</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 330000]) }}">27</a></td>
                    <td width="153" valign="top">71</td>
                </tr>
                <tr>
                    <td width="153" valign="top">江西省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 360000]) }}">37</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 360000]) }}">13</a></td>
                    <td width="153" valign="top">50</td>
                </tr>
                <tr>
                    <td width="153" valign="top">江苏省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 320000]) }}">12</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 320000]) }}">31</a></td>
                    <td width="153" valign="top">43</td>
                </tr>
                <tr>
                    <td width="153" valign="top">广东省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 440000]) }}">25</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 440000]) }}">15</a></td>
                    <td width="153" valign="top">40</td>
                </tr>
                <tr>
                    <td width="153" valign="top">河北省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 130000]) }}">32</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 130000]) }}">8</a></td>
                    <td width="153" valign="top">40</td>
                </tr>
                <tr>
                    <td width="153" valign="top">广西壮族自治区</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 450000]) }}">29</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 450000]) }}">9</a></td>
                    <td width="153" valign="top">38</td>
                </tr>
                <tr>
                    <td width="153" valign="top">四川省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 510000]) }}">6</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 510000]) }}">31</a></td>
                    <td width="153" valign="top">37</td>
                </tr>
                <tr>
                    <td width="153" valign="top">湖南省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 430000]) }}">25</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 430000]) }}">10</a></td>
                    <td width="153" valign="top">35</td>
                </tr>
                <tr>
                    <td width="153" valign="top">安徽省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 340000]) }}">24</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 340000]) }}">11</a></td>
                    <td width="153" valign="top">35</td>
                </tr>
                <tr>
                    <td width="153" valign="top">湖北省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 420000]) }}">15</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 420000]) }}">13</a></td>
                    <td width="153" valign="top">28</td>
                </tr>
                <tr>
                    <td width="153" valign="top">重庆市</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 500000]) }}">1</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 500000]) }}">23</a></td>
                    <td width="153" valign="top">24</td>
                </tr>
                <tr>
                    <td width="153" valign="top">贵州省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 520000]) }}">16</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 520000]) }}">8</a></td>
                    <td width="153" valign="top">24</td>
                </tr>
                <tr>
                    <td width="153" valign="top">云南省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 530000]) }}">11</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 530000]) }}">11</a></td>
                    <td width="153" valign="top">22</td>
                </tr>
                <tr>
                    <td width="153" valign="top">河南省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 410000]) }}">9</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 410000]) }}">10</a></td>
                    <td width="153" valign="top">19</td>
                </tr>
                <tr>
                    <td width="153" valign="top">山东省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 370000]) }}">11</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 370000]) }}">4</a></td>
                    <td width="153" valign="top">15</td>
                </tr>
                <tr>
                    <td width="153" valign="top">上海市</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 310000]) }}">2</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 310000]) }}">11</a></td>
                    <td width="153" valign="top">13</td>
                </tr>
                <tr>
                    <td width="153" valign="top">甘肃省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 620000]) }}">5</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 620000]) }}">8</a></td>
                    <td width="153" valign="top">13</td>
                </tr>
                <tr>
                    <td width="153" valign="top">陕西省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 610000]) }}">3</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 610000]) }}">7</a></td>
                    <td width="153" valign="top">10</td>
                </tr>
                <tr>
                    <td width="153" valign="top">西藏自治区</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 540000]) }}">4</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 540000]) }}">5</a></td>
                    <td width="153" valign="top">9</td>
                </tr>
                <tr>
                    <td width="153" valign="top">新疆维吾尔自治区</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 650000]) }}">4</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 650000]) }}">3</a></td>
                    <td width="153" valign="top">7</td>
                </tr>
                <tr>
                    <td width="153" valign="top">海南省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 460000]) }}">3</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 460000]) }}">4</a></td>
                    <td width="153" valign="top">7</td>
                </tr>
                <tr>
                    <td width="153" valign="top">内蒙古自治区</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 150000]) }}">2</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 150000]) }}">5</a></td>
                    <td width="153" valign="top">7</td>
                </tr>
                <tr>
                    <td width="153" valign="top">北京市</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 110000]) }}">5</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 110000]) }}">1</a></td>
                    <td width="153" valign="top">6</td>
                </tr>
                <tr>
                    <td width="153" valign="top">青海省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 630000]) }}">5</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 630000]) }}">1</a></td>
                    <td width="153" valign="top">6</td>
                </tr>
                <tr>
                    <td width="153" valign="top">辽宁省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 210000]) }}">1</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 210000]) }}">4</a></td>
                    <td width="153" valign="top">5</td>
                </tr>
                <tr>
                    <td width="153" valign="top">吉林省</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 220000]) }}">1</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 220000]) }}">2</a></td>
                    <td width="153" valign="top">3</td>
                </tr>
                <tr>
                    <td width="153" valign="top">天津市</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 120000]) }}">1</a></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 120000]) }}">1</a></td>
                    <td width="153" valign="top">2</td>
                </tr>
                <tr>
                    <td width="153" valign="top">黑龙江省</td>
                    <td width="153" valign="top"></td>
                    <td width="153" valign="top"><a href="{{ route('towns.index', ['province_id' => 230000]) }}">2</a></td>
                    <td width="153" valign="top">2</td>
                </tr>
                <tr>
                    <td width="153" valign="top">宁夏回族自治区</td>
                    <td width="153" valign="top"><a href="{{ route('villages.index', ['province_id' => 640000]) }}">1</a></td>
                    <td width="153" valign="top"></td>
                    <td width="153" valign="top">1</a></td>
                </tr>
                    <tr>
                        <td width="152" valign="top" colspan="1" rowspan="1">合计</td>
                        <td width="152" valign="top" rowspan="1">487</td>
                        <td width="152" valign="top" rowspan="1">312</td>
                        <td width="152" valign="top" rowspan="1">799</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- table end -->
    </div>
    <!-- content end -->

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

<script src="{{ asset('js/oldvillage.js') }}"></script>
@endpush
