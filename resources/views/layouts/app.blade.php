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
    <meta name="p:domain_verify" content="c36ae70d5778b056cea8729e2b64522a"/>
    <meta name="robots" content="index, follow" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5QQNMVM');</script>
    <!-- End Google Tag Manager -->


    @yield('title')
    @yield('meta')
    
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/logo.ico" type="image/x-icon">
    
    <link rel="preconnect" href="https://raw.githubusercontent.com">
    <link rel="dns-prefetch" href="https://raw.githubusercontent.com">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    @yield('style-file')


</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QQNMVM"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
            onFormSubmit: () => {
                window.location.replace("{{ route('thankYou') }}");
            }
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
