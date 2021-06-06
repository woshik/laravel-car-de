<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="preconnect" href="https://raw.githubusercontent.com">
    <link rel="dns-prefetch" href="https://raw.githubusercontent.com">

    @yield('meta')

    <link rel="shortcut icon" href="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/logo.ico" type="image/x-icon">

    <title>Folientechnik Schweiz - @yield('title')</title>

    @yield('style-file')

</head>

<body>

    @include('partials.preloader')

    @include('partials.navbar')
    
    <div class="animsition">
        @yield('content')
    </div>

    @include('partials.footer')

    @yield('script-file')

</body>

</html>
