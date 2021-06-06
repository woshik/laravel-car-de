@extends('layouts.app')

@section('title', 'Tuning Workshop')

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
