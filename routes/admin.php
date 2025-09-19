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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
        'namespace' => 'App\Http\Controllers\Admin',
    ],
    function ()
    {
        // ++++++++++++++++++++++++++++++++ Not Authenticated Routes : guest user ++++++++++++++++++++++++++++++++
        Route::group([
            'prefix' => 'dashboard',
            'as' => 'dashboard.',
            'middleware' => ['guest:admin']
        ], function ()
        {
            Route::get('/{type}/login', [LoginController::class,'loginForm'])->middleware('guest')->name('login.show');
            // ++++++++++++ login selection page ++++++++++++++
            Route::get('/', [HomeController::class,'index'])->name('selection');
              // ++++++++++++++++++ pages ++++++++++++++++++
            Route::get('/blog', function () {
                // dd("Welcome in Admin Dashboard");
                return view('admin.blog');
            })->name('blog');
            Route::get('/accordion', function () {
                return view('admin.accordion');
            })->name('accordion');
            Route::get('/products', function () {
                return view('admin.products');
            })->name('products');
            Route::get('/product-details', function () {
                return view('admin.product-details');
            })->name('product_details');
            Route::get('/product-cart', function () {
                return view('admin.product-cart');
            })->name('product_cart');
            Route::get('/alerts', function () {
                return view('admin.alerts');
            })->name('alerts');
            Route::get('/avatar', function () {
                return view('admin.avatar');
            })->name('avatar');
            Route::get('/background', function () {
                return view('admin.background');
            })->name('background');
        });
        // ++++++++++++++++++++++++++++++++ Authenticated Routes : login user ++++++++++++++++++++++++++++++++
        Route::group([
            'prefix' => 'dashboard',
            'as' => 'dashboard.',
            'middleware' => ['auth:admin']
        ], function ()
        {
            Route::post('/login', 'LoginController@login')->name('login');
            Route::get('/logout/{type}', 'LoginController@logout')->name('logout');
        });
    });
