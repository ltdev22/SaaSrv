@component('mail::message')
# Your account is deactivated

Hi {{ $user->name }},

We are really sorry to see you go. This email is sent as a confirmation that your account
has been deactivated and you 'll have no longer access to our services.

 However if you change your mind in the future and you wish to activate your account again, or 
 if this action wasn't performed by you please contact our support service or send an email to 
 <a href="mailto:support@saasrv.dev">support@saasrv.dev</a> with your request.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
