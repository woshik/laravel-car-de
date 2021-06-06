@extends('layouts.app')

@section('title', 'Tuning Workshop')

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/contact.css') }}">
@endsection

@section('content')
<div class="background-website">
    <section class="contacts-maps contact-page-footer">
       <div class="wrapper">
          <div class="head-contacts-section">
             <div class="row-2-contact">
                <h2 class="zag">CONTACTS</h2>
             </div>
             <div class="row-2-contact">
                <div class="row-3-contact">
                   <h5 class="sup-bold-Italic">Call</h5>
                   <a href="tel:+380996103202" class="link-footer binct-phone-number-2">+38 (###) ### ###</a>
                </div>
                <div class="row-3-contact">
                   <h5 class="sup-bold-Italic">WRITE</h5>
                   <span class="email-click link-check" id="tracker-email">
                      <p>office@office.com</p>
                   </span>
                </div>
                <div class="row-3-contact">
                   <h5 class="sup-bold-Italic">Come</h5>
                   <span class="adress-click link-check" id="tracker-adress">
                      <p>Kiev, Sof.</p>
                      <p>Borschagovka</p>
                   </span>
                </div>
             </div>
          </div>
       </div>
       <div class="map-contacts" style="position: relative; overflow: hidden;"></div>
       <div class="contact-form-maps">
          <div class="wrapper">
             <div class="div-maps-form">
                <h2 class="zag">Get a free consultation</h2>
                <div role="form" class="wpcf7" id="wpcf7-f803-o1" dir="ltr" lang="ru-RU">
                   <div class="screen-reader-response"></div>
                   <form action="/contacts/#wpcf7-f803-o1" method="post" class="wpcf7-form"
                      novalidate="novalidate">
                      <div style="display: none;">
                         <input type="hidden" name="_wpcf7" value="803">
                         <input type="hidden" name="_wpcf7_version" value="5.1">
                         <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                         <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f803-o1">
                         <input type="hidden" name="_wpcf7_container_post" value="0">
                         <input type="hidden" name="g-recaptcha-response"
                            value="03AGdBq27FRQo-v2-f87lVdT99x3gduITOolNkAf4rcFR_L2MEHunERCEgXVxXiukyWaMV5RE43U3ahtVyJb8ThLSouk-aNlYLPy7JX73WstfuxlwmGz29v6poREKNEnI0c3fD43F-lVYAeS88k5KnTuPLDeuA14lHKHZlwcPE_Vcaeq0CgBjm48vharscoUUCIgbHwRN6rwdsgCQjaIUBh_98hVarcbQ2Yfac6AWRbDwmnndt-FgT9PdxZRI8JgK2HbMH85vdoDIwkGk7eL8N8mXsJTShVxWntfGl0frrVB8MBgY0JA62cicM2poNI7I7fNFC01Hp75FTkE7fLYPdhxzL1KqulskyWcKv2WIlgylsGESt55fgob6rna4SmiifkArjNqpt93nJ1KTJK8O-04jiTOX87DO8QbO5YDTPML_d_s9E7jraVMBqL4SyF_cpsUuuY4ebsy2d">
                      </div>
                      <div class="row-2-modal"><input type="text" name="your-name" value="" size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-form" id="name"
                            aria-required="true" aria-invalid="false" placeholder="&nbsp;"><label for="name"
                            class="label-form">Name</label></div>
                      <div class="row-2-modal"><input type="tel" name="tel-178" value="" size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-form"
                            id="tel" aria-required="true" aria-invalid="false" placeholder="&nbsp;" maxlength="19">
                         <label for="tel" class="label-form">Telephone</label>
                      </div>
                      <div class="textarea-box"><textarea name="textarea-330" cols="40" rows="10"
                            class="wpcf7-form-control wpcf7-textarea input-form" id="textarea" aria-invalid="false"
                            placeholder="&nbsp;"></textarea><label for="textarea" class="label-form">Ваш
                            вопрос</label></div>
                      <p><input type="submit" value="Send message" class="wpcf7-form-control wpcf7-submit"><span
                            class="ajax-loader"></span></p>
                      <div class="wpcf7-response-output wpcf7-display-none"></div>
                   </form>
                </div>
             </div>
          </div>
       </div>
       <div class="wrapper">
          <div class="cop-box">
             <div class="left-cop">
                <span>© 2020 Folientechnik Schweiz. All rights reserved</span>
             </div>
             <div class="right-cop">
                <a href="https://yo.ua" target="_blank" class="dev">
                   <svg xmlns="https://www.w3.org/2000/svg" viewbox="0 0 191.9 10.08">
                      <defs> </defs>
                      <g id="Layer_2" data-name="Layer 2">
                         <g id="Layer_2-2" data-name="Layer 2">
                            <g id="yo-group">
                               <path id="yo"
                                  d="M6.2.23H8.7L5.4,6.13v3.7H3.2V6.13L0,.23H2.5l1.8,3.7Zm11.4,1.2A4.75,4.75,0,0,1,19.1,5a5.08,5.08,0,0,1-1.5,3.6A4.6,4.6,0,0,1,14.1,10a5,5,0,0,1-3.5-1.4A4.69,4.69,0,0,1,9.1,5a5.08,5.08,0,0,1,1.5-3.6A4.83,4.83,0,0,1,14.1,0,5,5,0,0,1,17.6,1.43ZM16.9,5a3.23,3.23,0,0,0-.8-2.1,2.9,2.9,0,0,0-4,0A3,3,0,0,0,11.3,5a3.23,3.23,0,0,0,.8,2.1,2.9,2.9,0,0,0,4,0A3.23,3.23,0,0,0,16.9,5Zm5.5,2.3a1.57,1.57,0,0,0-2.2,0,1.69,1.69,0,0,0,0,2.3,1.69,1.69,0,0,0,2.3,0A1.81,1.81,0,0,0,22.4,7.33Z">
                               </path>
                               <path id="text"
                                  d="M24.1.23H28a4.37,4.37,0,0,1,3.3,1.4A4.3,4.3,0,0,1,32.6,5a5.08,5.08,0,0,1-1.3,3.39A4.71,4.71,0,0,1,28,9.82H24.1Zm2.3,7.5H28A2.41,2.41,0,0,0,29.8,7a2.49,2.49,0,0,0,.7-2,2.64,2.64,0,0,0-.7-1.9,2.09,2.09,0,0,0-1.8-.7H26.4Zm7.5,2.1V.23h2.2v9.6Zm8.6-5.3h4.8v.8A4.65,4.65,0,0,1,46,8.83a5.64,5.64,0,0,1-7.2-.2A4.75,4.75,0,0,1,37.3,5a5,5,0,0,1,9.2-2.8l-1.8,1.1a2.59,2.59,0,0,0-2.3-1.1,2.78,2.78,0,0,0-2.8,2.7v.2a2.79,2.79,0,0,0,.8,2,3.49,3.49,0,0,0,2.2.8,2.5,2.5,0,0,0,2.5-1.4H42.6v-2Zm6,5.3V.23h2.2v9.6ZM51.7.23h7.1v2.1H56.3v7.5H54.1V2.33H51.6V.23Zm16.6,9.6H65.9l-.5-1.5H61.8l-.5,1.5H58.9L62.2.23H65Zm-4.7-7.1-1.1,3.5h2.3ZM71.3.23v7.5h3.4V9.82H69.1V.23ZM83.9,10a4.91,4.91,0,0,1-5-4.8V5a4.91,4.91,0,0,1,4.8-5h.2a4.91,4.91,0,0,1,4.2,2.4l-.8.5A3.86,3.86,0,0,0,84,1a4.36,4.36,0,0,0-2.9,1.1A4,4,0,0,0,79.9,5a4,4,0,0,0,1.2,2.9A3.93,3.93,0,0,0,83.9,9a3.74,3.74,0,0,0,3.3-1.9l.8.5A4.63,4.63,0,0,1,83.9,10Zm13.7-1.5a5.05,5.05,0,0,1-7.1-.11,5,5,0,0,1-1.4-3.5,5,5,0,0,1,1.4-3.5,5.15,5.15,0,0,1,7.1,0A5.47,5.47,0,0,1,99,5,5,5,0,0,1,97.6,8.53Zm-6.4-.6a4,4,0,0,0,5.7,0A4,4,0,0,0,98.1,5a4,4,0,0,0-1.2-2.9A4.07,4.07,0,0,0,91.2,2l-.1.1a3.83,3.83,0,0,0-1,2.9A3.56,3.56,0,0,0,91.2,7.93ZM108.3.23h1.2v9.6h-1V1.73l-3.4,5.6H105l-3.4-5.6V9.92h-1V.23h1.2l3.2,5.4Zm11,0h1.2v9.6h-1V1.73l-3.4,5.6H116l-3.4-5.6V9.92h-1V.23h1.2l3.2,5.4Zm3.2,6.3V.23h1v6.3a2.6,2.6,0,1,0,5.2,0V.23h1v6.3a3.47,3.47,0,0,1-1,2.5,4,4,0,0,1-5.2,0,3.57,3.57,0,0,1-1-2.5ZM137.9,8V.23h1v9.6h-.8L132.7,2v7.8h-1V.23h.8Zm3.2,1.8V.23h1v9.6Zm7.6.2a4.91,4.91,0,0,1-5-4.8V5a4.91,4.91,0,0,1,4.8-5h.2a4.91,4.91,0,0,1,4.2,2.4l-.9.4A3.76,3.76,0,0,0,148.7,1a3.85,3.85,0,0,0-2.9,1.2A4.3,4.3,0,0,0,144.7,5a4.36,4.36,0,0,0,1.1,2.9A3.56,3.56,0,0,0,148.7,9a3.74,3.74,0,0,0,3.3-1.9l.9.5a4.91,4.91,0,0,1-4.2,2.4Zm13.2-.2h-1l-.9-2.3h-4.6l-.9,2.39h-1l3.6-9.6h1Zm-4.2-8.4-1.9,5.2h3.9Zm4.6-1.2h6.9v.9h-2.9v8.7h-1V1.13h-3Zm8.2,9.6V.23h1v9.6Zm11.2-1.3a5.15,5.15,0,0,1-7.1,0A4.6,4.6,0,0,1,173.2,5a5,5,0,0,1,1.4-3.5,5.13,5.13,0,0,1,7.1,0A4.6,4.6,0,0,1,183.1,5a5,5,0,0,1-1.4,3.5Zm-6.4-.6a4,4,0,0,0,5.7,0A3.91,3.91,0,0,0,182.1,5a4.36,4.36,0,0,0-1.1-2.9,4,4,0,0,0-5.7,0A4,4,0,0,0,174.1,5a4,4,0,0,0,1.2,2.9Zm15.6.1V.23h1v9.6h-.8L185.7,2v7.8h-1V.23h.8Z">
                               </path>
                            </g>
                         </g>
                      </g>
                   </svg>
                </a>
             </div>
          </div>
       </div>
    </section>
 </div>
@endsection


@section('script-file')
    <script src="{{ mix('/js/contact.js') }}"></script>
@endsection
