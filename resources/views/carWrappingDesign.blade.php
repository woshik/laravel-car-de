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
                        <img class="box-left-text-right-image__img lazy" src="/images/s1.png" alt="">
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">
                                Der Beste der Besten!<br />
                                ALEXANDRA LITUTA
                            </h2>
                            <span class="p-reg roboto-regular">
                                <p>Seit 2011 pflegen wir engen Kontakt zu einer der Top 3 Car Livery Designer
                                    dieser Welt. Der in der Szene bekannte Rennwagen Designer Alexander Lituta
                                    mit dem Hauptsitz in Kiew, designed personlich mit unseren Kunden eine
                                    individuelle
                                    Folie die es nur einmal auf dieser Welt gibt.</p>
                                <p>
                                    Ob kleine Details oder vollflächiger Digitalprint auf Folie Alexander zaubert
                                    stets ein
                                    „Wau“ auf die Strassen. überzeugen Sie sich selbst und holen Sie sich eine
                                    inspiration
                                    auf seinem Instagram Account.
                                </p>
                            </span>
                            <button class="nice-btn" onclick="openContactModal()"><i></i>hier zur
                                Gallery<i></i></button>
                        </div>

                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img lazy" src="/images/s1.png" alt="">
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
                        <img class="box-left-image-right-text__img parallax" src="/images/car9.png" alt="">
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
            <div class="background-col-8-icons"><img class="parallax" src="/images/C-bg.png"
                    data-paroller-factor="-0.3" data-paroller-type="foreground" data-paroller-direction="vertical">
            </div>
            <h2 class="zag text-center">WIE GESTALTEST DU DEINE EIGENE FOLIE?</h2>

            <div class="wrapper">
                <div class="div-table">
                    <div class="row-3">
                        <i class="info-icon" style="background: url(/images/micro.svg);"></i>
                        <span class="name-icon-box">Interview</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(/images/design.svg);"></i>
                        <span class="name-icon-box">Designerstellung</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(/images/handshake.svg);"></i>
                        <span class="name-icon-box">Deal mit dem Grafiker</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(/images/test-copy-11-1.svg);"></i>
                        <span class="name-icon-box">Offerte zur Umsetzung</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(/images/table-printer.svg);"></i>
                        <span class="name-icon-box">Druck auf Folie</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(/images/test-copy-1.svg);"></i>
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
                        <img class="box-left-text-right-image__img parallax" src="/images/car20.png" alt="" />
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
                        <img class="box-left-text-right-image__img parallax" src="/images/car20.png" alt="" />
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
                        <img class="box-left-text-right-image__img parallax" src="/images/car21.png" alt="" />
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
                                <p><input type="submit" value="Rückruf anfordern" class="wpcf7-form-control wpcf7-submit" />
                                </p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                    <div class="row-form-box pc-box-footer-form">
                        <img class="box-left-text-right-image__img parallax" src="/images/car19.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('script-file')
    <script src="{{ mix('/js/car_wrapping_design.js') }}"></script>
@endsection
