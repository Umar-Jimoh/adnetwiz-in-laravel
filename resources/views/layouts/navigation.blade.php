<!-- note: Navigation -->
<div class="navigation">
    <div class="navbar-icon">
        <!-- note: menu icon -->
        <img
            src="../images/svg/menu-icon.svg"
            alt="menu icon"
            class="menu-icon"
            id="menu" />

        <!-- note: Logo -->
        <x-application-logo />

        <!-- note: search icon -->
        <img
            src="../images/svg/search-icon.svg"
            class="search-icon"
            id="search-icon"
            alt="search" />
    </div>

    <!-- note: Navbar -->
    <nav class="navbar" id="navbar">
        <ul class="navbar-link">
            <li class="navbar-link__item">
                <a href="{{ route('category.show', [ 'slug' => 'display-ads']) }}"> {{ __('Display ads') }}</a>
            </li>
            <li class="navbar-link__item">
                <a href="{{ route('category.show', [ 'slug' => 'native-ads']) }}">{{ __('Native ads') }}</a>
            </li>
            <li class="navbar-link__item">
                <a href="{{ route('category.show', [ 'slug' => 'normal-ads']) }}">{{ __('Normal ads') }}</a>
            </li>
            <li class="navbar-link__item">
                <a href="{{ route('category.show', [ 'slug' => 'social-ads']) }}">{{ __('Social ads') }}</a>
            </li>
            @auth
            <li class="navbar-link__item">
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    {{ __('Logout') }}
                </a>
            </form>
            </li>
            @endauth
            @guest
            <li class="navbar-link__item no-border">
                <a href="{{route('login')}}"> {{ __('Login') }} </a>
            </li>
            @endguest
        </ul>
    </nav>
    <!-- note: End Navbar -->
</div>
<!-- note:End Navigation -->

<!-- note: Search -->
<form>
    <div class="search" id="search">
        <input type="search" class="search-input" placeholder="Search..." />
    </div>
</form>
<!-- note: End Searchbar -->