@extends('layouts.app')

@section('title', 'Tuning Workshop')

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/contact.css') }}">
@endsection

@section('content')
<div class="background-website">
   <div class="contact-wrapper">
      <div class="modal-content-form">
         <div class="title-modal skin-title-protection">Kontakt Formular</div>
         <div role="form" class="wpcf7" id="wpcf7-f3638-o2" lang="ru-RU" dir="ltr">

            <form class="wpcf7-form">
               <div class="form-field-row">
                  <div class="row-2-modal">
                     <input type="text" name="your-name" value="" size="40"
                        class="wpcf7-text wpcf7-validates-as-required input-form" id="name"
                        aria-required="true" aria-invalid="false" placeholder="&nbsp;">
                     <label for="name" class="label-form">Name</label>
                  </div>
                  <div class="row-2-modal">
                     <input type="tel" name="tel-178" value="" size="40"
                        class="wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-form"
                        id="tel" aria-required="true" aria-invalid="false" placeholder="&nbsp;" maxlength="19">
                     <label for="tel" class="label-form">
                        eMail
                     </label>
                  </div>
               </div>

               <div class="form-field-row">
                  <div class="row-2-modal">
                     <input type="text" name="your-name" value="" size="40"
                        class="wpcf7-text wpcf7-validates-as-required input-form" id="name"
                        aria-required="true" aria-invalid="false" placeholder="&nbsp;">
                     <label for="name" class="label-form">Telefon</label>
                  </div>
                  <div class="row-2-modal">
                     <input type="tel" name="tel-178" value="" size="40"
                        class="wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-form"
                        id="tel" aria-required="true" aria-invalid="false" placeholder="&nbsp;" maxlength="19">
                     <label for="tel" class="label-form">
                        Adresse
                     </label>
                  </div>
               </div>

               <div class="textarea-box">
                  <textarea name="textarea-330" cols="40" rows="10"
                     class="wpcf7-textarea input-form" id="textarea" aria-invalid="false"
                     placeholder="&nbsp;"></textarea>
                  <label for="textarea" class="label-form">
                     Beschreibung
                  </label>
               </div>
               <div class="element-center">
                  <input type="submit" value="Nachricht absenden" class="contact-submit-button">
               </div>
            </form>
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
