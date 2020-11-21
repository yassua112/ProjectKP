<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      // dd('jihad');
      if (Auth::guard($guard)->check()) {
        if(auth()->user()->hasRole('1')){
          return redirect('/dashboard');
        }else if(auth()->user()->hasRole('2')){
          return redirect('/');
        }else {
          return redirect('/');
        }
      }

        return $next($request);
    }
}
