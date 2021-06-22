@extends('layouts.app')

@section('title', 'Car Wrapping Design')

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/car_wrapping_design.css') }}">
@endsection

@section('content')
    <div class="header-content back-box service-2-bg">
        <div class="gradient-header-top parallax-gradient"></div>
        <div class="gradient-header-bottom parallax-gradient"></div>
    </div>

    <header class="header">
        <div class="gradient-header-main-bottom"></div>
        <div class="header-content-box">
            <h1 class="h1 sup-bold-Italic">Design deine Folie</h1>
        </div>
    </header>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/s1.png" alt="">
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">
                                Nur das Beste<br />
                                von den Besten!
                            </h2>
                            <span class="p-reg roboto-regular">
                                <p>
                                    Wir arbeiten seit 2011 intensiv mit den Top 3 Livery
                                    Designern der Welt zusammen und bieten so das
                                    beste Know How in Sachen Grafikdesign das es am
                                    Markt gibt. Mit Grössen wir Freebird Design, Alexander
                                    Lituta oder TT Studio haben Sie die Qual der Wahl in
                                    Sachen Digitaldruck Design.
                                </p>
                                <p>
                                    Ob kleine Details oder vollflächige Digitalprints auf
                                    Folie, Sie erhalten stets indiviuelle und einmalige Designs von uns. Wir zaubern ihnen ein „ Wau “ auf die
                                    Strasse. 
                                </p>
                                <p>überzeugen Sie sich selbst und holen Sie sich eine inspiation auf den Instagram Account von Free Bird Design.</p>
                            </span>
                            <button class="nice-btn" onclick="openContactModal()">
                                <i></i>hier zur Gallery<i></i>
                            </button>
                        </div>

                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/s1.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-image-right-text">
                    <div class="row">
                        <img class="box-left-image-right-text__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car9.png" alt="">
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">EIGENE DIGITALPRINT<br>PRODUKTION</h2>
                            <span class="p-reg roboto-regular">
                                <p>Um die Lieferkette zu verkürzen und zur Qualitätskontrolle habe wir Anfang 2015
                                    unsere eigene Produktion aufgebaut. Mit einem Latexdrucker HP 360 sind wir
                                    bis heute auf den neuersten Stand der Technologie in Sachen Digitalprints auf
                                    Folie.</p>
                                <p> Wir drucken selbst, Wir laminieren selbst und Wir plottern selbst. </p>
                                <P>
                                    Digitalprintfolien verwenden wir ausschliesslich Marken die eine Gewährleistung
                                    einer rückstandslosen Entfernung bieten. In der Regel geht es um Marlen wie 3M
                                    Avery, Oracal oder Metamark. Je nach Budget haben wir ihre Folie.
                                </P>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-deteiling-page-1">
            <div class="background-col-8-icons"><img class="parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/C-bg.png"
                    data-paroller-factor="-0.3" data-paroller-type="foreground" data-paroller-direction="vertical">
            </div>
            <h2 class="zag text-center">WIE GESTALTEST DU DEINE EIGENE FOLIE?</h2>

            <div class="wrapper">
                <div class="div-table">
                    <div class="row-3">
                        <i class="info-icon" style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/micro.svg);"></i>
                        <span class="name-icon-box">Interview</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/design.svg);"></i>
                        <span class="name-icon-box">Designerstellung</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/handshake.svg);"></i>
                        <span class="name-icon-box">Deal mit dem Grafiker</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-11-1.svg);"></i>
                        <span class="name-icon-box">Offerte zur Umsetzung</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/table-printer.svg);"></i>
                        <span class="name-icon-box">Druck auf Folie</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-1.svg);"></i>
                        <span class="name-icon-box">Folierung</span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car20.png" alt="" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag"> MOTORSPORT <br> DESIGN </h2>
                            <span class="p-reg roboto-regular">
                                <p> Ein Design im Motorsport stellt jedes Team eigens im Rennsport dar. Nicht
                                    nur Sponsoering sondern die individuellität ist wichtig.</p>
                                <p> Wir gestalten ihr Design nicht nur auf gewöhnliche Serienfahrzeuge sondern
                                    schneiden es ihnen nach Mass zu und stellen ihnen ein 2 D Design nach ihrem
                                    Muster dar</p>
                                <p>Alexander Lituta ist einer der Top Grafiker in Sachen Motorsport Design`s und
                                    fällt hauptsächlich in der Drived Car Szene auf.</p>
                                <button onclick="openContactModal()" class="nice-btn"> <i> </i> mehr dazu...<i> </i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car20.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-image-right-text">
                    <div class="row">
                        <img class="box-left-text-right-image__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car21.png" alt="" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag"> FAHRZEUGBESCHRIFTUNG </h2>
                            <span class="p-reg roboto-regular">
                                <p> Auch herkömmliche Firmenbeschriftungen sind für uns ein Thema,
                                    von der Flottenbeschriftung bis hin zum indivuellen Design auf ihrem
                                    Kastenwagen bieten wir alles rund um Folie auf ihren Transporter
                                    an</p>
                                <ul>
                                    <li> Massgeschneiderte Digitalprints </li>
                                    <li> bedruckte Windowvision Folie auf ihrer Heckscheibe </li>
                                    <li> Oldtimerrennwagen beschrfiten </li>
                                </ul>
                                <p>Wir machen Sie "SICHTBAR"</p>
                                <button onclick="openContactModal()" class="nice-btn"> <i> </i> mehr dazu... <i>
                                    </i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-main-page-7">
            <div class="wrapper">
                <div class="div-table">
                    <div class="row-form-box">
                        <h2 class="zag">FINDE MEHR DAZU RAUS</br>
                            ÜBER EIN DESIGN AUF IHREM AUTO</h2>
                        <div role="form" class="wpcf7" id="wpcf7-f121-o1" lang="ru-RU" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <button type="button" class="wpcf7-form-control wpcf7-submit" onclick="openContactModal()">KONTAKT ANFORDERN</button>
                        </div>
                    </div>
                    <div class="row-form-box pc-box-footer-form">
                        <img class="box-left-text-right-image__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car19.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('script-file')
    <script src="{{ mix('/js/car_wrapping_design.js') }}"></script>
@endsection
