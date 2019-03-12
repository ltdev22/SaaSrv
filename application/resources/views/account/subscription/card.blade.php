@extends('account.layouts.default')

@section('account.content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Update Card
            </div><!-- /.card-header -->

            <div class="card-body">
                <form action="{{ route('account.subscription.card.store') }}" method="POST" id="update-card-form">
                    @csrf

                    <div class="alert alert-info">
                        <i class="fas fa-info-circle fa-lg"></i> Your cand will be user for future payments.
                    </div>

                    <button class="btn btn-primary" id="update-card-btn">Update my card</button>
                </form>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
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
            let paymentForm = $('#update-card-form');
            $('#update-card-btn').prop('disabled', true);
            $('<input>').attr({
                type: 'hidden',
                name: 'token',
                value: token.id
            }).appendTo(paymentForm);

            paymentForm.submit();
        }
    });

    $('#update-card-btn').click(function (e) {
        e.preventDefault();
        handler.open({
            name: 'SaaSrv',
            currency: 'eur',
            key: '{{ config('services.stripe.key') }}',
            email: '{{ auth()->user()->email }}',
            panelLabel: 'Update my payment card'
        });
    });
</script>
@endsection