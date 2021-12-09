@extends('layouts.app')

@section('title')
    <title>Auto Folien Design - frei wählen| Folientechnik Schweiz</title>
@endsection

@section('meta')
    <meta name="keywords" content="auto folien design" />
    <meta name="description" content="Auf der Suche nach besonderen Looks für Dein Auto? Unser Auto Folien Design bietet Dir eine große Auswahl! ✅ Jetzt informieren! | Folientechnik Schweiz"/>
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
                <div class="box-left-text-right-image clearfix">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/team/Freebird%20Design%20Profilbild.png"
                            alt="">
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">
                                Digitalprint / Design / Autofolie
                            </h2>
                            <span class="p-reg roboto-regular">
                                <p>
                                    Mit individuell gestalteten Autofolien kann man nicht nur werblich aus der Masse
                                    hervorstechen, sondern auch privat sein Auto individuell gestalten. Per Digitaldruck
                                    werden individuelle Motive auf hochwertige Folien aufgedruckt, die wir dann am Fahrzeug
                                    anbringen. Neben dem dauerhaften Schutz des Fahrzeugs fällt Ihr Fahrzeug durch das
                                    individuelle Design auf. Beim Thema
                                </p>
                                <p>
                                    Design setzen wir großartige Designer wie:
                                </p>
                                <ul>
                                    <li>TT Studio</li>
                                    <li>Alexander Lituta</li>
                                    <li>Freebird Design</li>
                                </ul>
                                <p>
                                    und andere. Selbstverständlich können Sie mit Ihren eigenen Entwürfen kommen und wir
                                    prüfen, inwieweit das umsetzbar ist. Was möglich ist, machen wir möglich.
                                </p>
                            </span>
                            <button class="nice-btn" onclick="openContactModal()">
                                <i></i>hier zur Gallery<i></i>
                            </button>
                        </div>

                    </div>
                    <div class="row box-left-text-right-image-pc d-flex align-items-center justify-content-center">
                        <img class="box-left-text-right-image__img image-width-75"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/team/Freebird%20Design%20Profilbild.png"
                            alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-image-right-text">
                    <div class="row d-flex align-items-center justify-content-center">
                        <img class="box-left-image-right-text__img image-width-100"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car9.png"
                            alt="">
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">Wow-Effekt auf der Strasse durch Digitalprint</h2>
                            <span class="p-reg roboto-regular">
                                <p>Gerade im gewerblichen Bereich kann durch individuellen Druck und gute Ideen ein
                                    Wow-Effekt und Wiedererkennungseffekt erzielt werden.</p>
                                <p>Ob Fahrzeuge für den Pflegedienst, für ein Pizza-Taxi oder sonstige Unternehmen.</p>
                                <P>
                                    Wenn Sie positiv auffallen wollen, können wir mit Digitaldruck und/oder
                                    Autobeschriftungen dafür sorgen, dass Ihr Unternehmen positiv auffällt.
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
            <div class="background-col-8-icons"><img
                    src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/C-bg.png"
                    data-paroller-factor="-0.3" data-paroller-type="foreground" data-paroller-direction="vertical">
            </div>
            <h2 class="zag text-center">WIE GESTALTEST DU DEINE EIGENE FOLIE?</h2>

            <div class="wrapper">
                <div class="div-table">
                    <div class="row-3">
                        <i class="info-icon"
                            style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/micro.svg);"></i>
                        <span class="name-icon-box">Interview</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon"
                            style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/design.svg);"></i>
                        <span class="name-icon-box">Designerstellung</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon"
                            style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/handshake.svg);"></i>
                        <span class="name-icon-box">Deal mit dem Grafiker</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon"
                            style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-11-1.svg);"></i>
                        <span class="name-icon-box">Offerte zur Umsetzung</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon"
                            style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/table-printer.svg);"></i>
                        <span class="name-icon-box">Druck auf Folie</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon"
                            style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-1.svg);"></i>
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
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Corvette%20folieren_.png"
                            alt="" />
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
                    <div class="row box-left-text-right-image-pc d-flex align-items-center justify-content-center">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/Corvette%20folieren_.png"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-image-right-text">
                    <div class="row d-flex align-items-center justify-content-center">
                        <img class="box-left-text-right-image__img image-width-75"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/BMW%20Turbomeister.png"
                            alt="" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">Individuelle Gestaltung mit Grafiker</h2>
                            <span class="p-reg roboto-regular">
                                <p>Soll es etwas Besonderes sein, bietet sich die individuelle Motivgestaltung durch einen
                                    Grafiker an, der nach einem Briefing und Interview Designvorschläge unterbreitet. Unsere
                                    Offerte zur Umsetzung wird Sie überzeugen und wir drucken die Folie nicht nur
                                    professionell, sondern bringen diese auch gleich fachmännisch an. Service aus einer
                                    Hand. Für individuelles Design durch Digital Print eignet sich bei der Autofolierung
                                    besonders:</p>
                                <ul>
                                    <li> Motorhaube</li>
                                    <li> Seiten / Türen</li>
                                    <li> Fahrzeugheck</li>
                                </ul>
                                <p>Aber auch die Folierung von Scheiben oder Autodach kann im Rahmen eines Gesamtkonzepts
                                    auch werblich Sinn machen. Wir sind sicher, dass unsere Grafiker auch für Sie einen
                                    Vorschlag haben, der Sie begeistern wird. Das Auto zu beschriften und werblich mit
                                    Digitaldruck auf Folie zu nutzen ist ein Werbeträger für Ihr Unternehmen, womit Sie
                                    Tausende mögliche Zielpersonen erreichen können.</p>
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

    <div class="gradient-header-bottom"></div>
    <div class="background-website">
        <section class="section-main-page-7">
            <div class="wrapper">
                <div class="div-table">
                    <div class="row-form-box contact-form-box">
                        <h2 class="zag">FINDE MEHR DAZU RAUS <br />
                            ÜBER EIN DESIGN AUF IHREM AUTO
                        </h2>
                        <div role="form" class="wpcf7" id="wpcf7-f121-o1" lang="ru-RU" dir="ltr">
                            <button type="button" class="wpcf7-form-control wpcf7-submit"
                                onclick="openContactModal()">KONTAKT ANFORDERN</button>
                        </div>
                    </div>
                    <div class="row-form-box pc-box-footer-form">
                        <img class="box-left-text-right-image__img"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/NissanGTRWRap.png"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('script-file')
    <script src="{{ mix('/js/car_wrapping_design.js') }}"></script>
@endsection
