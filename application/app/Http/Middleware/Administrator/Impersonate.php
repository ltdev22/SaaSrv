<?php

namespace SaaSrv\Http\Middleware\Administrator;

use Closure;

class Impersonate
{
    /**
     * Check if there's an impersonate ID session set and temporary sing in using this.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('impersonate')) {
            \Auth::onceUsingId(session('impersonate'));
        }

        return $next($request);
    }
}
