<div class="service-box-menu">
    <div class="wrapper service-wrapper">
        <a href="{{ route('car-wrapping') }}" class="row-5">
            <div class="image-service back-box" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/service/car-wrapping.jpg)"></div>
            <span>Farbwechsel mit Folie</span>
            <i class="services-link 1">Mehr Details</i>
        </a>
        <a href="{{ route('car-paint-protection') }}" class="row-5">
            <div class="image-service back-box" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/service/car-paint-protection.jpg)"></div>
            <span>Lackschutzfolie</span>
            <i class="services-link 2">Mehr Details</i>
        </a>
        <a href="{{ route('car-window-tinting') }}" class="row-5">
            <div class="image-service back-box" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/service/car-window-tinting.jpg)"></div>
            <span>Scheibentönung</span>
            <i class="services-link 2">Mehr Details</i>
        </a>
        <a href="{{ route('car-wrapping-design') }}" class="row-5">
            <div class="image-service back-box" style="background-image: url(https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/service/car-wrapping-design.jpg)"></div>
            <span>Design mit Folie</span>
            <i class="services-link 4">Mehr Details</i>
        </a>
    </div>
</div>
<div class="close-box-service"></div>
<menu class="head-menu">
    <div class="burger-mobile-menu"></div>
    <a href="{{ route('home') }}">
        <div class="logo"></div>
    </a>
    <ul class="menu" id="msgText">
        <a href="{{ route('home') }}" class="no-service">
            <li class="li-head-menu">Home</li>
        </a>
        <a href="{{ route('services') }}" class="service-hover">
            <li class="li-head-menu">Services</li>
        </a>
        <span class="right-menu-box">
            <a href="{{ route('gallery') }}" class="no-service">
                <li class="li-head-menu">Gallery</li>
            </a>
            <a href="{{ route('contact') }}" class="no-service">
                <li class="li-head-menu contact-li">Kontakt</li>
            </a>
        </span>
    </ul>
</menu>
