<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ++++++++++++ login selection page ++++++++++++
    public function index()
    {
        return view('admin.auth.selection');
    }
    // ++++++++++++ dashboard page ++++++++++++
    public function dashboard()
    {
        return view('dashboard');
    }
}
