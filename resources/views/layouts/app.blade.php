<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Folientechnik Schweiz">
    <meta property="X-Cache" content=""/>
    <meta property="X-Cache-Results" content=""/>
    <meta name="application-name" content="folientechnik-schweiz"/>
    <meta name="description" content="Foliencenter in Zürich bieten seit 2011 alles rund um Folie am Auto an und ist seit her immer ein Begriff in Sachen Car Wrapping.">
    <meta name="facebook-domain-verification" content="t75vcr550qensochjkn88qmulw35eu" />
    <meta name="robots" content="index, follow"/>
    
    @yield('meta')

    <link rel="shortcut icon" href="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/logo.ico" type="image/x-icon">
    <link rel="canonical" href="https://www.folientechnik-schweiz.ch/"/>

    <title>AUTO FOLIEREN - @yield('title')</title>

    <link rel="preconnect" href="https://raw.githubusercontent.com">
    <link rel="dns-prefetch" href="https://raw.githubusercontent.com">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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

    @include('partials.social-icon')
    
    @yield('script-file')

</body>

</html>
