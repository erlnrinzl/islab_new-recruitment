<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RecruitmentDetailController;
use App\Http\Controllers\RecruitmentPeriodController;
use App\Http\Controllers\RecruitmentTypeController;
use App\Http\Controllers\SettingController;
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


Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
    Route::get('/form', [FormController::class, 'index'])->middleware(['auth'])->name('form');
    Route::post('/register', [FormController::class, 'store'])->middleware(['auth'])->name('register');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin-{type}', function ($type) {
        return view('admin-pendaftar-pta');
    })->name('admin.dashboard');
});

require __DIR__ . '/auth.php';

Route::get('/admin', function () {
    return view('admin-pendaftar-ISCSC');
});
Route::get('/admin/settings', [SettingController::class, 'index']);

Route::resource('/admin/recruitment-period', RecruitmentPeriodController::class);
Route::resource('/admin/recruitment-detail', RecruitmentDetailController::class);
Route::resource('/admin/recruitment-type', RecruitmentTypeController::class);
