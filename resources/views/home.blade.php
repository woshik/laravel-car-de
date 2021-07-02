@extends('layouts.app')

@section('title', 'Home')

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/home.css') }}">
@endsection

@section('content')
    <div class="header-content back-box top-bg">
        <div class="gradient-header-top parallax-gradient"></div>
        <div class="gradient-header-bottom parallax-gradient"></div>
    </div>

    <header class="header">
        <div class="header-content-box">
            <h1 class="h1 sup-bold-Italic">Wir beginnen dort wo<br />Werbetechnik aufhört!</h1>
            <p class="h5 sup-light">Folierung, Lackschutz und mehr...</p>
        </div>
    </header>
    
    <div class="background-website box-shadow background-website-padding-top padding-bottom-0">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image clearfix">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/home-BMWfolierenSchweiz.png" alt="BMW Folientechnik Schweiz" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">Folientechnik Schweiz</h2>
                            <span class="p-reg roboto-regular">
                                <p>Foliencenter in Zürich bieten seit 2011 alles rund um Folie am Auto an und ist
                                    seit her
                                    immer ein Begriff in Sachen Car Wrapping.</p>
                                <p>Wir arbeiten stets mit den besten Marken und Folien. Platinum Wrapping Film und
                                    RocketGuard sind unsere Premium Folien, denn noch bieten wir auf Kundenwunsch
                                    andere
                                    Marken wie 3M, Avery, Oracal, KPMF, Sott, Llumar und noch vieles mehr.</p>
                                <p>Durch direkten Kontakt zum Hersteller sind wir immer am laufenden mit den
                                    neuersten
                                    Trendfarben und haben diese sofort auf Lager.</p>
                                <p>Unser Handwerk mit dem Know How und After Sale Support lässt uns Schweizweit
                                    einzigartig
                                    wirken.</p>
                                <p>Jedes Projekt wird als Unikat behandelt mit Schweizer Standart mit exklusiven
                                    Niveau, kein
                                    Design wird identisch gemacht, keine Scheibentönung ohne 100% Garantie, keine
                                    Luxuswagen
                                    mit der entsprechenden Behandlung. Folientechnik Schweiz ist jedes Mal
                                    einzigartig wie
                                    unsere Kunden.</p>
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/home-BMWfolierenSchweiz.png" alt="BMW Folientechnik Schweiz" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="background-website padding-bottom-0">

        @include('partials.services')

        <section class="section-main-page-3" data-block="4">
            <h2 class="zag text-center">GEFRAGT. GETAN. ERGEBNIS</h2>
            <div class="wrapper">
                <div class="info-box ">
                    <div class="row-4">
                        <span class="cifra-info"> <b class="b-count"><span class="numscroller">485</span></b></span>
                        <p class="roboto-regular">Anfragen</p>
                    </div>
                    <div class="row-4">
                        <span class="cifra-info"> <b class="b-count"><span class="numscroller">47</span></b></span>
                        <p class="roboto-regular">Abgeschlossene Arbeiten</p>
                    </div>
                    <div class="row-4">
                        <span class="cifra-info"> <b class="b-count"><span class="numscroller">3800</span>+</b></span>
                        <p class="roboto-regular">Verklebte Folie</p>
                    </div>
                    <div class="row-4">
                        <span class="cifra-info"> <b class="b-count"><span class="numscroller">11</span></b></span>
                        <p class="roboto-regular">Zertifizierte Spezialisten</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-main-page-3 section-main-page-6" style="margin: 0;">
            <h2 class="zag text-center">Unser Team</h2>
            <div class="wrapper">
                <div class="slick-slider">

                    <div><img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/team/Team%20Bilder%20Folientechnik%20Schweiz-06.png" /></div>
                    <div><img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/team/Team%20Bilder%20Folientechnik%20Schweiz-07.png" /></div>
                    <div><img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/team/Team%20Bilder%20Folientechnik%20Schweiz-08.png" /></div>
                    <div><img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/team/Team%20Bilder%20Folientechnik%20Schweiz-09.png" /></div>
                    <div><img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/team/Team%20Bilder%20Folientechnik%20Schweiz-05.png" /></div>
                    <div><img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/team/Team%20Bilder%20Folientechnik%20Schweiz-10.png" /></div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website padding-bottom-top">
        <section class="section-main-page-7">
            <div class="wrapper">
                <div class="div-flex">
                    <div class="row-form-box mobile-box-footer-form">
                        <img class="box-left-text-right-image__img" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/FolierungAuto1.png" >
                    </div>
                    <div class="row-form-box width-mobile-290 contact-form-box">
                        <h2 class="zag">LASSEN SIE SICH<br />VON UNS BERATEN</h2>
                        <div role="form" class="wpcf7" id="wpcf7-f121-o1" lang="ru-RU" dir="ltr">
                            <button type="button" class="wpcf7-form-control wpcf7-submit" onclick="openContactModal()">KONTAKT ANFORDERN</button>
                        </div>
                    </div>
                    <div class="row-form-box pc-box-footer-form">
                        <img class="box-left-text-right-image__img" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/FolierungAuto1.png" />
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('script-file')
    <script src="{{ mix('/js/home.js') }}"></script>
@endsection
