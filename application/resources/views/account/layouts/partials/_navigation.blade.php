<ul class="nav nav-pills nav-fill flex-column">
    <li class="nav-item">
        <a href="{{ route('account.index') }}" class="nav-link{{ isActive('account') }}">Account overview</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('account.profile.index') }}" class="nav-link{{ isActive('account/profile') }}">Profile</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('account.password.index') }}" class="nav-link{{ isActive('account/password') }}">Change Password</a>
    </li>
</ul>