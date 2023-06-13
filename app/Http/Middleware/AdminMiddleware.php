<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('web')->check() && $request->user()->type != 'web' || Auth::guard('role_managers')->check() && auth()->guard('role_managers')->user()->is_active == 1)
        {
            return $next($request);
        }
        else
        {
            return redirect('admin_login');
        }
//        return $next($request);
    }
}
