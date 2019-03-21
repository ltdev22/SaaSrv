@component('mail::message')
# Your account is deactivated

Hi {{ $user->name }},

We are really sorry to see you go. This email is sent as a confirmation that your account
has been deactivated and you 'll have no longer access to our services.

 However if you change your mind in the future and you wish to activate your account again, click the button bellow.
 If this action wasn't performed by you please contact our support service or send an email to support@saasrv.dev

@component('mail::button', ['url' => ''])
I want to activate again my account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
