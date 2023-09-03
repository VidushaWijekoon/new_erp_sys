<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HRM\DepartmentsController;
use App\Http\Controllers\Admin\HRM\DesignationsController;
use App\Http\Controllers\Admin\HRM\DocumentManagementController;
use App\Http\Controllers\Admin\HRM\EmployeeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::prefix('/admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/document-management', [DocumentManagementController::class, 'index'])->name('document-management.index');

    Route::controller(DepartmentsController::class)->group(function () {
        Route::get('/department', 'index')->name('department.index');
        Route::get('/department/create', 'create')->name('department.create');
        Route::post('/department', 'store')->name('department.store');
        Route::get('/department/{department}/show', 'show')->name('department.show');
        Route::get('/department/{department}/edit', 'edit')->name('department.edit');
        Route::put('/department/{department}/', 'update')->name('department.update');
        Route::get('/department/{department}/destroy', 'destroy')->name('department.destroy');
        Route::get('/department/{department}/activate', 'activate')->name('department.activate');
        Route::get('/department/{department}/dectivate', 'dectivate')->name('department.dectivate');
    });

    Route::controller(DesignationsController::class)->group(function () {
        Route::get('/designation', 'index')->name('designation.index');
        Route::get('/designation/create', 'create')->name('designation.create');
        Route::post('/designation', 'store')->name('designation.store');
        Route::get('/designation/{designation}/show', 'show')->name('designation.show');
        Route::get('/designation/{designation}/edit', 'edit')->name('designation.edit');
        Route::put('/designation/{designation}/', 'update')->name('designation.update');
        Route::get('/designation/{designation}/destroy', 'destroy')->name('designation.destroy');
        Route::get('/designation/{designation}/activate', 'activate')->name('designation.activate');
        Route::get('/designation/{designation}/dectivate', 'dectivate')->name('designation.dectivate');
    });

    Route::controller(EmployeeController::class)->group(function () {
        Route::get('/employee', 'index')->name('employee.index');
        Route::get('/employee/create', 'create')->name('employee.create');
        Route::post('/employee', 'store')->name('employee.store');
        Route::get('/employee/{employee}/show', 'show')->name('employee.show');
        Route::get('/employee/{employee}/edit', 'edit')->name('employee.edit');
        Route::put('/employee/{employee}/', 'update')->name('employee.update');
        Route::get('/employee/{employee}/destroy', 'destroy')->name('employee.destroy');
        Route::get('/employee/{employee}/activate', 'activate')->name('employee.activate');
        Route::get('/employee/{employee}/dectivate', 'dectivate')->name('employee.dectivate');
    });
});