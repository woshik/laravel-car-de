@extends('layouts.app')

@section('title')
    <title>Thank you | Folientechnik Schweiz</title>
@endsection

@section('meta')
    <link rel="canonical" href="https://www.folientechnik-schweiz.ch/thank-you">
    <meta name=”robots” content=”noindex, follow”>
    <meta name="keywords" content="folientechnik schweiz thank you" />
    <meta name="description" content="Folientechnik Schweiz Thank you Page" />
@endsection

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/thank_you.css') }}">
@endsection

@section('content')
    <div class="thank-you">
        <h1>Thank you.</h1>
        
        <p>You will receive an email from us</p>
        <div class="back-to-home">
            <a href="{{ route('home') }}">
                <span class="icon">
                    <svg class="c-404-button-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 341.333 341.333">
                        <path d="M341.333 149.333H81.707L200.853 30.187 170.667 0 0 170.667l170.667 170.666 30.186-30.186L81.707 192h259.626z"></path>
                    </svg>
                </span>
                
                <span class="text">Back Home</span>
            </a>
        </div>
    </div>
@endsection


@section('script-file')
    <script src="https://cdn.jsdelivr.net/npm/vivus@0.4.6/dist/vivus.min.js"></script>
    <script src="{{ mix('/js/thank_you.js') }}"></script>
@endsection
