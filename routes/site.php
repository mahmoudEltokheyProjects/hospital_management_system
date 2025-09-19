<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
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
        'namespace' => 'App\Http\Controllers\Site',
    ],
    function ()
    {
        // ++++++++++++++++++++++++++++++++ Not Authenticated Routes : guest user ++++++++++++++++++++++++++++++++
        Route::group([
            'prefix' => '/',
            'as' => 'site.',
            'middleware' => ['guest:site']
        ], function ()
        {
            Route::get('/', function () {
                dd("Welcome in Frontend Website");
                // return view('welcome');
            });
        });
});
