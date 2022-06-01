<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PremiumAccess
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
        if ( !Auth::guard('customer')->check()){
            return redirect()->guest(route('premium.login'))->with('error', trans('app.unauthorized_access'));
        }

        return $next($request);
    }
}
