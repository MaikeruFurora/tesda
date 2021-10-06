<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // return redirect(RouteServiceProvider::HOME);
                switch (Auth::user()->user_type) {
                    case 'administrator':
                        return redirect()->route('administrator.dashboard');
                        break;
        
                    case 'officer':
                        return redirect()->route('officer.dashboard');
                        break;
        
                    case 'applicant':
                        return redirect()->route('applicant.dashboard');
                        break;
                    
                    default:
                        return redirect()->route('auth.login');
                        break;
                }
            }
        }

        return $next($request);
    }
}
