@extends('account.layouts.default')

@section('account.content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Cancel Subscription
            </div><!-- /.card-header -->

            <div class="card-body">
                <form action="#" method="POST">
                    @csrf
                </form>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div>
</div>
@endsection