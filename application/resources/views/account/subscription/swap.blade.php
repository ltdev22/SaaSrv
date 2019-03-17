@extends('account.layouts.default')

@section('account.content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Swap Plan
            </div><!-- /.card-header -->

            <div class="card-body">
                <div class="alert alert-info">
                    Your current plan is: <strong>{{ $current_plan->title }} (${{$current_plan->price}})</strong>
                </div>

                <form action="{{ route('account.subscription.swap.update') }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="plan">Plan</label>
                        <select name="plan" class="form-control{{ $errors->has('plan') ? ' is-invalid' : '' }}" id="plan">
                            @foreach($plans as $plan)
                                <option value="{{ $plan->gateway_id }}"{{ old('plan') === $plan->gateway_id ? ' selected="selected"' : '' }}>
                                    {{ $plan->title }} (${{ $plan->price }})
                                </option>
                            @endforeach
                        </select>
                        @if($errors->has('plan'))
                            <div class="invalid-feedback">{{ $errors->first('plan') }}</div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Change plan</button>
                </form>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div>
</div>
@endsection