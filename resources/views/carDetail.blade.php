@extends('layouts.app')

@section('title', $data->title)

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
                    <span property="name" class="post post-post current-item">{{ $data->title }}</span>
                </span>
            </div>
            <div class="title-single-page">{{ $data->title }}</div>

            <div class="content-single-page">
                <div class=" p-reg roboto-regular">
                    @foreach ($data->content as $text)
                        <div class="mt-10">
                            <div dir="auto"> {{ $text }} </div>
                        </div>
                    @endforeach

                    <div class="share-box-single-news d-flex justify-content-space-between contact-margin">
                        <button class="contact-button" onclick="openContactModal()">Preise einholen</button>
                        <div>
                            <a href="https://www.facebook.com/folientechnikschweiz" target="_blank" rel="nofollow"
                                class="inline-block">
                                <i class="fa fa-facebook facebook-awesome-social social-icon"></i>
                            </a>

                            <a href="https://www.instagram.com/folientechnik_schweiz" target="_blank" rel="nofollow"
                                class="inline-block">
                                <i class="fa fa-instagram instagram-awesome-social social-icon"></i>
                            </a>

                            <a href="https://wa.me/41764900780" target="_blank" rel="nofollow" class="inline-block">
                                <i class="fa fa-whatsapp whatsapp-awesome-social social-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="share-box-single-news contact-margin">
                <div class=" p-reg roboto-regular">
                <div class="mt-10">
                    <p>{{ $data->hashtag }}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script-file')
    <script src="{{ mix('/js/car_detail.js') }}"></script>
@endsection
