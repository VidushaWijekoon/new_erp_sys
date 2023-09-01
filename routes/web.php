<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Auth\LoginController;
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

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Department Livewire
    Route::get('/hrm', App\Livewire\Admin\HRM\Index::class)->name('hrm');

    // Employee
    Route::controller(EmployeeController::class)->group(function () {
        Route::get('employee/create', 'create')->name('create-employee');
        Route::post('employee/', 'store')->name('store-employee');
    });

    Route::get('/sales', function () {
        return view('pages.sales.index');
    });

    Route::get('/accounts', function () {
        return view('pages.accounts.index');
    });

    Route::get('/procurement', function () {
        return view('pages.procurement.index');
    });

    Route::get('/inventory-management', function () {
        return view('pages.inventory-management.index');
    });

    Route::get('/warehouse-management', function () {
        return view('pages.warehouse-management.index');
    });

    Route::get('/users', function () {
        return view('pages.users.index');
    });
});
