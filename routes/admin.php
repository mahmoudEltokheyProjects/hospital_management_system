<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {

    Route::prefix('dashboard')->as('dashboard.')->group(function () 
    {
        // ------------- login-selection page -------------
        Route::get('/login-selection', [HomeController::class, 'loginSelection'])
            ->middleware('dashboard.guest')
            ->name('selection');
        // ------------- admin Login page -------------
        Route::get('/admin/login', [LoginController::class,'adminLogin'])
            ->middleware('guest:admin')
            ->name('login.admin.show');
        // ------------- doctor Login page -------------
        Route::get('/doctor/login', [LoginController::class,'doctorLogin'])
            ->middleware('guest:doctor')
            ->name('login.doctor.show');
        // ------------- patient Login page -------------
        Route::get('/patient/login', [LoginController::class,'patientLogin'])
            ->middleware('guest:patient')
            ->name('login.patient.show');
        // ------------- Login Form -------------
        Route::post('/login', [LoginController::class, 'login'])->name('login');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });
    // +++++++++++++++++++++++++ DASHBOARDS +++++++++++++++++++++++++
    // ======== 1- admin_dashboard ========
    Route::prefix('dashboard/admin')->middleware('auth:admin')->group(function () 
    {
        Route::get('/', [HomeController::class, 'admin_dashboard'])
            ->name('dashboard.admin.admin_home');
    });
    // ======== 2- doctor_dashboard ========
    Route::prefix('dashboard/doctor')->middleware('auth:doctor')->group(function () {
        Route::get('/', [HomeController::class, 'doctor_dashboard'])
            ->name('dashboard.doctor.doctor_home');
    });
    // ======== 3- patient_dashboard ========
    Route::prefix('dashboard/patient')->middleware('auth:patient')->group(function () {
        Route::get('/', [HomeController::class, 'patient_dashboard'])
            ->name('dashboard.patient.patient_home');
    });
});
