@component('mail::message')

Gratulation!!! <br />

<p>
    Name: {{ $name }}
</p>
<p>
    Email: {{ $email }}
</p>
<p>
    Mobile Number: {{ $telephone }}
</p>
<p>
    Address: {{ $address }}
</p>
<p>
    Message: {{ $message }}
</p>

@component('mail::button', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent

Vielen Dank,<br />
{{ config('app.name') }} Team <br />
Grosswisstrasse 7<br />
8548 Ellikon an der Thur
@endcomponent
