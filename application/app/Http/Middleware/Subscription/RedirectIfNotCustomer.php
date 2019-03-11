<?php

namespace SaaSrv\Http\Middleware\Subscription;

use Closure;

class RedirectIfNotCustomer
{
    /**
     * Allow user if is customer.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * @see SaaSrv\Http\Kernel::routeMiddleware
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->isNotCustomer()) {
            return redirect()->route('account.index');
        }
        return $next($request);
    }
}
