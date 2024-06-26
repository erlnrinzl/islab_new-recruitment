<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminRecruitmentDetailController;
use App\Http\Controllers\AdminRecruitmentPeriodController;
use App\Http\Controllers\AdminRecruitmentTypeController;
use App\Http\Controllers\AdminRegistrantsController;
use App\Http\Controllers\AdminUserDataController;
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
    Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/user-admin', [AdminUserDataController::class, 'index_admin'])->name('admin.user-admin');
    Route::get('/admin/user-mahasiswa', [AdminUserDataController::class, 'index_mahasiswa'])->name('admin.user-mahasiswa');

    Route::get('/admin/settings', [SettingController::class, 'index']);

    Route::resource('/admin/recruitment-period', AdminRecruitmentPeriodController::class);
    Route::get('/admin/recruitment-detail/{type_slug}/{hashed_params}/edit', 'App\Http\Controllers\AdminRecruitmentDetailController@edit')->name('recruitment-detail.editMultiple'); 
    Route::put('/admin/recruitment-detail/{type_slug}/{hashed_params}/update', 'App\Http\Controllers\AdminRecruitmentDetailController@update')->name('recruitment-detail.updateMultiple');
    Route::delete('recruitment-detail/{type_slug}/{hashed_params}', 'App\Http\Controllers\AdminRecruitmentDetailController@destroy')->name('recruitment-detail.destroyMultiple');
    Route::resource('/admin/recruitment-detail', AdminRecruitmentDetailController::class);
    Route::resource('/admin/recruitment-type', AdminRecruitmentTypeController::class);

    Route::resource('/admin/registrant', AdminRegistrantsController::class);
});

require __DIR__ . '/auth.php';
