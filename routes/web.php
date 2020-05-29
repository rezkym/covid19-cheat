<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('landing', function () {
    return view('welcome');
});

/* Auth Routes */
Auth::routes();

/* Home Routes */
Route::group(['middleware' => ['auth']], function () {

    // Home Controller After Logging In
    Route::get('/', 'HomeController@index')->name('home');
});

/* Admin Routes */
Route::get('/register/pre', function () {
    Auth::logout();
    return view('auth.register_pre');
});

/* User Routes */
Route::group(['middleware' => ['auth']], function () {

    // Home Controller After Logging In
    Route::resource('/change_hdsn', 'UserController');
});