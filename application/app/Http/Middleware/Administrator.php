<?php

namespace SaaSrv\Http\Middleware;

use Closure;

class Administrator
{
    /**
     * If the user hasn't got administrator's privileges we kick him out with a 404 page 
     * so we give the impression the admin areas don't exist ;-)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->user()->hasRole('administrator')) {
            return abort(404);
        }

        return $next($request);
    }
}
