@extends('layouts.app')

@section('title')
    <title>{{ $data->title }}</title>
@endsection

@section('meta')
    <meta name="keywords" content="{{ $data->keywords }}" />
    <meta name="description" content="{{ $data->meta }}" />
@endsection

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/landing.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lightgallery.min.css"
        integrity="sha512-DY7doCjzDiHKPjOIz7TBml+ZGeiORmxLdMEa8x7j+I0kuHD/vBogtvqhZCUbeCKJ8TR1slujyv9wxO4x0hbBMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <section class="slider-single-page">
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper" id="lightgallery">
                @foreach ($data->slider as $image)
                    <a href="{{ $image->src }}" class="swiper-slide activate-info-box-gallery">
                        <img src="{{ $image->src }}" alt="{{ $image->alt }}">
                    </a>
                @endforeach
            </div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </section>

    @foreach ($data->section as $sectionData)
        <section class="background-website">
            @if ($sectionData->type === 'content')
                <div class="wrapper">
                    <div class="d-flex flex-column-{{ $sectionData->content_side === 'left' ? 'reverse-1023' : '1023' }}">
                        @if ($sectionData->content_side === 'right')
                            <div
                                class="half-width-min-1023 d-flex justify-content-center align-items-center image-border-margin">
                                <img class="image-width-100" src="{{ $sectionData->image->src }}"
                                    alt="{{ $sectionData->image->alt }}" />
                            </div>
                        @endif
                        <div class="box-container half-width-min-1023">
                            <div class="header-container">
                                <h2 class="zag text-center">{!! $sectionData->header !!}</h2>
                                @isset($sectionData->sub_header)
                                    <p class="sup-light text-center">{{ $sectionData->sub_header }}</p>
                                @endisset
                            </div>
                            <hr class="underline" />
                            @if ($sectionData->content_type === 'head_body')
                                <div class="text-center">
                                    @foreach ($sectionData->content as $k => $v)
                                        @if (str_starts_with($k, 'head'))
                                            <p class="zag mb-4 heading">{{ $v }}</p>
                                        @endif
                                        @if (str_starts_with($k, 'body'))
                                            <p class="p-reg roboto-regular mb-4">{{ $v }}</p>
                                        @endif
                                        @if (str_starts_with($k, 'quote'))
                                            <p class="p-reg roboto-regular mb-4 car-wrapping-quote">{{ $v }}</p>
                                        @endif
                                    @endforeach
                                </div>
                            @elseif ($sectionData->content_type === 'list')
                                <div class="p-reg roboto-regular list-style list-center">
                                    <ul>
                                        @foreach ($sectionData->content as $k => $v)
                                            <li>✅ {{ $v }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <hr class="underline" />

                            @isset($sectionData->bottom_button)
                                <div class="div-flex">
                                    <a href="#contact" class="nice-btn plenka-modal-protection-btn custom-button-style">
                                        {{ $sectionData->bottom_button }}
                                    </a>
                                </div>
                            @endisset
                        </div>
                        @if ($sectionData->content_side === 'left')
                            <div
                                class="half-width-min-1023 d-flex justify-content-center align-items-center image-border-margin">
                                <img class="image-width-100" src="{{ $sectionData->image->src }}"
                                    alt="{{ $sectionData->image->alt }}" />
                            </div>
                        @endif
                    </div>
                </div>
            @elseif ($sectionData->type === 'slider')
                <div class="section-main-garant custom-slider-style">
                    <div class="slick-slider">
                        @foreach ($sectionData->images as $v)
                            <div>
                                <a href="{{ $v->url }}" target="_blank" rel="nofollow">
                                    <img src="{{ $v->src }}" alt="{{ $v->alt }}" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </section>
    @endforeach

    @include('partials.contactForm')
@endsection

@section('script-file')
    <script src="{{ mix('/js/landing.js') }}"></script>
@endsection
