@extends('account.layouts.default')

@section('account.content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Cancel Subscription
            </div><!-- /.card-header -->

            <div class="card-body">
                <form action="{{ route('account.subscription.cancel.store') }}" method="POST">
                    @csrf

                    <div class="alert alert-warning" role="alert">
                        <i class="fas fa-frown fa-lg"></i> We 're sorry to see you go. Are you sure you want to cancel your subscription?
                    </div>

                    <button type="submit" class="btn btn-secondary">Yes, I want to cancel my subscription</button>
                    <a href="{{ route('account.index') }}" class="btn btn-success">No, I've changed my mind</a>
                </form>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div>
</div>
@endsection