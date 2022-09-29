@extends('layouts.app')

@section('title')
    <title>Auto Detailing - Neuer Glanz | Folientechnik Schweiz</title>
@endsection

@section('meta')
    <link rel="canonical" href="https://folientechnik-schweiz.ch/auto-detailing">
    <meta name="keywords" content="auto detailing" />
    <meta name="description" content="Du willst Dein Auto in neuem Glanz erstrahlen lassen? Dann probier unser 1 a Auto Detailing! ✅ Schutz vor Dreck ✅ Langer Schutz! | Folientechnik Schweiz"/>
@endsection

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/car_detailing.css') }}">
@endsection

@section('content')
    <video src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/video/Design%20Digitalprint.mp4" autoplay muted loop id="myVideo"></video>

    <header class="header">
        <div class="gradient-header-main-bottom"></div>
        <div class="header-content-box">
            <h1 class="h1 sup-bold-Italic">Detailing</h1>
            <p class="h5 sup-light">Auto cosmetology</p>
        </div>
    </header>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car10.png" alt="" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">
                                Protection and care <br />behind your car
                            </h2>
                            <span class="p-reg roboto-regular">
                                <p class="p1">
                                    Craftsmen restore the surface of your
                                    car, give it a shine - and create an
                                    invisible but very effective layer of
                                    protection
                                </p>
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car10.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-deteiling-page-1">
            <div class="background-col-8-icons">
                <img class="parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/p67png" alt="" />
            </div>
            <h2 class="zag text-center">Detailing capabilities</h2>
            <p class="sup-light text-center">
                Modern protection technologies <br />and caring for your car
            </p>
            <div class="wrapper">
                <div class="div-table">
                    <div class="row-4">
                        <i class="info-icon" style="
                                    background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/deteiling-info-7.svg);
                                "></i>
                        <span class="name-icon-box">Leather</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="
                                    background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/deteiling-info-6.svg);
                                "></i>
                        <span class="name-icon-box">Body</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="
                                    background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/deteiling-info-5.svg);
                                "></i>
                        <span class="name-icon-box">Glass</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-19.svg)"></i>
                        <span class="name-icon-box">Chromium</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/glass-copy.svg)"></i>
                        <span class="name-icon-box">Disks</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="
                                    background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/deteiling-info-3.svg);
                                "></i>
                        <span class="name-icon-box">Rubber</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="
                                    background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/deteiling-info-1.svg);
                                "></i>
                        <span class="name-icon-box">Dashboard</span>
                    </div>
                    <div class="row-4">
                        <i class="info-icon" style="
                                    background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/deteiling-info-2.svg);
                                "></i>
                        <span class="name-icon-box">Carpets</span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-range-tonirovka zaschita-plenka">
            <h2 class="zag text-center">Protect your car</h2>
            <p class="sup-light text-center">
                Choose your level of protection
            </p>
            <div class="wrapper">
                <div id="slidersec" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%"></span>
                    <div class="name-slider-range-col number-col-slidersec-1" style="left: 0%">
                        <div class="cifra-text_cifra">01</div>
                        <i>From dirt</i>
                    </div>
                    <div class="name-slider-range-col number-col-slidersec-2" style="left: 50%">
                        <div class="cifra-text_cifra">02</div>
                        <i>Additional protection against mechanical
                            damage</i>
                    </div>
                    <div class="name-slider-range-col number-col-slidersec-3" style="left: 100%">
                        <div class="cifra-text_cifra">03</div>
                        <i>Maximum degree with mechanical protection</i>
                    </div>
                </div>
                <button class="blue-form-btn zakaz-zashita-modal-form-btn">
                    Order protection
                </button>
            </div>
        </section>
    </div>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car11.png" alt="" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">
                                Cleaning and preserving leather goods
                            </h2>
                            <span class="p-reg roboto-regular">
                                <p>
                                    Cleaning helps to restore the leather
                                    interior or keep the softness of new
                                    leather, prevents deep wrinkles,
                                    protects against dirt and allows the
                                    skin to "breathe".
                                </p>
                                <p>
                                    Your car interior stays cleaner and
                                    looks like new for longer
                                </p>
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img parallax loaded" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car11.png" alt="" />
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
                        <img class="box-left-image-right-text__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car12.png" alt="" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">
                                Restoration of decorative elements of the
                                cabin
                            </h2>
                            <span class="p-reg roboto-regular">
                                <p>
                                    Masters use only special tools and
                                    professional salon polishing products.
                                </p>
                                <p>
                                    They also perform lamination of parts
                                    with carbon
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="section-main-page-3" data-block="7">
        <h2 class="zag text-center">WE ARE IN NUMBERS</h2>
        <div class="gradient-header-top"></div>
        <div class="gradient-header-bottom"></div>
        <div class="wrapper">
            <div class="div-flex">
                <div class="row-4">
                    <span class="cifra-info"> <b class="b-count"><span class='numscroller' data-min='1' data-max='3'
                                data-delay='5' data-increment='1'>3</span> - <span class='numscroller' data-min='1'
                                data-max='5' data-delay='5' data-increment='1'>5</span></b> <i>SESSIONS</i></span>
                    <p class="roboto-regular">New skin effect</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info"> <b class="b-count">in <span class='numscroller' data-min='1' data-max='7'
                                data-delay='5' data-increment='1'>7</span> - <span class='numscroller' data-min='1'
                                data-max='9' data-delay='5' data-increment='1'>9</span></b>
                        <i>TIMES</i></span>
                    <p class="roboto-regular">Reduces the number of washes</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info"> <b class="b-count"><span class='numscroller' data-min='1' data-max='6'
                                data-delay='5' data-increment='1'>6</span> - <span class='numscroller' data-min='1'
                                data-max='24' data-delay='5' data-increment='1'>24</span></b> <i>MONTHS</i></span>
                    <p class="roboto-regular">Service life</p>
                </div>
                <div class="row-4">
                    <span class="cifra-info"> <b class="b-count">from <span class='numscroller' data-min='1' data-max='3'
                                data-delay='5' data-increment='1'>3</span> - <span class='numscroller' data-min='1'
                                data-max='40' data-delay='5' data-increment='1'>40</span></b> <i>KM /
                            H</i></span>
                    <p class="roboto-regular">Clean windshield in the rain</p>
                </div>
            </div>
        </div>
    </section>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-text-right-image">
                    <div class="row box-left-text-right-image-mobile">
                        <img class="box-left-text-right-image__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car13.png" alt="" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">
                                Application of quartz composition to the
                                body
                            </h2>
                            <span class="p-reg roboto-regular">
                                <p>
                                    Modern safe body chemistry keeps the car
                                    surface clean for longer.
                                </p>
                                <p>
                                    The master uses a more concentrated
                                    element when it is necessary to provide
                                    little protection against mechanical
                                    damage.
                                </p>
                            </span>
                        </div>
                    </div>
                    <div class="row box-left-text-right-image-pc">
                        <img class="box-left-text-right-image__img parallax loaded" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car13.png" alt="" />
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
                        <img class="box-left-image-right-text__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car14.png" alt="" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">Safe body polishing</h2>
                            <span class="p-reg roboto-regular">
                                <p>
                                    Our craftsmen carry out individual work
                                    with each car. When restoring glossy
                                    shine and color depth, the lacquer layer
                                    on the body, its reaction to temperature
                                    and mechanical stress are taken into
                                    account
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <section class="section-main-page-3" data-block="10">
        <h2 class="zag text-center">Additional services</h2>
        <div class="gradient-header-top"></div>
        <div class="gradient-header-bottom"></div>
        <div class="wrapper">
            <div class="div-table">
                <div class="row-4">
                    <span class="cifra-text_cifra">01</span>
                    <span class="name-icon-box">Deep cleaning of paintwork</span>
                </div>
                <div class="row-4">
                    <span class="cifra-text_cifra">02</span>
                    <span class="name-icon-box">Long-lasting anti-rain</span>
                </div>
                <div class="row-4">
                    <span class="cifra-text_cifra">03</span>
                    <span class="name-icon-box">Protection Glossy Buttons
                    </span>
                </div>
                <div class="row-4">
                    <span class="cifra-text_cifra">04</span>
                    <span class="name-icon-box">Protection of interior wood and lacquer
                        coatings</span>
                </div>
                <div class="row-4">
                    <span class="cifra-text_cifra">05</span>
                    <span class="name-icon-box">Detailing of the engine compartment</span>
                </div>
                <div class="row-4">
                    <span class="cifra-text_cifra">06</span>
                    <span class="name-icon-box">Pure rubber up to six months</span>
                </div>
                <div class="row-4">
                    <span class="cifra-text_cifra">07</span>
                    <span class="name-icon-box">Protecting calipers from dirt</span>
                </div>
                <div class="row-4">
                    <span class="cifra-text_cifra">08</span>
                    <span class="name-icon-box">Removing scale from the surface of the car
                    </span>
                </div>
            </div>
        </div>
    </section>

    <div class="background-website">
        <section class="section-main-page-1">
            <div class="wrapper">
                <div class="box-left-image-right-text">
                    <div class="row">
                        <img class="box-left-image-right-text__img parallax" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/car15.png" alt="" />
                    </div>
                    <div class="row">
                        <div>
                            <h2 class="zag">What we work with</h2>
                            <span class="p-reg roboto-regular">
                                <p>
                                    We use only the best products and
                                    technologies for caring for your car
                                </p>
                                <ul>
                                    <li>Polishing equipment Rupes</li>
                                    <li>Chemistry</li>
                                </ul>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="background-website">
        <section class="section-deteiling-page-1">
            <div class="background-col-8-icons">
                <img class="parallax" src="" data-paroller-factor="-0.3" data-paroller-type="foreground"
                    data-paroller-direction="vertical" style="
                            transform: translateY(-92px);
                            transition: transform 0s linear 0s;
                            will-change: transform;
                        " />
            </div>
            <h2 class="zag text-center">Stages of work</h2>
            <p class="sup-light text-center">
                How we protect and care for your car
            </p>
            <div class="wrapper">
                <div class="div-table">
                    <div class="row-3">
                        <i class="info-icon" style="
                                    background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-5-1.svg);
                                "></i>
                        <span class="name-icon-box">Body - perfect polish</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="
                                    background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-12-1.svg);
                                "></i>
                        <span class="name-icon-box">Application of silicon composition</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/handshake.svg)"></i>
                        <span class="name-icon-box">Drying with special equipment</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-16.svg)"></i>
                        <span class="name-icon-box">Temperature control</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="
                                    background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-11-1.svg);
                                "></i>
                        <span class="name-icon-box">Control inspection</span>
                    </div>
                    <div class="row-3">
                        <i class="info-icon" style="background: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/test-copy-17.svg)"></i>
                        <span class="name-icon-box">Car delivery</span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('partials.contactForm')
@endsection


@section('script-file')
    <script src="{{ mix('/js/car_detailing.js') }}"></script>
@endsection
