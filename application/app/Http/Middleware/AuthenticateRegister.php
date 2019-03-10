<?php

namespace SaaSrv\Http\Middleware;

use Closure;

class AuthenticateRegister
{
    /**
     * Keep in a session the url the user was trying to access and force him to sign up.
     * Will be user when a new guest user is trying to subscribe to a plan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->check()) {
            session()->put('url.intended', $request->url());
            return redirect('/register');
        }

        return $next($request);
    }
}
