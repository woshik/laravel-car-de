@extends('layouts.app')

@section('title')
    <title>Services | Folientechnik Schweiz</title>
@endsection

@section('meta')
    <link rel="canonical" href="https://www.folientechnik-schweiz.ch/services">
    <meta name="keywords" content="folientechnik schweiz services" />
    <meta name="description"
        content="Auto folieren in der Schweiz ✔️ schützende Lackschutzfolien ✔️ Car Wrapping bei einem erfahrenen Team ✔️ Scheiben tönen an ihrem Fahrzeug ✔️ Folientechnik Schweiz" />
@endsection

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/services.css') }}">
@endsection

@section('content')
    <div class="background-website padding-bottom-0">
        @include('partials.services')
    </div>
@endsection

@section('script-file')
    <script src="{{ mix('/js/services.js') }}"></script>
@endsection
