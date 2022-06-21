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
        if (!Auth::guard('customer')->check()){
            return redirect()->guest(route('premium.login'))->with('error', trans('Please login to access to this page.'));
        } else {
            $customer = Auth::guard('customer')->user();
            if ($customer->status == '0') {
                return redirect()->guest(route('premium.login'))->with('error', trans('Your account has not been approved yet. Contact Admin Please!'));
            } else if ($customer->status == '2') {
                return redirect()->guest(route('premium.login'))->with('error', trans('You don\'t have permission to access to this page.'));
            }
        }

        return $next($request);
    }
}
