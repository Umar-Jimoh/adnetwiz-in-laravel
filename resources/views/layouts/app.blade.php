<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{@config('app.name', 'AdnetWiz')}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@props(['recentPosts', 'popularPosts'])
<body>
    <div class="container">
        @include('layouts.navigation')

        <div class="content">
            <div class="main-content">
                @yield('main-content')

            </div>
            <div class="sub-content">
                <div class='recent-post-container'>
                    <h2 class='recent-post-header'>{{__('Recent Post')}}</h2>
                    @foreach ($recentPosts->data as $post)
                    <x-recent-post :post="$post" />
                    @endforeach
                </div>
                <div class='popular-post-container'>
                    <h2 class='popular-post-header'>{{__('Popular Post')}}</h2>
                    @foreach ($popularPosts->data as $post)
                    <x-popular-post :post="$post" />
                    @endforeach
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>

</body>

</html>