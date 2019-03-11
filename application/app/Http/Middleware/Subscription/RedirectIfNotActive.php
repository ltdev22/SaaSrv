<?php

namespace SaaSrv\Http\Middleware\Subscription;

use Closure;

class RedirectIfNotActive
{
    /**
     * Allow / Check if the subscription is active.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * @see SaaSrv\Http\Kernel::routeMiddleware
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->check() || auth()->user()->isNotSubscribed()) {
            return redirect()->route('account.index');
        }
        return $next($request);
    }
}
