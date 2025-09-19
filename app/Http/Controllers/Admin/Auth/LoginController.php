<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\AuthTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    use AuthTrait;
    // ============ __construct ============
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // ============ loginForm ============
    public function loginForm($type)
    {
        return view('admin.auth.login',compact('type'));
    }
    // ============ login ============
    public function login(Request $request)
    {
        if (Auth::guard($this->checkGuard($request))->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return $this->redirect($request);
        }
        else
        {
            return redirect()->back()->with('message', 'يوجد خطا في كلمة المرور او اسم المستخدم');
        }
    }
    // ============ logout ============
    public function logout(Request $request,$type)
    {
        // logout according to "type" ,
        Auth::guard($type)->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
