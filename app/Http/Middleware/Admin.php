<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        // $setting = Setting::where('id', 1)->first();
        // App::setLocale($setting->bahasa);

        if (auth()->check() && auth()->user()->hasRole('1')) {
            return $next($request);
        }

        return redirect('login');
    }
}