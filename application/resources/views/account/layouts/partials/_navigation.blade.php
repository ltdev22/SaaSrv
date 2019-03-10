<ul class="nav nav-pills nav-fill flex-column">
    <li class="nav-item">
        <a href="{{ route('account.index') }}" class="nav-link{{ isActive('account') }}">Account Overview</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('account.profile.index') }}" class="nav-link{{ isActive('account/profile') }}">Profile</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('account.password.index') }}" class="nav-link{{ isActive('account/password') }}">Change Password</a>
    </li>
</ul>

<hr>

@subscribed
    <ul class="nav nav-pills nav-fill flex-column">
        @subscriptionNotCancelled
            <li class="nav-item">
                <a href="{{ route('account.subscription.swap.index') }}" class="nav-link">Change Plan</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('account.subscription.cancel.index') }}" class="nav-link">Cancel Subscription</a>
            </li>
        @endsubscriptionNotCancelled

        @subscriptionCancelled
            <li class="nav-item">
                <a href="{{ route('account.subscription.resume.index') }}" class="nav-link">Resume Subscription</a>
            </li>
        @endsubscriptionCancelled

        <li class="nav-item">
            <a href="{{ route('account.subscription.card.index') }}" class="nav-link">Update Card</a>
        </li>
    </ul>
@endsubscribed
