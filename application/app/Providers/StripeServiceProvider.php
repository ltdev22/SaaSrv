<?php

namespace SaaSrv\Providers;

use Illuminate\Support\ServiceProvider;
use Stripe\Stripe;
use Laravel\Cashier\Cashier;

class StripeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Stripe::setApiKey(
            config('services.stripe.secret')
        );

        Cashier::useCurrency('eur', '€');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
