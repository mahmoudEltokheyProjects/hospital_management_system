<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ++++++++++++ login selection page ++++++++++++
    public function loginSelection()
    {
        return view('admin.auth.selection');
    }
    // ++++++++++++ dashboard page ++++++++++++
    public function doctor_dashboard()
    {
        return view('admin.alerts');
    }
    public function patient_dashboard()
    {
        return view('admin.accordion');
    }
    public function admin_dashboard()
    {
        return view('admin.badge');
    }
}
