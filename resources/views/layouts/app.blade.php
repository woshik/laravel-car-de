<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Folientechnik Schweiz">
    <meta name="application-name" content="folientechnik-schweiz" />
    <meta name="facebook-domain-verification" content="32eu0jr4ugc9jck3262hqgzqqe8skj" />
    <meta name="google-site-verification" content="AKivcejAi7-bLPOe9nhG7ZZtz2oR0SMJ8qhNfkNHaNM" />

    <meta name="robots" content="index, follow" />

    @yield('title')
    @yield('meta')
    
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/logo.ico" type="image/x-icon">
    
    <link rel="preconnect" href="https://raw.githubusercontent.com">
    <link rel="dns-prefetch" href="https://raw.githubusercontent.com">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    @yield('style-file')

    @section('facebook-pixel')
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
        fbq('init', '306425434435643');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=306425434435643&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
    @show

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-36438532-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-36438532-1');
    </script>

</head>

<body>

    @include('partials.preloader')

    @include('partials.navbar')

    @yield('content')

    @section('footer')
        @include('partials.footer')
    @show

    @include('partials.social-icon')

    <a class="bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button" style="top: 7%; right: 2%;" href="tel:+41522428364">
        <div id="bingc-phone-button-tooltip" class="bingc-phone-button-tooltip bingc-phone-button-tooltip-top-right"> </div> 
        <svg class="bingc-phone-button-circle" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
            enable-background="new 0 0 100 100" xml:space="preserve">
            <circle class="bingc-phone-button-circle-outside" cx="50" cy="50" r="50"></circle>
            <circle class="bingc-phone-button-circle-inside" cx="50" cy="50" r="40"></circle>
        </svg>
        <svg id="bingc-phone-button-icon-icon"
            class="bingc-phone-button-icon-icon bingc-phone-button-icon-show" version="1.1"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 17.544 25.215" enable-background="new 0 0 17.544 25.215" xml:space="preserve">
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#fff"
                d="M12.22,6.784c-0.135,0.871-1.654,4.073-2.084,4.89c-0.576,1.087-2.779,4.344-3.724,5.065l0,0l-0.775,0.532l-1.879-0.616L0,20.653l0.129,1.043l2.123,2.832l0.916,0.687c0,0,13.474-8.596,14.376-24.03c0,0-0.266-0.297-0.777-0.87L13.228,0l-1.16,0.454l-1.029,4.941l1.127,1.23">
            </path>
        </svg>
    </a>

    @yield('script-file')

    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/26537669.js"></script>
    <!-- End of HubSpot Embed Code -->

    <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
    <script>
        hbspt.forms.create({
            region: "eu1",
            portalId: "26537669",
            formId: "8935022e-0810-4d01-b944-e9cc4e949091",
            target: "#hubspot-contact-form",
        });
    </script>

    <script charset="utf-8" src="https://js-eu1.hscta.net/cta/current.js"></script>
    <script type="text/javascript"> 
        hbspt.cta.load(26537669, '217e5f68-9d81-40d2-8f74-aa04ce366751', {
            "useNewLoader":"true",
            "region":"eu1"
        }); 
    </script>
</body>

</html>
