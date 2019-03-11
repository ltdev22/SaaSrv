<?php

namespace SaaSrv\Http\Middleware\Subscription;

use Closure;

class RedirectIfCancelled
{
    /**
     * Allow / Check if user has not cancelled the subscription.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * @see SaaSrv\Http\Kernel::routeMiddleware
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->isNotSubscribed() || auth()->user()->hasCancelled()) {
            return redirect()->route('account.index');
        }
        return $next($request);
    }
}
