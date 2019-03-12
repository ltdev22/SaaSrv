@component('mail::message')
# Cancel subscription

Hi {{ $user->name }},

We are sorry to see you go. This email is sent to you to confirm that your subscription has been canceled.

In case you 've changed your mind, or you wish to resume your subscription at some point in the future,
click this button.

@component('mail::button', ['url' => route('account.subscription.resume.index') ])
Resume my subscription
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
