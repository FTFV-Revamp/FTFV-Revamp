
<footer>
    <div class="container-footer">
        <div class="content-footer1">
            <ul>
                <li class="ftfv">FTFV.</li>
                <li><a href="https://chinaetravel.com/china-project/ftfv/">Chinaetravel</a></li>
                <li>Powered By Koson Technology</li>
            </ul>

        </div>
        <div class="content-footer2">
            <ul>
                <li>Links</li>
                <li><a href="{{route('home')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{route('about.index')}}" class="{{ request()->routeIs('about.index') ? 'active' : '' }}">About</a></li>
                <li><a href="{{route('favourite')}}" class="{{ request()->routeIs('favourite') ? 'active' : '' }}">Bookmark</a></li>
                <li><a href="{{route('contact')}}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>

            </ul>
            <ul>
                <li>Help</li>
                <li><a href="https://www.facebook.com/kosontechnology?mibextid=ZbWKwL">Facebook</a></li>
                <li><a href="https://www.instagram.com/kosontechnology/?igshid=OGQ2MjdiOTE%3D">Instagram</a></li>
                <li><a href="https://api.whatsapp.com/message/2ZNWJPVTBXP4J1?autoload=1&app_absent=0">WhatsApp</a></li>
            </ul>
        </div>
        <div class="content-footer3">
            <ul>
                <li>Newsletter</li>
                <li class="responsiveft" style="display: flex;">
                    <input type="text" class="no-border" placeholder="Enter Your Email Address">
                    <button class="butoon-sub"><span class="subs">SUBSCRIBE</span></button>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer2">
        <hr>
        <h5>2024 FTFV. All rights reverved</h5>
    </div>
</footer>