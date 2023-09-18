<?php

namespace App\Http\Controllers\Admin\HRM;

use App\Http\Controllers\Controller;

class PayrollManagementController extends Controller
{
    public function index()
    {
        return view('pages.payroll_management.index');
    }
}
