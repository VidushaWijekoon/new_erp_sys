<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HRM\DepartmentController;
use App\Http\Controllers\Admin\HRM\HRDashboardController;
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

    Route::get('/document-management', [DocumentManagementController::class, 'index'])->name('document-management.index');
    Route::get('/hrm-dashboard', [HRDashboardController::class, 'index'])->name('hrm-dashboard.index');

    // Livewire Department
    Route::get('/department', App\Http\Livewire\HRM\Department\Index::class)->name('department');
    
    Route::controller(DepartmentController::class)->group(function () {
        Route::get('/department/{department}/activate', 'activate')->name('department.activate');
        Route::get('/department/{department}/dectivate', 'dectivate')->name('department.dectivate');
        Route::get('/department/{department}/department', 'department')->name('department.department');
    });
    
    // Livewire Designation
   
    Route::get('/designation',App\Http\Livewire\HRM\Designation\Index::class)->name('designation');
});