@extends('layouts.app')

@section('title')
    <title>Services</title>
@endsection

@section('style-file')
    <link rel="canonical" href="https://folientechnik-schweiz.ch/services">
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
