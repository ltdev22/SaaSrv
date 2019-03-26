<?php

namespace SaaSrv\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \SaaSrv\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \SaaSrv\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \SaaSrv\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \SaaSrv\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \SaaSrv\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \SaaSrv\Http\Middleware\Administrator\Impersonate::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \SaaSrv\Http\Middleware\RedirectIfAuthenticated::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,

        'confirmationToken.expired' => \SaaSrv\Http\Middleware\ChecksExpiredConfirmationTokens::class,
        'auth.register' => \SaaSrv\Http\Middleware\AuthenticateRegister::class,

        'administrator' => \SaaSrv\Http\Middleware\Administrator::class,
        'subscription.active' => \SaaSrv\Http\Middleware\Subscription\RedirectIfNotActive::class,
        'subscription.notCancelled' => \SaaSrv\Http\Middleware\Subscription\RedirectIfCancelled::class,
        'subscription.cancelled' => \SaaSrv\Http\Middleware\Subscription\RedirectIfNotCancelled::class,
        'subscription.customer' => \SaaSrv\Http\Middleware\Subscription\RedirectIfNotCustomer::class,
        'subscription.inactive' => \SaaSrv\Http\Middleware\Subscription\RedirectIfActive::class,
        'subscription.has.team' => \SaaSrv\Http\Middleware\Subscription\RedirectIfNotTeamPlan::class,
        'subscription.owner' => \SaaSrv\Http\Middleware\Subscription\RedirectIfOwnerHasSubscription::class,
    ];
}
