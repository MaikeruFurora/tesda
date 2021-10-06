<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficerMidlleware
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
        if (!Auth::check()) {
            return redirect()->route('auth.login');
        }
        switch (Auth::user()->user_type) {
            case 'administrator':
                return redirect()->route('administrator.dashboard');
                break;

            case 'officer':
                return $next($request);
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
