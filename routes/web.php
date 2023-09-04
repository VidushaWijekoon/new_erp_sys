<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Users\UsersController;
use App\Http\Controllers\Admin\HRM\EmployeeController;
use App\Http\Controllers\Admin\HRM\DepartmentsController;
use App\Http\Controllers\Admin\HRM\DesignationsController;
use App\Http\Controllers\Admin\HRM\DocumentManagementController;
use App\Http\Controllers\Admin\HRM\PayrollManagementController;
use App\Http\Controllers\Admin\Payroll\AttendanceController;
use App\Http\Controllers\Admin\Payroll\HolidaysController;
use App\Http\Controllers\Admin\Payroll\LeavesController;

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
    Route::get('/payroll-management', [PayrollManagementController::class, 'index'])->name('payroll-management.index');

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
        Route::get('/department/{department}/department', 'department')->name('department.department');
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
        Route::get('/designation/{designation}/designation', 'designation')->name('designation.designation');
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

    Route::controller(UsersController::class)->group(function () {
        Route::get('/users', 'index')->name('users.index');
        Route::put('/user/{user}/edit', 'edit')->name('user.edit');
        Route::put('/user/{user}/', 'update')->name('user.update');
        Route::get('/user/{user}/destroy', 'destroy')->name('user.destroy');
        Route::get('/user/{user}/activate', 'activate')->name('user.activate');
        Route::get('/user/{user}/dectivate', 'dectivate')->name('user.dectivate');
    });

    Route::get('/register', [RegisterController::class, 'index'])->name('user.register');

    Route::controller(HolidaysController::class)->group(function () {
        Route::get('/holidays', 'index')->name('holiday.index');
        Route::get('/holiday/create', 'create')->name('holiday.create');
        Route::post('/holiday', 'store')->name('holiday.store');
        Route::get('/holiday/{holiday}/show', 'show')->name('holiday.show');
        Route::get('/holiday/{holiday}/edit', 'edit')->name('holiday.edit');
        Route::put('/holiday/{holiday}/', 'update')->name('holiday.update');
        Route::get('/holiday/{holiday}/destroy', 'destroy')->name('holiday.destroy');
        Route::get('/holiday/{holiday}/activate', 'activate')->name('holiday.activate');
        Route::get('/holiday/{holiday}/dectivate', 'dectivate')->name('holiday.dectivate');
    });

    Route::controller(LeavesController::class)->group(function () {
        Route::get('/leaves', 'index')->name('leaves.index');
    });

    Route::controller(AttendanceController::class)->group(function () {
        Route::get('/attendance', 'index')->name('attendance.index');
    });
});