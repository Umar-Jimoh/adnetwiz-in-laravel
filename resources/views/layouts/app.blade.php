<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{@config('app.name', 'AdnetWiz')}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navigation')

    <div class="content">
        <div class="main-content">
            @yield('main-content')
            
        </div>
        <div class="sub-content">
            @yield('sub-content')
        </div>
    </div>

</body>

</html>