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
    <div class="background-website">
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
                        <img class="box-left-text-right-image__img lazy"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/AutofolierungSchweiz---Bild-Nr.1-.png" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-image-right-text">
                    <div class="row"><img class="box-left-image-right-text__img"
                            src="https://github.com/woshik/laravel-car-de/blob/main/public/images/feature-images/Orange%20Chrom%20Matte.png?raw=true">
                    </div>
                    <div class="row">
                        <div style="width: 555px;">
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

                                <button onclick="openContactModal()"
                                    class="nice-btn plenka-modal-decor-btn custom-button-style" style="padding: 5px 0">
                                    <img width="60%" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/extra/button.png" />
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image clearfix">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img lazy"
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


                                <button onclick="openContactModal()"
                                    class="nice-btn plenka-modal-protection-btn custom-button-style">
                                    Jetzt Termin vereinbaren
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img lazy"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/BMW%20Z4%20-%20Chrom%20Matte%20Folierung_.png">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="background-website">
        <section class="section-deteiling-page-1">
            <h2 class="zag text-center">Was ist in unserem service <br /> inbegriffen?</h2>
            <p class="sup-light text-center">In der Regel dauern unsere Projekte 3 - 7 Werkstage<br>je nach Umfang
                des
                Projektes!</p>
            <div class="wrapper">
                <div class="div-table">
                    <div class="row-4">
                        <i class="info-icon lazy" data-bg="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-2.svg"></i>
                        <span class="name-icon-box">3 Phasen Handwäsche</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon lazy" data-bg="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-5.svg"></i>
                        <span class="name-icon-box">Lackzusstandskontrolle</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon lazy" data-bg="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-4.svg"></i>
                        <span class="name-icon-box">fachgerechte Demontage</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon lazy" data-bg="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-3.svg"></i>
                        <span class="name-icon-box">Wax, Kleberesteentfernung <br> und Entfetten</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon lazy" data-bg="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy.svg"></i>
                        <span class="name-icon-box">fachgerechte Folierung <br> vom Profi</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon lazy" data-bg="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-6.svg"></i>
                        <span class="name-icon-box">fachgerechte Montage</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon lazy" data-bg="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-12.svg"></i>
                        <span class="name-icon-box">Aufbereitung <br> zur Auslieferung</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon lazy" data-bg="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-11.svg"></i>
                        <span class="name-icon-box">Qualitätskontrolle</span>
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
                        <img class="box-left-image-right-text__img"
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

                                <button class="nice-btn" onclick="openContactModal()"><i></i>EIGENE FOLIE
                                    GESTALTEN...<i></i></button>

                            </span>
                        </div>
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
                    <span class="cifra-info"> <b class="b-count"><span class='numscroller' data-min='1' data-max='192'
                                data-delay='5' data-increment='2'>192</span></b> </span>
                    <p class="roboto-regular">abgeschlossene Aufträge</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info"> <b class="b-count"><span class='numscroller' data-min='1' data-max='4852'
                                data-delay='5' data-increment='20'>4852</span></b> </span>
                    <p class="roboto-regular">Laufmeter Folie</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info"> <b class="b-count"><span class='numscroller' data-min='1' data-max='16'
                                data-delay='5' data-increment='1'>16</span></b> </span>
                    <p class="roboto-regular">Designfolierungen</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info"> <b class="b-count"><span class='numscroller' data-min='1' data-max='1420'
                                data-delay='5' data-increment='1'>1420</span></b> </span>
                    <p class="roboto-regular">bedruckte Folie</p>
                </div>
            </div>
        </div>
    </section>

    <div class="background-website">
        <section class="section-main-page-7">
            <div class="wrapper">
                <div class="div-table">
                    <div class="row-form-box">
                        <h2 class="zag">Kontaktieren sie uns...</h2>
                        <div role="form" class="wpcf7" id="wpcf7-f121-o1" lang="ru-RU" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/#wpcf7-f121-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="121" />
                                    <input type="hidden" name="_wpcf7_version" value="5.1" />
                                    <input type="hidden" name="_wpcf7_locale" value="ru_RU" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f121-o1" />
                                    <input type="hidden" name="_wpcf7_container_post" value="0" />
                                    <input type="hidden" name="g-recaptcha-response" value="" />
                                </div>
                                <p><input type="text" name="your-name" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-form"
                                        id="name" autocomplete="name" aria-required="true" aria-invalid="false"
                                        placeholder="&nbsp;" /><label for="name" class="label-form">Name</label><br />
                                    <input type="tel" name="tel-178" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-form"
                                        id="tel" aria-required="true" aria-invalid="false" placeholder="&nbsp;" /><label
                                        for="tel" class="label-form">Telefonnummer</label>
                                </p>
                                <p><input type="submit" value="KONTAKT ANFORDERN" class="wpcf7-form-control wpcf7-submit" />
                                </p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                    <div class="row-form-box pc-box-footer-form">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Manufaktur-Folien-Schweiz---gross.png" />
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('script-file')
    <script src="{{ mix('/js/car_wrapping.js') }}"></script>
@endsection
