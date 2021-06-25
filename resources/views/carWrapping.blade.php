@extends('layouts.app')

@section('title', 'Car Wrapping')

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/car_wrapping.css') }}">
@endsection

@section('content')
    <video src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/video/Folientechnik%20Schweiz%20I%20Image%20Video.mp4" autoplay muted loop id="myVideo"></video>

    <header class="header">
        <div class="gradient-header-main-bottom"></div>
        <div class="header-content-box">
            <h1 class="h1 sup-bold-Italic">Car Wrapping</h1>
            <p class="h5 sup-light">Die Kunst zu folieren...</p>
        </div>
    </header>
    <div class="background-website background-website-padding-top padding-bottom-0">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image clearfix">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/AutofolierungSchweiz---Bild-Nr.1-.png" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">AUTOFOLIERUNG</h2>
                            <span class="p-reg roboto-regular">
                                <p>Car Wrapping ist die moderne Art, dass Erscheinungsbild
                                    ihres Autos zu verändern um sich vom alltagsgrauen Strassenverkehr
                                    abzuheben.</p>
                                <p>Sie können eine Farbe aus unserer Farbpalette auswählen
                                    und wir folieren ihr Fahrzeug in nur wenigen Tagen.
                                    Mit mehr als 80 verschiedenen Farben und x verschiedenen
                                    Herstellern, bedruckbare Folie, sensationelle Strukturfolien
                                    und Designmöglichkeiten, steht ihren Wünschen unglaublich
                                    wenig im Weg.</p>
                                <p>Die Folie kann jederzeit sicher und rückstandlos entfernt
                                    werden, hinterlässt keine Lackschäden und wird bei uns zu
                                    100% messerlos verarbeitet.</p>
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/AutofolierungSchweiz---Bild-Nr.1-.png" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="background-website padding-bottom-0">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image flex-reverse-row clearfix">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img" src="https://github.com/woshik/laravel-car-de/blob/main/public/images/feature-images/Orange%20Chrom%20Matte.png?raw=true">
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">FARBFOLIE WÄHLEN...</h2>
                            <span class="p-reg roboto-regular">
                                <p>Wi r von Folientechnik Schweiz machen Sie sichtbar.</p>
                                <p>Es kommen Leute zu uns, die Individualität wollen, die anstatt
                                    eines neuen Wagens einfach das Erscheinungsbild
                                    des alten verändern wollen.</p>

                                <p>Wir haben Kunden die mit frischen Farben ihr neues Fahrzeug
                                    schützen wollen. All das ist mit unser Farben und unseren
                                    Folien möglich.</p>

                                <p>Um ihre richtige Folienfarbe wählen zu können, haben wir
                                    eine „ Box with Style“ zusammengestellt, die Sie kostenlose
                                    bei uns bestellen können.</p>
                                <div class="div-flex">
                                    <button onclick="openContactModal()"
                                        class="width-260 nice-btn plenka-modal-decor-btn custom-button-style" style="padding: 5px 0">
                                        <img width="60%" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/extra/button.png" />
                                    </button>
                                </div>
                                
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img"
                            src="https://github.com/woshik/laravel-car-de/blob/main/public/images/feature-images/Orange%20Chrom%20Matte.png?raw=true" />
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website padding-bottom-0">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image clearfix">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/BMW%20Z4%20-%20Chrom%20Matte%20Folierung_.png">
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">BERATUNG AM FAHRZEUG</h2>
                            <span class="p-reg roboto-regular">
                                <p>
                                    Nach Wahl Ihrer Wunschfarbe ist es ratsam sich direkt an ihrem Fahrzeug beraten
                                    zu lassen.
                                    Wie unsere Kunden selbst, sind ihre Fahrzeuge sehr individuell und brauchen
                                    deswegen eine
                                    konkrete und professionelle Beratung am Fahrzeug.
                                </p>
                                <p>Buchen Sie deswegen einen Beratungstermin mit unserem Manager und erhalten so
                                    ihre
                                    Preisofferte für ihren Farbwechsel mit Folie. Ein Gespräch dazu können Sie hier
                                    buchen.
                                </p>
                                
                                <div class="div-flex">
                                    <button onclick="openContactModal()"
                                        class="width-320 nice-btn plenka-modal-protection-btn custom-button-style" style="padding: 5px 0">
                                        Jetzt Termin vereinbaren
                                    </button>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/BMW%20Z4%20-%20Chrom%20Matte%20Folierung_.png">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="background-website padding-bottom-0">
        <section class="section-deteiling-page-1">
            <h2 class="zag text-center">Was ist in unserem service <br /> inbegriffen?</h2>
            <p class="sup-light text-center">In der Regel dauern unsere Projekte 3 - 7 Werkstage<br>je nach Umfang
                des
                Projektes!</p>
            <div class="wrapper">
                <div class="div-flex-wrap">
                    <div class="row-4">
                        <i class="info-icon" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-2.svg)"></i>
                        <span class="name-icon-box">3 Phasen Handwäsche</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-5.svg)"></i>
                        <span class="name-icon-box">Lackzusstandskontrolle</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-4.svg)"></i>
                        <span class="name-icon-box">fachgerechte Demontage</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-3.svg)"></i>
                        <span class="name-icon-box">Wax, Kleberesteentfernung <br> und Entfetten</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy.svg)"></i>
                        <span class="name-icon-box">fachgerechte Folierung <br> vom Profi</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-6.svg)"></i>
                        <span class="name-icon-box">fachgerechte Montage</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-12.svg)"></i>
                        <span class="name-icon-box">Aufbereitung <br> zur Auslieferung</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-11.svg)"></i>
                        <span class="name-icon-box">Qualitätskontrolle</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image flex-reverse-row clearfix">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Bild-3-I-Wrapping.png">
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag text-center">Kreativ, Erfahrung <br> und Niveau...</h2>
                            <div class="quote-block">
                                <q class="car-wrapping-quote">Es ist nicht der Preis den Sie bei uns zahlen, sondern
                                    unsere
                                    Erfahrung die Sie nutzen, es
                                    unser Niveau was Sie zu unseren Ehrbaren Kunden macht und nicht unsere
                                    rKreativität...
                                </q>
                            </div>

                            <span class="p-reg roboto-regular text-center">
                                <p>Die Kunst in Folie beginnt dann wenn wir den vollen Umfang an Technologie
                                    nutzen und somit kreative Motive und Design aus Folie gestalten, die
                                    einzigartige
                                    auf dieser Welt sind.</p>
                                <p>Wir arbeiten intensiv mit Grafischen Künstlern weltweit zusammen, die
                                    unsere Design auf den Computern zeichnen, die wir dann auf Folie mit Latexdruck
                                    umsetzen können.</p>
                                <p>Wir haben somit die Möglkeit nicht nur ihre Farbe zu wechseln sondern können
                                    ihre.</p>
                                <div class="div-flex">
                                    <button class="nice-btn" onclick="openContactModal()"><i></i>EIGENE FOLIE
                                        GESTALTEN...<i></i></button>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Bild-3-I-Wrapping.png" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="section-main-page-3" data-block="7">
        <h2 class="zag text-center">Unsere Statistik für 2020</h2>
        <div class="gradient-header-top"></div>
        <div class="gradient-header-bottom"></div>
        <div class="wrapper">
            <div class="info-box ">
                <div class="row-4">
                    <span class="cifra-info"> <b class="b-count"><span class='numscroller'>192</span></b> </span>
                    <p class="roboto-regular">abgeschlossene Aufträge</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info"> <b class="b-count"><span class='numscroller'>4852</span></b> </span>
                    <p class="roboto-regular">Laufmeter Folie</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info"> <b class="b-count"><span class='numscroller'>16</span></b> </span>
                    <p class="roboto-regular">Designfolierungen</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info"> <b class="b-count"><span class='numscroller'>1420</span></b> </span>
                    <p class="roboto-regular">bedruckte Folie</p>
                </div>
            </div>
        </div>
    </section>

    <div class="gradient-header-bottom"></div>
    <div class="background-website padding-bottom-top">
        <section class="section-main-page-7">
            <div class="wrapper">
                <div class="div-flex">
                    <div class="row-form-box mobile-box-footer-form">
                        <img class="box-left-text-right-image__img" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Manufaktur-Folien-Schweiz---gross.png" >
                    </div>
                    <div class="row-form-box width-mobile-290 contact-form-box">
                        <h2 class="zag">Kontaktieren sie uns...</h2>
                        <div role="form" class="wpcf7" id="wpcf7-f121-o1" lang="ru-RU" dir="ltr">
                            <button type="button" class="wpcf7-form-control wpcf7-submit" onclick="openContactModal()">KONTAKT ANFORDERN</button>
                        </div>
                    </div>
                    <div class="row-form-box pc-box-footer-form">
                        <img class="box-left-text-right-image__img" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Manufaktur-Folien-Schweiz---gross.png" />
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script-file')
    <script src="{{ mix('/js/car_wrapping.js') }}"></script>
@endsection
