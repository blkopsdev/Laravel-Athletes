<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAccess
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
        if ( !Auth::guard('web')->check()){
            return redirect()->guest(route('login'))->with('error', 'Please login to access to this page.');
        }

        /* $user = Auth::user();

        if (!$user->is_admin())
            return redirect(route('dashboard'))->with('error', trans('app.access_restricted')); */

        return $next($request);
    }
}
