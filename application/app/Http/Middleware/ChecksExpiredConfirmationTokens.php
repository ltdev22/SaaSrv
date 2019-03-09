<?php

namespace SaaSrv\Http\Middleware;

use Closure;

class ChecksExpiredConfirmationTokens
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $redirectTo
     * @return mixed
     */
    public function handle($request, Closure $next, string $redirectTo)
    {
        if ($request->confirmationToken->hasExpired()) {
            return redirect($redirectTo)->withError('The token has expired.');
        }
        return $next($request);
    }
}
