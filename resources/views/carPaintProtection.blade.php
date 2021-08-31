@extends('layouts.app')

@section('title', 'Lackschutzfolien')

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/car_paint_protection.css') }}">
@endsection

@section('content')
    <video
        src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/video/RocketGuard%20SelfHealing_2%20(online-video-cutter.com)_2_2_2.mp4"
        autoplay muted loop autoplay id="myVideo"></video>

    <header class="header">
        <div class="header-content-box">
            <h1 class="h1 sup-bold-Italic">
                Lackschutzfolie
            </h1>
            <p class="h5 sup-light">
                Wir schützen deine Investion...
            </p>
        </div>
    </header>

    <div class="background-website padding-bottom-0">
        <section class="section-deteiling-page-1">
            <div style="margin-bottom: 35px;">
                <h2 class="zag text-center">Steinschlagschutzfolie</h2>
                <p class="sup-light text-center">der neuen Generation!</p>
            </div>
            <div class="wrapper">
                <div class="div-table">
                    <div class="row-4">
                        <span class="name-icon-box box-icon-top-text">100% Steinschlagschutz</span>
                        <i class="info-icon box-icon-custom-style"
                            style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/rocket-icon.svg)"></i>
                        <span class="name-icon-box box-icon-top-text no-height">ROCK SOLID TOPCOAT</span>
                        <span class="name-icon-box box-icon-top-text box-icon-custom no-height">Besonders robuste
                            Oberflache</span>
                    </div>
                    <div class="row-4">
                        <span class="name-icon-box box-icon-top-text">Selbstheilungseffekt</span>
                        <i class="info-icon box-icon-custom-style"
                            style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/heart-icon.svg)"></i>
                        <span class="name-icon-box box-icon-top-text no-height">INSTANT SELF HEALING</span>
                        <span class="name-icon-box box-icon-top-text box-icon-custom no-height">Selbstheilung bei
                            Raumtemperatur</span>
                    </div>
                    <div class="row-4">
                        <span class="name-icon-box box-icon-top-text">Hydrophope oberfäche</span>
                        <i class="info-icon box-icon-custom-style"
                            style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/drop-icon.svg)"></i>
                        <span class="name-icon-box box-icon-top-text no-height">EXTREM HYDROPHOB</span>
                        <span class="name-icon-box box-icon-top-text box-icon-custom no-height">Oberflache wie
                            nanoversiegelt</span>
                    </div>
                    <div class="row-4">
                        <span class="name-icon-box box-icon-top-text">Super Flexibel - 3D verlegbar</span>
                        <i class="info-icon box-icon-custom-style"
                            style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/web-icon.svg)"></i>
                        <span class="name-icon-box box-icon-top-text no-height">DRIVEN TO DELIGHT</span>
                        <span class="name-icon-box box-icon-top-text box-icon-custom no-height">Support &amp;
                            Kundenservice</span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-main-garant">
            <div class="wrapper" style="display: table">
                <div class="row-2">
                    <div>
                        <h3 class="zag">
                            IHRE VORTEILE<br />
                            MIT EINEM LACKSCHUTZPAKET
                        </h3>
                        <ul>
                            <li>Schützt ihren Lack vor Steinschläge</li>
                            <li>Hydrophope Oberfläche für leichte Reinigung</li>
                            <li>Selbstheilungseffekt</li>
                            <li>100% transparent</li>
                            <li>10 Jahre volle Garantie</li>
                        </ul>
                    </div>
                </div>
                <div class="row-2">
                    <div>
                        <h3 class="zag">
                            OPTIMALER SCHUTZ<br />
                            GEGEN RANDALISMUS
                        </h3>
                        <ul>
                            <li>Schlüsselattacken an ihrem Lack haben keine Chance</li>
                            <li>Schützt gegen alle Umwelteinflüsse</li>
                            <li>Ist UV durchlässig für gleichmassige Ausbleichung der Farbe </li>
                            <li>Fahrten im Salz sind kein Hinderniss mehr</li>
                            <li>immer wie frisch poliert</li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="nice-btn" onclick="openContactModal()">
                <i></i><span class="zadat-vopros-modal-form-btn">MEHR DAZU</span><i></i>
            </button>
            <div class="info-box-ragant">
                <div class="icon-garant-box"></div>
                <div class="content-garant-box">
                    <div class="zag-garant-box">10 Jahre Garantie</div>
                    <div class="text-garant-box p-reg roboto-regular">
                        <p>
                            Wir und unsere Hersteller geben ihnen mehr als 10 Jahre Garantie auf Verlege und
                            Materialfehler. Wir verwenden daher nur ausgelesene Marken wie RocketGuard, Xpel oder
                            Hexis.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-main-garant custom-slider-style">
            <div class="slick-slider">
                <div><a href="https://www.hexis-graphics.com/fr/" target="_blank" rel="nofollow"><img
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/brand/bodyfencelong.png" /></a>
                </div>
                <div><a href="https://rocketguard.shop/" target="_blank" rel="nofollow"><img
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/brand/RocketGuard Logo-03.png"></a>
                </div>
                <div><a href="https://www.scotchgard.com/3M/en_US/scotchgard/" target="_blank" rel="nofollow"><img
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/brand/scotchguard3Mweiss-01.png"></a>
                </div>
                <div><a href="https://www.xpel.com/" target="_blank" rel="nofollow"><img
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/brand/XPEL_White.png"></a>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-main-garant">
            <div class="wrapper">
                <div class="box-left-image-right-text">
                    <div class="row">
                        <img class="box-left-image-right-text__img "
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Lackschutzfolien Bild 1-02.png" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">
                                Transparente Lackschutzfolien möglich
                            </h2>
                            <span class="p-reg roboto-regular">
                                <p>
                                    Lackschutzfolien müssen gar nicht immer schwarz oder grau sein, es gibt auch
                                    transparente, d.h. unsichtbare Lösungen, um Ihren Lack perfekt vor Steinschlag zu
                                    schützen.
                                </p>
                                <p>
                                    Dabei ist es wichtig, eine
                                    hochwertige Lackschutzfolie zu verwenden, weil ansonsten schnell Vergilbungseffekte
                                    auftreten oder
                                    die Folie steif wird.
                                </p>
                                <p>
                                    Mit heutigen Premium Steinschlagschutzfolien sind nahezu unsichtbare
                                    Ergebnisse erzielbar, die den Lack dauerhaft schützen, was besonders in der Frontpartie
                                    eines Autos
                                    wichtig ist.
                                </p>
                                <p>
                                    Moderne Lackschutzfolien haben eine homogene und glatte Oberfläche und bestehen
                                    i.d.R. aus Polyurethanfolie.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <h2 class="zag" style="text-align: center;">Lackschutzpakete</h2>
        <section class="section-range-tonirovka">
            <div class="wrapper">
                <div class="box-left-image-right-text">
                    <div class="row box-left-image-right-text__img"
                        style="display: flex;justify-content: center;align-items: center;">
                        <img class="box-left-image-right-text__img tonirovka-fon"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/slider/ppf-1.png" />
                    </div>
                    <div class="row display-flex-center">
                        <div class="tonirovka-info-box"
                            style="align-items: flex-start;height: 25rem;justify-content: space-between;box-sizing: border-box;">
                            <div class="tonirovka-name">
                                Im Paket inbegriffen
                            </div>
                            <div class="range-text ppf-info-box">
                                <p class="ppf-info"> - Motorhaube</p>
                                <p class="ppf-info"> - Stossstange vorne</p>
                                <p class="ppf-info"> - Spiegelkappen</p>
                            </div>
                            <a href="javascript:void(0)" onclick="openContactModal()"
                                class="blue-btn-form range-modal-form-btn">
                                Termin zur Beratung
                            </a>
                        </div>
                    </div>
                </div>
                <div id="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%"></span>
                    <div class="name-slider-range-col number-col-slider-1" style="left: 0%">
                        <i>Frontschutz<br />light</i>
                    </div>
                    <div class="name-slider-range-col number-col-slider-2" style="left: 33.33333%">
                        <i>Frontschutz<br />Standart</i>
                    </div>
                    <div class="name-slider-range-col number-col-slider-3" style="left: 66.666666%">
                        <i>Frontschutz<br />Premium</i>
                    </div>
                    <div class="name-slider-range-col number-col-slider-4" style="left: 99.999999%">
                        <i>Frontschutz<br />Folierung</i>
                    </div>

                </div>
                <div class="text-single-slider-tonirovka">
                    Wähle dein Paket
                </div>
            </div>
        </section>
    </div>


    <section class="section-main-page-3">
        <h2 class="zag text-center">LACKSCHUTZ IN ZAHLEN 2020</h2>
        <div class="gradient-header-top"></div>
        <div class="gradient-header-bottom"></div>
        <div class="wrapper">
            <div class="info-box ">
                <div class="row-4">
                    <span class="cifra-info">
                        <b class="b-count">
                            <span class='numscroller'>84</span>
                        </b>
                    </span>
                    <p class="roboto-regular">Frontschutzpakete</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info">
                        <b class="b-count">mehr als
                            <span class='numscroller'>8000</span>
                        </b>
                    </span>
                    <p class="roboto-regular">Steinschläge abgewärt</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info">
                        <b class="b-count">
                            <span class='numscroller'>48</span>
                        </b>
                        <i>Autos</i>
                    </span>
                    <p class="roboto-regular">Voll foliert</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info">
                        <b class="b-count">
                            <span class='numscroller'>1825</span>
                        </b>
                        <i>lfm+</i>
                    </span>
                    <p class="roboto-regular">Folie verlegt</p>
                </div>
            </div>
        </div>
    </section>

    <div class="background-website">
        <div class="wrapper">
            <div class="div-table">
                <div class="row-form-box">
                    <h2 class="zag">
                        KONTAKT
                    </h2>
                    <div role="form" class="wpcf7" id="wpcf7-f121-o1" lang="ru-RU" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <button type="button" class="wpcf7-form-control wpcf7-submit" onclick="openContactModal()">KONTAKT
                            ANFORDERN</button>
                    </div>
                </div>
                <div class="row-form-box pc-box-footer-form">
                    <img class="box-left-text-right-image__img"
                        src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Lackschutzfolien Bild 2-02-03.png" />
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script-file')
    <script src="{{ mix('/js/car_paint_protection.js') }}"></script>
@endsection
