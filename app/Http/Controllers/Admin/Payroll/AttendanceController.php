<?php

namespace App\Http\Controllers\Admin\Payroll;

use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('pages.payroll_management.attendance.index');
    }

    public function create()
    {
        return view('pages.payroll_management.attendance.create');
    }
}
