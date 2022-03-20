@extends('layouts.app')

@section('title')
    <title>{{ $data->title }}</title>
@endsection

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/car_detail.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lightgallery.min.css"
        integrity="sha512-DY7doCjzDiHKPjOIz7TBml+ZGeiORmxLdMEa8x7j+I0kuHD/vBogtvqhZCUbeCKJ8TR1slujyv9wxO4x0hbBMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="single-page-gallery">
        <div class="slider-single-page">
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper" id="lightgallery">
                    @foreach ($data->images as $image)
                        <a href="{{ $image->src }}" class="swiper-slide activate-info-box-gallery">
                            <img src="{{ $image->src }}" alt="{{ $image->alt }}">
                        </a>
                    @endforeach
                </div>
            
            </div>
        </div>
        <div class="wrapper">
            <div class="h5 page-breadcrumb sup-light text-center">
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to AUTO FOLIEREN." href="{{ route('home') }}"
                        class="home">
                        <span property="name">TESLA FOLIEREN</span>
                    </a>
                </span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to AUTO FOLIEREN." href="{{ route('tesla-model-y') }}"
                    class="home">
                        <span property="name" class="post post-post current-item">Model Y Lackschutzfolie Schweiz</span>
                    </a>
                </span>
            </div>
            <div class="title-single-page p-b-0">Für immer Neu...</div>
            <div class="title-single-page p-t-0">Lackschutz der neuen Generation!</div>

            <div class="content-single-page">
                <div class=" p-reg roboto-regular">

                    <div class="mt-10">
                        <div dir="auto"> Mit dem Telsa Model Y ist die „SEXY“ Flotte von Tesla Motors nun komplett. Seit August 2021 auch in der Schweiz verfügbar,
                            liefert Tesla Schweiz seit ein Fahrzeug nach dem anderen aus. Klar im Fokus ist auch das Thema „ Lackschutzfolie für Tesla“
                            weil der weiche Lack relativ schnell verkratzen kann. </div>
                    </div>

                    <div class="mt-10">
                        <div dir="auto">Folientechnik Schweiz und RocketGuard bieten daher ab sofort ein vollumfängliches Lackschutzpakete für alle Tesla Modelle
                            an, so bleibt ihr Tesla Model Y geschützt vor Salz, Mückendreck, Steinschläge, Kratzer und sonstige unerwünschte Unannehmlichkeiten
                            in Sachen Lackschaden. Keine 15 min von Tesla Winterthur entfernt liegt unser Hauptsitz und Werkshalle
                            mit Platz für bis zu 10 Fahrzeug die wir gleichzeitig folieren können. Somit schweizweit einer der grössten Lackschutzfolien
                            und Car Wrapping Folien Verleger der Schweiz. In unserem umfangreichen Servicepaket ist inbegriffen:</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="background-website padding-bottom-0">
            <section class="section-main-page-1">
                <div class="wrapper">
                    <div class="box-left-text-right-image clearfix">
                        <div class="row box-left-text-right-image-mobile">
                            <img class="box-left-text-right-image__img"
                                src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/details/tesla-model-y/Tesla%20Model%20Y%20folieren.jpg">
                        </div>
                        <div class="row">
                            <div>
                                <span class="p-reg roboto-regular">
                                    <ul>
                                        <li>Lackschutzfolie für die Front mit Ceramic Versiegelung</li>
                                        <li>Vollfolierung mit Steinschlagschutzfolie und Ceramicversiegelung</li>
                                        <li>10 Jahre Garantie auf RocketGuard Folien</li>
                                        <li>lebenslange Garantie auf Schnittverletztungen (kein Messer auf dem Lack)</li>
                                        <li>Hol & Bring Service schweizweit</li>
                                        <li>10 Jahre Erfahrung auf Tesla Modelle</li>
                                    </ul>
    
                                    <div class="div-flex">
                                        <button onclick="openContactModal()"
                                            class="width-320 nice-btn plenka-modal-protection-btn custom-button-style"
                                            style="padding: 5px 0">
                                            Preisliste
                                        </button>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="row box-left-text-right-image-pc">
                            <img class="box-left-text-right-image__img"
                                src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/details/tesla-model-y/Tesla%20Model%20Y%20folieren.jpg">
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div class="wrapper">
            <div class="content-single-page">
                <div class=" p-reg roboto-regular">
                    <div class="mt-10">
                        <div dir="auto">Sie haben Sie gerade einen neuen Tesla bestellt? Zögern Sie nicht den Wagen ab dem ersten Tag einpacken zu lassen und
                            geniessen Sie den Wagen 10 Jahre garantiert sorglos! Selbstheilende und Hydrophope Oberfläche ist in unserer Lackschutzfolie
                            integriert und mit 160ym einer der dicksten 3D verlegbaren PPF - Folien die es auf dem Markt gibt.</div>
                    </div>

                    <div class="mt-10">
                        <div dir="auto">Unsere zertifizierten Car Wrapper, folieren ihren Tesla in nur wenigen Tagen! Unsere Folien sind über Jahre hinweg
                            rückstandlos entfernbar und somit auch für Leasingfahrzeug ideal geeignet. Sie geben ein unversehrtes Fahrzeug zurück
                            und ersparen sich unheimlich viel Ärger und Diskussionen mit der Leasinggesellschaft.</div>
                    </div>

                    <div class="mt-10">
                        <div dir="auto">Eingebrannter Mückendreck ist kein Thema mehr, mit nur wenigen Handgriffen lassen sich diese Flecken entfernen. Waschanlagenbesuche
                            werden weniger und grösstenteils wäscht schon der Regen das meiste ab.</div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section-main-page-2">
            <div class="wrapper">
                <div class="service-box custom-service-grid">
                    <div class="row-4 photo-college">
                        <div class="image-service back-box" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/details/tesla-model-y/Tesla%20Steinschlagschutzfolie.jpg)"></div>
                    </div>
                    <div class="row-4 photo-college">   
                        <div class="image-service back-box" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/details/tesla-model-y/Tesla%20mit%20Folie%20sch%C3%BCtzen.jpg)"></div>
                    </div>
                    <div class="row-4 photo-college">
                        <div class="image-service back-box" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/details/tesla-model-y/Tesla%20Model%20Y%20Z%C3%BCrich.jpg)"></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="wrapper">
            <div class="title-single-page p-b-0">Persönliche Kundenberatung per Video Call</div>
            <div class="title-single-page p-t-0">[Zoom od. Google Meets]</div>

            <div class="content-single-page">
                <div class=" p-reg roboto-regular">

                    <div class="mt-10">
                        <div dir="auto">Wir von Folientechnik Schweiz versuchen stets unseren Kunden den besten Service zu bieten, dazu gehört auch zu der heutigen
                            Zeit das persönliche Kundenberatung auch kontaktlos stattfinden kann.</div>
                    </div>

                    <div class="mt-10">
                        <div dir="auto">Geben Sie uns die Möglichkeit per Videocall, ihnen einen Einblick in die Folienwelt zu verschaffen und uns persönlich bei
                            ihnen vorzustellen zu können. Bequem und kostenlos bei ihnen Zuhause oder an der Arbeitsstelle!</div>
                    </div>

                    <div class="mt-10">
                        <div dir="auto">Reservieren Sie noch heute ihr Beratungsgespräch mit unserem Manager, Sie bestimmen wann und wo!</div>
                    </div>
                </div>

                <div class="div-flex mt-100">
                    <button onclick="openContactModal()"
                        class="width-240 nice-btn plenka-modal-protection-btn custom-button-style"
                        style="padding: 10px 0">
                        Hier zur Anfrage
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script-file')
    <script src="{{ mix('/js/car_detail.js') }}"></script>
@endsection
