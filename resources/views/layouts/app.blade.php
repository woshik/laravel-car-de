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

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-36438532-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-36438532-1');
    </script>

</head>

<body>

    @include('partials.preloader')

    @include('partials.navbar')
    
    <div>
        @yield('content')
    </div>

    @section('footer')
        @include('partials.footer')
    @show

    @include('partials.popup-contact')
    
    @yield('script-file')

</body>

</html>
