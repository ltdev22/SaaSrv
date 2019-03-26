<ul class="nav nav-pills nav-fill flex-column">
    <li class="nav-item">
        <a href="{{ route('admin.index') }}" class="nav-link{{ isActive('administrator') }}">Administrator</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.impersonate.index') }}" class="nav-link{{ isActive('administrator/impersonate') }}">Impersonate a User</a>
    </li>
</ul>
