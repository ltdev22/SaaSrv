<?php

namespace SaaSrv\Http\Middleware\Subscription;

use Closure;

class RedirectIfNotTeamPlan
{
    /**
     * Allow / Check if user has not subscribed to a team plan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->doesNotHaveTeamSubscription()) {
            return redirect()->route('account.index');
        }

        return $next($request);
    }
}
