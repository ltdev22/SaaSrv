<?php

namespace SaaSrv\Http\Middleware\Subscription;

use Closure;

class RedirectIfOwnerHasSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->ownerHasSubscription()) {
            return redirect()->route('account.index');
        }

        return $next($request);
    }
}
