<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HR\EmployeeController;
use App\Http\Controllers\POS\PosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [LoginController::class, 'index'])->name('loginpage');

Route::prefix('admin/')->middleware('auth', 'isAdmin')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('admin.dashboard');
    });

    Route::controller(EmployeeController::class)->group(function () {
        Route::get('employee', 'index')->name('hr.dashboard');
    });

    Route::controller(PosController::class)->group(function () {
        Route::get('pos', 'index')->name('pos.index');
    });
});
