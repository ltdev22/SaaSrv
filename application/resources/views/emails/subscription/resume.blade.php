@component('mail::message')
# Resume subscription

Hi {{ $user->name }},

We are glad to see you back! This email is sent to you to confirm that your subscription has been resumed.

To view the details you can click this button.

@component('mail::button', ['url' => route('account.index') ])
View my subscription
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
