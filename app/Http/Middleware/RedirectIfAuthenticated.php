<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard) 
        {
            if (Auth::guard($guard)->check()) 
            {
                return match ($guard) 
                {
                    'admin'   => redirect()->route('dashboard.admin.admin_home'),
                    'doctor'  => redirect()->route('dashboard.doctor.doctor_home'),
                    'patient' => redirect()->route('dashboard.patient.patient_home'),
                    default   => redirect('/'),
                };
            }
        }

        return $next($request);
    }
}
