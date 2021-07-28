@extends('layouts.app')

@section('title', $name)

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/car_detail.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lightgallery.min.css" integrity="sha512-DY7doCjzDiHKPjOIz7TBml+ZGeiORmxLdMEa8x7j+I0kuHD/vBogtvqhZCUbeCKJ8TR1slujyv9wxO4x0hbBMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="single-page-gallery">
        <div class="slider-single-page">
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper" id="lightgallery">
                    <a href="https://southart.com.ua/wp-content/uploads/Bezymjannyi1-81-1620x1080.jpg"
                        class="swiper-slide activate-info-box-gallery">
                        <img src="https://southart.com.ua/wp-content/uploads/Bezymjannyi1-81-1620x1080.jpg" alt="">
                    </a>
                    <a href="https://southart.com.ua/wp-content/uploads/Bezymjannyi2-82-1620x1080.jpg"
                        class="swiper-slide activate-info-box-gallery">
                        <img src="https://southart.com.ua/wp-content/uploads/Bezymjannyi2-82-1620x1080.jpg" alt="">
                    </a>
                    <a href="https://southart.com.ua/wp-content/uploads/Bezymjannyi3-66-1620x1080.jpg"
                        class="swiper-slide activate-info-box-gallery">
                        <img src="https://southart.com.ua/wp-content/uploads/Bezymjannyi3-66-1620x1080.jpg" alt="">
                    </a>
                    <a href="https://southart.com.ua/wp-content/uploads/Bezymjannyi4-51-1620x1080.jpg"
                        class="swiper-slide activate-info-box-gallery">
                        <img src="https://southart.com.ua/wp-content/uploads/Bezymjannyi4-51-1620x1080.jpg" alt="">
                    </a>
                    <a href="https://southart.com.ua/wp-content/uploads/Bezymjannyi5-36-1620x1080.jpg"
                        class="swiper-slide activate-info-box-gallery">
                        <img src="https://southart.com.ua/wp-content/uploads/Bezymjannyi5-36-1620x1080.jpg" alt="">
                    </a>
                </div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
        </div>
        <div class="wrapper">
            <div class="h5 page-breadcrumb sup-light text-center">
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to AUTO FOLIEREN." href="{{ route('home') }}"
                        class="home">
                        <span property="name">AUTO FOLIEREN</span>
                    </a>
                </span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <span property="name" class="post post-post current-item">{{ $name }}</span>
                </span>
            </div>
            <div class="title-single-page">{{ $name }}</div>
            <div class="scroll scroll-single-gallery"><span></span></div>
            <div class="content-single-page">
                <div class=" p-reg roboto-regular content-box-gallery">
                    <div class="kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q">
                        <div dir="auto">
                            Мы часто встречаем вопрос: «как выглядит матовая поверхность автомобиля в
                            тёмное время суток». Точно так же, как и днём – превосходно.
                        </div>
                    </div>
                    <div class="o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q">
                        <div dir="auto">
                            Матовая поверхность поглощает свет вокруг, даже его небольшие блики в тёмное
                            время. Автомобиль в такой плёнке визуально становится неотъемлемой частью пространства.
                            Но частью с бликами света. Множество световых переходов привлекают внимание к
                            автомобилю.
                        </div>
                    </div>
                    <div class="o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q">
                        <div dir="auto">
                            Матовая поверхность меняет оттенки в зависимости от изгибов и углов. Она
                            завораживает, завлекает. Заставляет остановиться и задержать взгляд на себе.
                        </div>
                    </div>
                    <div class="o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q">
                        <div dir="auto">
                            Специально для ответа на вопрос «как выглядит матовая поверхность в тёмное
                            время?» мы сделали эту фотосессию. Мы хотим наглядно продемонстрировать прелести
                            подобных фактур.
                        </div>
                    </div>
                    <div class="o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q">
                        <div dir="auto">Mercedes G-Class в свете вечернего города – приятного просмотра.</div>
                    </div>


                    <div class="share-box-single-news">
                        <button class="blue-form-btn zadat-vopros-modal-form-btn" onclick="openContactModal()">KONTAKT
                            ANFORDERN</button>
                        <div class="share-icon-single-page">
                            <a href="https://www.facebook.com/folientechnikschweiz" target="_blank" rel="nofollow">
                                <i class="facebook">FACEBOOK</i>
                            </a>
                            <a href="https://www.instagram.com/folientechnik_schweiz" target="_blank" rel="nofollow">
                                <i class="twitter">instagram</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script-file')
    <script src="{{ mix('/js/car_detail.js') }}"></script>
@endsection
