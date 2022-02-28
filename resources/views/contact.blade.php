@extends('layouts.app')

@section('title', 'Kontakt')

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/contact.css') }}">
@endsection

@section('content')
@include('partials.contactForm')
@endsection

@section('footer')
@endsection


@section('script-file')
    <script src="{{ mix('/js/contact.js') }}"></script>
@endsection
