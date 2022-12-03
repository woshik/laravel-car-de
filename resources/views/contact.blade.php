@extends('layouts.app')

@section('title')
    <title>Kontakt | Folientechnik Schweiz</title>
@endsection

@section('meta')
    <link rel="canonical" href="https://www.folientechnik-schweiz.ch/kontakt">
    <meta name="keywords" content="folientechnik schweiz contact" />
    <meta name="description" content="Contact with Folientechnik Schweiz" />
@endsection

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/contact.css') }}">
@endsection

@section('content')
    @include('partials.contactForm')
@endsection

@section('script-file')
    <script src="{{ mix('/js/contact.js') }}"></script>
@endsection
