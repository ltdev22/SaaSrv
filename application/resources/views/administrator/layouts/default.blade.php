@extends('layouts.app')

@section('content')
<div class="row administrator-wrapper">
    <aside class="col-md-3 administrator-navigation">
        @include('administrator.layouts.partials._navigation')
    </aside><!-- /.administrator-navigation -->
    <section class="col-md-9 administrator-content">
        @yield('administrator.content')
    </section><!-- /.administrator-content -->
</div><!-- /.administrator-wrapper -->
@endsection
