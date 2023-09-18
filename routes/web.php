<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HRM\LeavesController;
use App\Http\Controllers\Admin\HRM\EmployeeController;
use App\Http\Controllers\Admin\HRM\DepartmentController;
use App\Http\Controllers\Admin\HRM\HRDashboardController;
use App\Http\Controllers\Admin\HRM\DesignationsController;
use App\Http\Controllers\Admin\HRM\PayrollManagementController;
use App\Http\Controllers\Admin\HRM\DocumentManagementController;

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

    /*
    |--------------------------------------------------------------------------
    | HRM
    |--------------------------------------------------------------------------
    */

    Route::get('/document-management', [DocumentManagementController::class, 'index'])->name('document-management.index');
    Route::get('/hrm-dashboard', [HRDashboardController::class, 'index'])->name('hrm-dashboard.index');
    Route::get('/payroll-management', [PayrollManagementController::class, 'index'])->name('payroll-management.index');

    // Livewire Department
    Route::get('/department', App\Http\Livewire\HRM\Department\Index::class)->name('department');

    Route::controller(DepartmentController::class)->group(function () {
        Route::get('/department/{department}/activate', 'activate')->name('department.activate');
        Route::get('/department/{department}/dectivate', 'dectivate')->name('department.dectivate');
        Route::get('/department/{department}/department', 'department')->name('department.department');
    });

    // Livewire Designation
    Route::get('/designation', App\Http\Livewire\HRM\Designation\Index::class)->name('designation');

    Route::controller(DesignationsController::class)->group(function () {
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
        Route::get('/employee/{employee}/view_employee', 'view_employee')->name('employee.view_employee');
        Route::get('/employee/{employee}/performance', 'performance')->name('employee.performance');
    });

    // Livewire Holidays
    Route::get('/holidays', App\Http\Livewire\Payroll\Holiday\Index::class)->name('holidays');

    Route::controller(LeavesController::class)->group(function () {
        Route::get('/leaves', 'index')->name('leaves-index');
        Route::get('/leaves/create', 'create')->name('leaves.create');
        Route::post('/leaves', 'store')->name('leaves.store');
        Route::get('/leaves/{leaves}/show', 'show')->name('leaves.show');
        Route::get('/leaves/{leaves}/edit', 'edit')->name('leaves.edit');
        Route::put('/leaves/{leaves}/', 'update')->name('leaves.update');
        Route::get('/leaves/{leaves}/destroy', 'destroy')->name('leaves.destroy');
        Route::get('/leaves/{leaves}/approved', 'approved')->name('leaves.approved');
        Route::get('/leaves/{leaves}/not_approved', 'not_approved')->name('leaves.not_approved');
    });
});
