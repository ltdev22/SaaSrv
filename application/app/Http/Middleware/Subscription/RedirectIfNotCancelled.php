<?php

namespace SaaSrv\Http\Middleware\Subscription;

use Closure;

class RedirectIfNotCancelled
{
    /**
     * Allow / Check if user has cancelled the subscription.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * @see SaaSrv\Http\Kernel::routeMiddleware
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->hasNotCancelled()) {
            return redirect()->route('account.index');
        }
        return $next($request);
    }
}
