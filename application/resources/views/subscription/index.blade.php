@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Subscription
            </div><!-- /.panel-heading -->

            <div class="card-body">
                <form action="{{ route('subscription.store') }}" method="post" class="form-horizontal" id="payment-form">
                    @csrf

                    <div class="form-group row">
                        <label for="plan" class="col-sm-2 col-form-label">Plan</label>
                        <div class="col-sm-10">
                            <select name="plan" id="plan" class="form-control{{ $errors->has('plan') ? ' is-invalid' : '' }}">
                                @foreach($plans as $plan)
                                    <option value="{{ $plan->gateway_id }}"{{ (request('plan') === $plan->slug || old('plan') === $plan->gateway_id) ? ' selected="selected"' : '' }}>
                                        {{ $plan->title }} (&euro;{{ $plan->price }})
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
                            <button type="submit" class="btn btn-primary" id="pay-btn">
                                Pay
                            </button>
                        </div>
                    </div>
                </form>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
</div>

@endsection

@section('scripts')
<script src="https://checkout.stripe.com/checkout.js"></script>
<script>
    let handler = StripeCheckout.configure({
        key: '{{ config('services.stripe.key') }}',
        locale: 'auto',
        token: function (token) {
            // check from console.log for a token.id ( tok_######## )
            // and add it to the hidden input we generate below
            //console.log(token);
            let paymentForm = $('#payment-form');
            $('#pay-btn').prop('disabled', true);
            $('<input>').attr({
                type: 'hidden',
                name: 'token',
                value: token.id
            }).appendTo(paymentForm);

            paymentForm.submit();
        }
    });

    $('#pay-btn').click(function (e) {
        e.preventDefault();
        handler.open({
            name: 'SaaSrv',
            description: 'Membership',
            currency: 'eur',
            key: '{{ config('services.stripe.key') }}',
            email: '{{ auth()->user()->email }}'
        });
    });
</script>
@endsection