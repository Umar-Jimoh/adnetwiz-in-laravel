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
                <a href="{{ route('category.show', [ 'slug' => 'network-ads']) }}">{{ __('Network ads') }}</a>
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
<form action="{{ route('search') }}" method="GET">
    <div class="search" id="search">
        <input type="search" name="q" class="search-input" placeholder="{{ __('Search...') }}" value="{{ request('q') }}" />
        <button class="ml-2 inline-flex items-center px-4 py-2 bg-gray-400 border border-transparent rounded-md font-semibold text-xs text-gray-800 hover:text-white focus:text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" type="submit">Search</button>
    </div>
</form>
<!-- note: End Searchbar -->