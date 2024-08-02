<nav>
    <div class="first-component-nav">
        <div class="d-flex justify-content-end me-5">
            @auth
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="{{ route('logout') }}"
                   class="text-white me-2"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   Logout
                </a>
                <span class="separator text-white me-2">/</span>
                <a href="{{ url('/dashboard') }}" class="text-white">
                    {{ auth()->user()->username }}
                </a>
            @else
                <a href="/register" class="text-white me-3">Register</a>
                <span class="separator text-white me-3">/</span>
                <a href="/login" class="text-white">Login</a>
            @endauth
        </div>
    </div>
    <div class="second-component-nav d-flex">
        <img src="image/yoyo.png" alt="">
        <div class="parallelogram">
            <div class="navbar-link">
                <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/associations-ranking') }}" class="{{ Request::is('associations-ranking') ? 'active' : '' }}">Associations</a>
                <a href="{{ url('/teams-ranking') }}" class="{{ Request::is('teams-ranking') ? 'active' : '' }}">Teams</a>
                <a href="{{ url('/players-ranking') }}" class="{{ Request::is('players-ranking') ? 'active' : '' }}">Players</a>
                <a href="{{ url('/shop') }}" class="{{ Request::is('shop') ? 'active-ranking' : '' }}">Shop</a>
            </div>
        </div>
    </div>
</nav>
