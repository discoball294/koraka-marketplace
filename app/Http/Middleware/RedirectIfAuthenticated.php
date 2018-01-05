<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::check()) {
            $auth = Auth::user()->roles()->first();
            switch ($auth->name) {
                case 'Admin':
                    return redirect()->intended('admin');
                    break;
                case 'User':
                    return redirect()->intended('');
                    break;
                default:
                    return redirect()->intended('');
                    break;
            }
        }

        return $next($request);
    }
}
