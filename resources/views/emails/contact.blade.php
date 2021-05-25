@component('mail::message')
# The simple things are the best!

Ex elit minim fugiat ex Lorem nulla tempor non incididunt ullamco culpa.

@component('mail::button', ['url' => 'https://www.laracast.com'])
Click Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
