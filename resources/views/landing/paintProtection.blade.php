@extends('layouts.app')

@section('title')
    <title>Steinschlagschutzfolie von | Folientechnik Schweiz</title>
@endsection

@section('meta')
    <link rel="canonical" href="https://www.folientechnik-schweiz.ch//fb/ppf">
    <meta name="keywords" content="steinschlagschutzfolie" />
    <meta name="description"
        content="Steinschlagschutzfolie der neuen Generation! Schütze Dein Auto vor Steinschlag! ✅ Selbstheilungseffekt! ✅ 100% Steinschlagschutz » | Folientechnik Schweiz" />
@endsection

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/landing_paint_protection.css') }}">
@endsection

@section('content')
    <div class="background-website">
        <div class="box-container">
            <div class="d-flex flex-column-reverse-1023">
                <div class="half-width-min-1023 d-flex flex-column align-items-center justify-content-center">
                    <div class="header-container">
                        <h2 class="zag text-center">Schützen sie ihren Porsche</h2>
                        <p class="sup-light text-center">Professionelle Lackschutzfolie mit Folientechnik Schweiz GmbH</p>
                    </div>
                    <div class="text-center mb-5" style="width: 425px;">
                        <p class="zag mb-4 heading">Die Vorteile liegen klar auf der Hand!</p>

                        <div class="d-flex justify-content-space-around align-items-center mb-5">
                            <img class="icon-65" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/rocket-icon.svg" alt="rocket" />
                            <div class="d-flex flex-column">
                                <span class="icon-text">100% Steinschlagschutz</span>
                                <span class="icon-text box-icon-custom">Besonders robuste Oberﬂache</span>
                                <span class="icon-text">ROCK SOLID TOPCOAT</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-space-around align-items-center mb-5">
                            <img class="icon-65" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/heart-icon.svg" alt="heart" />
                            <div class="d-flex flex-column">
                                <span class="icon-text">Selbstheilungseffekt</span>
                                <span class="icon-text box-icon-custom">Selbstheilung bei Raumtemperatur</span>
                                <span class="icon-text">INSTANT SELF HEALING</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-space-around align-items-center mb-5">
                            <img class="icon-65" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/drop-icon.svg" alt="drop" />
                            <div class="d-flex flex-column">
                                <span class="icon-text">Hydrophope oberfäche</span>
                                <span class="icon-text box-icon-custom">Oberﬂache wie nanoversiegelt</span>
                                <span class="icon-text">EXTREM HYDROPHOB</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-space-around align-items-center">
                            <img class="icon-65" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/web-icon.svg" alt="web" />
                            <div class="d-flex flex-column">
                                <span class="icon-text">Super Flexibel - 3D verlegbar</span>
                                <span class="icon-text box-icon-custom">Support & Kundenservice</span>
                                <span class="icon-text">DRIVEN TO DELIGHT</span>
                            </div>
                        </div>
                    </div>

                    @include('partials.hubspot-call-action-button')
                </div>
                <div class="half-width-min-1023 d-flex justify-content-center align-items-center image-border-margin ">
                    <div class="image-black-overlay">
                        <img class="image-width-100 border-round"
                        src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/bg-images/home.webp"
                        alt="BMW Folientechnik Schweiz" />
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.logo-slider')

    <div class="background-website">
        <div class="box-container d-flex justify-content-center align-items-center flex-column">
            <div class="header-container mb-5">
                <h2 class="zag text-center">Kunde teilen ihre Erfahrung</h2>
            </div>
            <div class="half-width-min-1023  image-border-margin mb-5">
                <div class="image-black-overlay">
                    <img class="image-width-100 border-round"
                    src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/bg-images/home.webp"
                    alt="BMW Folientechnik Schweiz" />
                    <div class="overlay"></div>
                </div>
            </div>
            @include('partials.hubspot-call-action-button')
        </div>
    </div>

    @include('partials.faq')

    @include('partials.window-tinting')

    @include('partials.team-slider')

    @include('partials.contactForm')
@endsection

@section('script-file')
    <script src="{{ mix('/js/landing_paint_protection.js') }}"></script>
@endsection