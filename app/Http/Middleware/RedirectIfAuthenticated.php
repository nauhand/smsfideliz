<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        /*if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);*/

    if ($guard == "admin" && Auth::guard($guard)->check()) {
                    return redirect('/admin/tableau-de-bord/comptes/liste-clients');
                }
    if ($guard == "subuser" && Auth::guard($guard)->check()) {
                    return redirect('/client/tableau-de-bord');
                }
    if (Auth::guard($guard)->check()) {
                    return redirect('/client/tableau-de-bord');
                }

                return $next($request);
    }
}
