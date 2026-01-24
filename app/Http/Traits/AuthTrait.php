<?php

namespace App\Http\Traits;

trait AuthTrait
{
    public function checkGuard($request)
    {
        return match ($request->type) {
            'admin'   => 'admin',
            'doctor'  => 'doctor',
            'patient' => 'patient',
            default   => 'web',
        };
    }

    public function redirectAfterLogin($request)
    {
        return match ($request->type) {
            'admin'   => redirect()->route('dashboard.admin.admin_home'),
            'doctor'  => redirect()->route('dashboard.doctor.doctor_home'),
            'patient' => redirect()->route('dashboard.patient.patient_home'),
            default   => redirect('/'),
        };
    }
}
