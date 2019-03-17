@extends('account.layouts.default')

@section('account.content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Account Overview
            </div><!-- /.panel-heading -->

            <div class="card-body">
                {{ auth()->user()->plan() }}
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
</div>
@endsection
