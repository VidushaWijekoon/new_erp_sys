<?php

namespace App\Http\Controllers\Admin\Payroll;

use App\Http\Controllers\Controller;

class EmployeeSalaryController extends Controller
{
    public function index()
    {
        return view('pages.payroll.employee_salary.index');
    }

    public function create()
    {
        return view('pages.payroll.employee_salary.create');
    }

    public function payslip()
    {
        return view('pages.payroll.employee_salary.payslip');
    }
}
