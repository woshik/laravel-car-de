@component('mail::message')

Gratulation!!! Ihr Anfrage wurde gesendet. In der Regel erhalten Sie eine Antwort binnen 48 Stunden, sollte das ihnen zu lange gehen rufen Sie uns an. +41522428364

@component('mail::button', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent

Vielen Dank,<br>
{{ config('app.name') }} Team
@endcomponent
