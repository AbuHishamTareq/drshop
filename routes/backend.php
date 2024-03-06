<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace'=>'Backend', 'prefix'=>'admin', 'middleware'=>'guest:backend'], function () {
    Route::get('login', [LoginController::class, 'show'])->name('admin.login.show');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.submit');
});

Route::group(['namespace'=>'Backend', 'prefix'=>'admin', 'middleware'=>'auth:backend'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.login.logout');
});

Route::fallback(function () {
    return redirect()->route('admin.login.show');
});
