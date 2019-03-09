@if(session()->has('success'))
    @component('layouts.partials.alerts._alert_component', ['type' => 'success', 'icon' => 'check-circle'])
        {{ session('success') }}
    @endcomponent
@endif

@if(session()->has('error'))
    @component('layouts.partials.alerts._alert_component', ['type' => 'danger', 'icon' => 'exclamation-circle'])
        {{ session('error') }}
    @endcomponent
@endif