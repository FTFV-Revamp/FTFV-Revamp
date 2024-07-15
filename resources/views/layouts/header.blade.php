<header>

    <div class="container-header">
        <div class="one-two">
            <div class="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="show-menu">
                <span class="close-menu">&times;</span>
                <li><a href="{{route('home')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="" class="{{ request()->routeIs('about.index') ? 'active' : '' }}">About</a></li>
                <li><a href="{{route('favourite')}}" class="{{ request()->routeIs('favourite') ? 'active' : '' }}">Bookmark</a></li>
                <li><a href="{{route('contact')}}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                @if(!empty(Auth::user()->id))
                    <li>
                        <a class="{{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <li><a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">Login</a></li>
                    <li><a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">Register</a></li>
                @endif

            </ul>
            <span class="close-menu2"><a href="{{route('home')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">FTFV</a></span>

            <div class="two">
                <ul class="menu-header">
                    <li><a href="{{route('home')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">FTFV</a></li>
                    <li><a href="{{route('home')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="" class="{{ request()->routeIs('about.index') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{route('favourite')}}" class="{{ request()->routeIs('favourite') ? 'active' : '' }}">Bookmark</a></li>
                    <li><a href="{{route('contact')}}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="three">
            <ul class="auth-menu">
                @if(!empty(Auth::user()->id))
                    <li><a href="">{{Auth::user()->username}}</a></li>
                    <li><span class="vertical-line"></span></li>
                    <li>
                        <a class="{{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <li><a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">Login</a></li>
                    <li><span class="vertical-line"></span></li>
                    <li><a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">Register</a></li>
                @endif
            </ul>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hamburger = document.querySelector('.hamburger-menu');
        const menu = document.querySelector('.show-menu');
        const closeMenu = document.querySelector('.close-menu');
        hamburger.addEventListener('click', function () {
            menu.classList.toggle('show');
        });
        closeMenu.addEventListener('click', function () {
            menu.classList.remove('show');
        });
    });
</script>
