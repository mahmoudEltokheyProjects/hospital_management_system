<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\AuthTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthTrait;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // ===== admin Login =====
    public function adminLogin()
    {
        return view('admin.auth.login', ['type' => 'admin']);
    }
    // ===== doctor Login =====
    public function doctorLogin()
    {
        return view('admin.auth.login', ['type' => 'doctor']);
    }
    // ===== patient Login =====
    public function patientLogin()
    {
        return view('admin.auth.login', ['type' => 'patient']);
    }
    // ===== LOGIN ACTION =====
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
            'type'     => 'required|in:admin,doctor,patient',
        ]);

        $guard = $this->checkGuard($request);

        if (Auth::guard($guard)->attempt($request->only('email', 'password'))) 
        {
            $request->session()->regenerate();
            // ✅ MUST RETURN
            return $this->redirectAfterLogin($request);
        }
        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }

    // ===== LOGOUT =====
    public function logout(Request $request)
    {
        foreach (['admin', 'doctor', 'patient', 'web'] as $guard) {
            Auth::guard($guard)->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('dashboard.selection');
    }
}
