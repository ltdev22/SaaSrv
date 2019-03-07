@extends('layouts.app')

@section('content')
<div class="row account-wrapper">
    <div class="col-md-3 account-navigation">
        @include('account.layouts.partials._navigation')
    </div><!-- /.account-navigation -->
    <div class="col-md-9 account-content">
        @include('layouts.partials.alerts._alerts')
        @yield('account.content')
    </div><!-- /.account-content -->
</div><!-- /.account-wrapper -->
@endsection
