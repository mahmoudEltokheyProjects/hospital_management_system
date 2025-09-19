<?php

namespace App\Http\Traits;

use App\Providers\RouteServiceProvider;

trait AuthTrait
{
    // =============== checkGuard() : return "guard name" according to "request type" ===============
    public function checkGuard($request)
    {
        if($request->type == 'patient'){
            $guardName= 'patient';
        }
        elseif ($request->type == 'doctor'){
            $guardName= 'doctor';
        }
        else{
            $guardName= 'web';
        }
        return $guardName;
    }
    // =============== redirect() : go to correct login page according to "request type" ===============
    public function redirect($request)
    {
        if($request->type == 'patient')
        {
            return redirect()->intended(RouteServiceProvider::PATIENT);
        }
        elseif ($request->type == 'doctor')
        {
            return redirect()->intended(RouteServiceProvider::DOCTOR);
        }
        else
        {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }
}
