@extends('layouts.app')

@section('title')
    <title>Auto Folierung Schweiz mit | Folientechnik Schweiz</title>
@endsection

@section('meta')
    <meta name="keywords" content="auto folieren schweiz" />
    <meta name="description" content="Wir beginnen dort, wo Werbetechnik aufhört! ✅ Auto Folierung Schweiz. ✅ Lackschutz Folierung. ✅ Scheiben Tönung. Jetzt informieren | Folientechnik Schweiz"/>
@endsection

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

    <div class="background-website">
        <div class="wrapper">
            <div class="d-flex flex-column-reverse-1023">
                <div class="box-container half-width-min-1023">
                    <div class="header-container">
                        <h2 class="zag text-center">Folientechnik Schweiz</h2>
                    </div>
                    <hr class="underline" />
                    <div class="text-center">
                        <p class="p-reg roboto-regular mb-4">Foliencenter in Zürich bieten seit 2011 alles rund um Folie am Auto an und ist seit her immer ein Begriff in Sachen Car Wrapping.</p>
                        <p class="p-reg roboto-regular mb-4">Wir arbeiten stets mit den besten Marken und Folien. Platinum Wrapping Film und RocketGuard sind unsere Premium Folien, denn noch bieten wir auf Kundenwunsch andere Marken wie 3M, Avery, Oracal, KPMF, Sott, Llumar und noch vieles mehr.</p>
                        <p class="p-reg roboto-regular mb-4">Durch direkten Kontakt zum Hersteller sind wir immer am laufenden mit den neuersten Trendfarben und haben diese sofort auf Lager.</p>   
                        <p class="p-reg roboto-regular mb-4">Unser Handwerk mit dem Know How und After Sale Support lässt uns Schweizweit einzigartig wirken.</p>
                        <p class="p-reg roboto-regular mb-4">Jedes Projekt wird als Unikat behandelt mit Schweizer Standart mit exklusiven Niveau, kein Design wird identisch gemacht, keine Scheibentönung ohne 100% Garantie, keine Luxuswagen mit der entsprechenden Behandlung. Folientechnik Schweiz ist jedes Mal einzigartig wie unsere Kunden.</p>
                    </div>
                    <hr class="underline" />
                </div>
                <div class="half-width-min-1023 d-flex justify-content-center align-items-center image-border-margin">
                    <img class="image-width-100 " src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/feature-images/home-BMWfolierenSchweiz.png" alt="BMW Folientechnik Schweiz" />
                </div>
            </div>
        </div>
    </div>
    
    <div class="background-website">
        @include('partials.services')   
    </div>

    <div class="background-website">
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

    @include('partials.contactForm')
@endsection


@section('script-file')
    <script src="{{ mix('/js/home.js') }}"></script>
@endsection
