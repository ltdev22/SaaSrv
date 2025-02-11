<?php

namespace SaaSrv\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // if the user is admin do ...
        Blade::if ('administrator', function () {
            return auth()->user()->hasRole('administrator');
        });

        // if the admin user is impersonating ...
        Blade::if ('impersonating', function () {
            return session()->has('impersonate');
        });

        // if the user is subscribed do ...
        Blade::if ('subscribed', function () {
            return auth()->user()->isSubscribed();
        });

        // if the user is not subscribed do ...
        Blade::if ('notSubscribed', function () {
            return !auth()->check() || auth()->user()->isNotSubscribed();
        });

        // if the user has cancelled his subscription do ...
        Blade::if ('subscriptionCancelled', function () {
            return auth()->user()->hasCancelled();
        });

        // if the user has cancelled his subscription do ...
        Blade::if ('subscriptionNotCancelled', function () {
            return auth()->user()->hasNotCancelled();
        });

        // if the user has a team subscription do ...
        Blade::if ('teamSubscription', function () {
            return auth()->user()->hasTeamSubscription();
        });

        // if the team  has already a subscribed owner do ...
        Blade::if ('notTeamOwnerSubscription', function () {
            return !auth()->user()->ownerHasSubscription();
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
