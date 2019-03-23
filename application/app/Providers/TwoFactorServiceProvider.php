<?php

namespace SaaSrv\Providers;

use Illuminate\Support\ServiceProvider;
use SaaSrv\TwoFactor\TwoFactorInterface;
use SaaSrv\TwoFactor\Authy;

class TwoFactorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(TwoFactorInterface::class, function () {
            return new Authy (
                new \GuzzleHttp\Client()
            );
        });
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
