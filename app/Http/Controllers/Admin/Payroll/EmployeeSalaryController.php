<?php

namespace App\Http\Controllers\Admin\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeSalaryController extends Controller
{
    public function index()
    {
        return view('pages.payroll_management.employee_salary.index');
    }

    public function create()
    {
        return view('pages.payroll_management.employee_salary.create');
    }

    public function payslip()
    {
        return view('pages.payroll_management.employee_salary.payslip');
    }
}
