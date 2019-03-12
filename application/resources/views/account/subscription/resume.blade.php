@extends('account.layouts.default')

@section('account.content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Resume Subscription
            </div><!-- /.card-header -->

            <div class="card-body">
                <form action="{{ route('account.subscription.resume.store') }}" method="POST">
                    @csrf

                    <div class="alert alert-secondary" role="alert">
                        I've changed my mind. I want to resume my subscription.
                    </div>

                    <button type="submit" class="btn btn-primary">Resume my subscription</button>
                </form>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div>
</div>
@endsection