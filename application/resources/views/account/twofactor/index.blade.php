@extends('account.layouts.default')

@section('account.content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Two Factor Authentication
            </div><!-- /.panel-heading -->

            <div class="card-body">
                @if( auth()->user()->hashasTwoFactorEnabled() )
                    @include('account.twofactor.partials._disable_two_factor')
                @else
                    @if( auth()->user()->hasTwoFactorPendingVerification() )
                        @include('account.twofactor.partials._pending_verification')
                    @else
                        @include('account.twofactor.partials._new_registry')
                    @endif
                @endif
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
</div>
@endsection