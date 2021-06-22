@extends('layouts.app')

@section('title', 'Car Window Tinting')

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/car_window_tinting.css') }}">
@endsection

@section('content')
    <video  src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/video/RocketGuard%20SelfHealing_2%20(online-video-cutter.com)_2_2_2.mp4" autoplay muted loop id="myVideo"></video>

    <header class="header">
        <div class="gradient-header-main-bottom"></div>
        <div class="header-content-box">
            <h1 class="h1 sup-bold-Italic">
                Black Glass<br />
                Scheiben tönen
            </h1>
        </div>
    </header>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image clearfix">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Scheibentönung-BIld-1.png" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">
                                Garantiert bestes <br />
                                Preis - Leistungsverhältnis
                            </h2>
                            <span class="p-reg roboto-regular">
                                <p>
                                    Mit mehr als 15 Jahren Erfahrung in Sachen professionelles Scheiben tönen bieten
                                    wir unseren Kunden stets das beste Preis - Leistungsverhältnis der Schweiz.
                                    Keine Dopingpreise sondern seriöse Arbeit zur fairen Preis.
                                </p>
                                <p>
                                    Premiumfolien von Llumar, Bruxsafol oder 3M stehen zur Auswahl und Sie werden
                                    ausführlich dazu beraten.Wir geben auf Arbeit und Material eine lebenslange
                                    Garantie.
                                </p>
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Scheibentönung-BIld-1.png" alt="" />
                    </div>
                    <div></div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <h2 class="zag" style="text-align: center;">Wähle deine Scheibentönung</h2>
        <section class="section-range-tonirovka">
            <div class="wrapper">
                <div class="box-left-image-right-text">
                    <div class="row box-left-image-right-text__img"
                        style="display: flex;justify-content: center;align-items: center;">
                        <img class="box-left-image-right-text__img tonirovka-fon"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/slider/background.png" />
                        <img class="box-left-image-right-text__img tonirovka-back" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/slider/tint.png"
                            style="opacity: 0.4" />
                    </div>
                    <div class="row display-flex-center">
                        <div class="tonirovka-info-box">
                            <div class="tonirovka-name">
                                WERKSTÖNUNG
                            </div>
                            <div class="range-text">
                                <div class="row-3-range">
                                    <i class="number-range">0%</i><br />
                                    <p class="p-rang">
                                        Hitzeschutz
                                    </p>
                                </div>
                                <div class="row-3-range">
                                    <i class="number-range">0%</i><br />
                                    <p class="p-rang">
                                        UV Schutz
                                    </p>
                                </div>
                                <div class="row-3-range">
                                    <i class="number-range">0%</i><br />
                                    <p class="p-rang">
                                        Blendschutz
                                    </p>
                                </div>
                            </div>
                            <button onclick="openContactModal()" class="blue-btn-form range-modal-form-btn">
                                Termin zur Beratung
                            </button>
                        </div>
                    </div>
                </div>
                <div id="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%"></span>
                    <div class="name-slider-range-col number-col-slider-1" style="left: 0%">
                        <i>ohne Folie</i>
                    </div>
                    <div class="name-slider-range-col number-col-slider-2" style="left: 25%">
                        <i>NR 14</i>
                    </div>
                    <div class="name-slider-range-col number-col-slider-3" style="left: 50%">
                        <i>NR 04</i>
                    </div>
                    <div class="name-slider-range-col number-col-slider-4" style="left: 75%">
                        <i>HP 15</i>
                    </div>
                    <div class="name-slider-range-col number-col-slider-5" style="left: 100%">
                        <i>HP 05</i>
                    </div>
                </div>
                <div class="text-single-slider-tonirovka">
                    Wähle deine Scheibentönung
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image clearfix">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Scheibentönung-BIld--3.png" alt="" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">
                                SCHEIBENTöNUNG
                                <br />
                                <br />
                                mit Hitzeschutz<br />
                                mit UV Schutz<br />
                                mit Einbruchschutz
                            </h2>
                            <span class="p-reg roboto-regular">
                                <p>
                                    Es gibt viele Gründe die für eine Scheibentönung von uns sprechen, schon in
                                    Betracht das eine Werkstönung es sich nur um eingefärbtes Glas handelt und
                                    keinerlei Hitzeschutz oder UV Schutz bietet.
                                </p>
                                <p>
                                    Getönte Scheiben mit Folie bieten noch zusätzlich einen massiven Einbruchschutz.
                                    Die innen geklebte Folie verbindet das Einscheibensicherheitsglas und bildet so
                                    einen massiven Einbruchschutz.
                                </p>
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img loaded"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Scheibentönung-BIld--3.png" alt="" />
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
                        <h2 class="zag">
                            Erfahren Sie mehr <br />
                            über unser Angebot
                        </h2>
                        <br />
                        <q class="car-wrapping-quote">Black Glass</q>
                        <div role="form" class="wpcf7" id="wpcf7-f121-o1" lang="ru-RU" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <button type="button" class="wpcf7-form-control wpcf7-submit" onclick="openContactModal()">KONTAKT ANFORDERN</button>
                        </div>
                    </div>
                    <div class="row-form-box pc-box-footer-form">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Scheibentönung-BIld-4.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('script-file')
    <script src="{{ mix('/js/car_window_tinting.js') }}"></script>
@endsection
