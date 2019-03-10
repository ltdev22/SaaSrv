@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Subscription
            </div><!-- /.panel-heading -->

            <div class="card-body">
                <form action="" method="post" class="form-horizontal" id="payment-form">
                    @csrf

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Plan</label>
                        <div class="col-sm-10">
                            <select name="plan" id="plan" class="form-control">
                                @foreach($plans as $plan)
                                    <option value="{{ $plan->gateway_id }}"{{ (request('plan') === $plan->slug || old('plan') === $plan->gateway_id) ? ' selected="selected"' : '' }}>
                                        {{ $plan->title }} (${{ $plan->price }})
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('plan'))
                                <div class="invalid-feedback">{{ $errors->first('plan') }}</div>
                            @endif
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="coupon" class="col-sm-2 col-form-label">Coupon</label>
                        <div class="col-sm-10">
                            <input type="text" name="coupon" id="coupon" value="{{ old('coupon') }}" class="form-control{{ $errors->has('coupon') ? ' is-invalid' : '' }}">
                            @if($errors->has('coupon'))
                                <div class="invalid-feedback">{{ $errors->first('coupon') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
</div>

@endsection