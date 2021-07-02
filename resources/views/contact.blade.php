@extends('layouts.app')

@section('title', 'Kontakt')

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/contact.css') }}">
@endsection

@section('content')
<div class="background-website">
   <div class="contact-wrapper">
      <div class="modal-content-form">
         <div class="title-modal skin-title-protection">Kontakt Formular</div>
         <div role="form" class="wpcf7" id="wpcf7-f3638-o2" lang="ru-RU" dir="ltr">
            @include('partials.contactForm')
         </div>
      </div>
   </div>
 </div>
 @include('partials.footer')
@endsection

@section('footer')
@endsection


@section('script-file')
    <script src="{{ mix('/js/contact.js') }}"></script>
@endsection
