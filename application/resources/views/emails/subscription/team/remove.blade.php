@component('mail::message')
# Your account has been removed from team plan

Hi {{ $user->name }},

Your account has been removed from the team plan you were in.

If you still want to use our service, please go to your account and choose one of the member subscription plans instead.

@component('mail::button', ['url' => route('account.index') ])
My Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
