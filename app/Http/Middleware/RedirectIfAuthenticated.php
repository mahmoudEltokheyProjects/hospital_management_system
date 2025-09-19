<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Get the path the user should be redirected to when they are authenticated.
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // ==== users login : check in "users" table ====
        if (auth('web')->check()) {
            return redirect(RouteServiceProvider::HOME);
        }
        // ==== admins login : check in "users" table ====
        if (auth('admin')->check()) {
            return redirect(RouteServiceProvider::HOME);
        }
        // ==== patient login : check in "patients" table ====
        if (auth('patient')->check()) {
            return redirect(RouteServiceProvider::PATIENT);
        }
        // ==== doctor login : check in "doctors" table ====
        if (auth('doctor')->check()) {
            return redirect(RouteServiceProvider::DOCTOR);
        }

        return $next($request);
    }
}
