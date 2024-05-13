<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/login', function () {
    return view('loginPage');
});

Route::get('/formISPM', function () {
    return view('formISPM');
});

Route::get('/formISCSC', function () {
    return view('formISCSC');
});

Route::get('/formPTA', function () {
    return view('formPTA');
});

Route::get('auth/redirect', [AuthController::class, 'redirect']);
Route::get('auth/callback', [AuthController::class, 'callback']);
