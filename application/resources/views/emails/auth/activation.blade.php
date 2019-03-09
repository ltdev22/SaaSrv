@component('mail::message')
# Activate your account

Hi {{ $user->name }},

Thank you for signing up and welcome to {{ config('app.name') }}!

In order to get benefit from our services you will need to activate your account 
simply by clicking the button bellow.

@component('mail::button', ['url' => route('activation.activate', $token)])
Activate
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent