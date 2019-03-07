@component('mail::message')
# Your password has been updated

Hi {{ $user->name }},

We 'd like to inform you that your password has been updated.

If this action wasn't done by you please contact our support department.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
