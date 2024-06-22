<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\RecruitmentPeriodController;
use App\Http\Controllers\SettingController;
use App\Models\RecruitmentPeriod;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/form', [FormController::class, 'index'])->middleware(['auth'])->name('form');
Route::post('/register', [FormController::class, 'store'])->middleware(['auth'])->name('register');

require __DIR__ . '/auth.php';

Route::get('/admin', function () {
    return view('admin-pendaftar-ISCSC');
});
Route::get('/admin/settings', [SettingController::class, 'index']);

Route::resource('/admin/recruitment-period', RecruitmentPeriodController::class);
