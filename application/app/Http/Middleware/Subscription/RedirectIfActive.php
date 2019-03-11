<?php

namespace SaaSrv\Http\Middleware\Subscription;

use Closure;

class RedirectIfActive
{
    /**
     * Allow user if has a inactive subscription
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * @see SaaSrv\Http\Kernel::routeMiddleware
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->isSubscribed()) {
            return redirect()->route('account.index');
        }
        return $next($request);
    }
}
