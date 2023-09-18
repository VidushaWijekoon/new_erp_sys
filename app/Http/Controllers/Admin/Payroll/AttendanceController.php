<?php

namespace App\Http\Controllers\Admin\Payroll;

use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('pages.payroll.attendance.index');
    }

    public function mark_attendance($attendance)
    {
        return view('pages.payroll.attendance.create');
    }
}