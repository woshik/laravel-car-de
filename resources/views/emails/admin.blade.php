@component('mail::message')
# Introduction

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
Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
