@component('mail::message')

Thanks for browsing my website.

@component('mail::button', ['url' => config('app.url')])
Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
