@extends('layouts.app')

@section('content')

@include('subscription.plans.partials._header')

<div class="card-deck mb-3 text-center">
    @foreach($plans as $plan)
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">{{ $plan->title }}</h4>
            </div><!-- /.card-header -->
            <div class="card-body">
                <h2 class="card-title pricing-card-title">
                    ${{ $plan->price }} <!-- <small class="text-muted">/ mo</small> -->
                </h2>
                <ul class="list-unstyled mt-3 mb-4">
                    @foreach($plan->information as $info)
                        <li>{{ $info }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('subscription.index', ['plan' => $plan->slug]) }}" class="btn btn-lg btn-block btn-outline-primary">
                    Sign up for this
                </a>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    @endforeach
</div><!-- /.card-deck -->
@endsection
