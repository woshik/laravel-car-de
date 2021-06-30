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

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2846929618899022');
        fbq('track', 'PageView');
    </script>
    <!-- End Facebook Pixel Code -->

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
