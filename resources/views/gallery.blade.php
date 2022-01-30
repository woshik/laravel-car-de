@extends('layouts.app')

@section('title', 'Gallery')

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/gallery.css') }}">
@endsection

@section('content')
    <section class="section-portfolio-page-1">
        <h2 class="zag text-center">Gallery</h2>
        <div class="div-grid grid-4-col portfolio-grid">
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'BMW-folieren-Schweiz']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/BMW-folieren-Schweiz.jpg" alt="BMW folieren Schweiz">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">BMW Folieren Schweiz</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Sie möchten ihr Auto folieren lassen und suchen einen fachmännischen Autofolierer in Raum Zürich, Thurgau, St.Gallen?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'BMW-folieren-Zürich']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/BMW-folieren-Zürich.jpg" alt="BMW folieren Zürich">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">BMW folieren Zürich</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Sie möchten ihr Auto folieren lassen und suchen einen fachmännischen Autofolierer in Raum Zürich, Thurgau und St.Gallen?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'Chevrolet-Camaro-folieren-Schweiz']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/Chevrolet-Camaro-folieren-Schweiz.jpg" alt="Chevrolet Camaro folieren Schweiz">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">Chevrolet Camaro folieren Schweiz</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Sie möchten ihr Auto folieren lassen und suchen einen fachmännischen Autofolierer in Raum Zürich, Thurgau und St.Gallen?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'Corvette-folieren-Zürich']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/Corvette-folieren-Zürich-.jpg" alt="Corvette folieren Zürich">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">Corvette folieren Zürich</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Sie möchten ihr Auto folieren lassen und suchen einen fachmännischen Autofolierer in Raum Zürich, Thurgau und St.Gallen?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'Die-Folizei']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/Die-Folizei.jpg" alt="Die Folizei">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">Die Folizei</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Sie möchten ihr Auto folieren lassen und suchen einen fachmännischen Autofolierer in Raum Zürich, Thurgau und St.Gallen?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'Ferrari-folieren-Schweiz']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/Ferrari-folieren-Schweiz.jpg" alt="Ferrari folieren Schweiz">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">Ferrari folieren Schweiz</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Sie möchten ihr Auto folieren lassen und suchen einen fachmännischen Autofolierer in Raum Zürich, Thurgau und St.Gallen?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'Fiat-Abarth-124-Folierung']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/FiatAbarth124Folierung.jpg" alt="Fiat Abarth - 124 Folierung Zürich">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">Fiat Abarth - 124 Folierung Zürich</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Sie möchten ihr Auto folieren lassen und suchen einen fachmännischen Autofolierer in Raum Zürich, Thurgau und St.Gallen?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'Mercedes-folieren-Zürich']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/Mercedes-folieren-Zürich.jpg" alt="Mercedes folieren Zürich">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">Mercedes folieren Zürich</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Sie möchten ihr Auto folieren lassen und suchen einen fachmännischen Autofolierer in Raum Zürich, Thurgau und St.Gallen?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'Nissan-GTR-folieren-Schweiz']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/Nissan-GTR-folieren-Schweiz.jpg" alt="Nissan GTR folieren Schweiz">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">Nissan GTR folieren Schweiz</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Sie möchten ihr Auto folieren lassen und suchen einen fachmännischen Autofolierer in Raum Zürich, Thurgau und St.Gallen?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'Porsche-911-Turbo-folieren-Schweiz']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/Porsche-911-Turbo-folieren-Schweiz.jpg" alt="Porsche 911 Turbo folieren Schweiz">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">Porsche 911 Turbo folieren Schweiz</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Sie möchten ihr Auto folieren lassen und suchen einen fachmännischen Autofolierer in Raum Zürich, Thurgau und St.Gallen?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'Porsche-Lackschutzfolie-Zürich']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/Porsche-Lackschutzfolie-Zürich-.jpg" alt="Xpel Lackschutzfolie Porsche">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">Xpel Lackschutzfolie Porsche</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Wie schützt man seinen Wagen vor Kratzer und Steinschläge?</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-portfolio">
                <a href="{{ route('detail', ['slug' => 'Porsche-folieren-Schweiz']) }}">
                    <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/gallery/Porsche-folieren-Schweiz-.jpg" alt="Porsche folieren Schweiz">
                    <div class="hover-portfolio-box">
                        <div>
                            <span class="hover-portfolio-box_zag">Porsche folieren Schweiz</span>
                            <p class="hover-portfolio-box_text p-reg roboto-regular">Sie möchten ihr Auto folieren lassen und suchen einen fachmännischen Autofolierer in Raum Zürich, Thurgau und St.Gallen?</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection


@section('script-file')
    <script src="{{ mix('/js/gallery.js') }}"></script>
@endsection
