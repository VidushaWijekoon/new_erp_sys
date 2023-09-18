<?php

namespace App\Http\Controllers\Admin\Payroll;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PayrollManagementController extends Controller
{
    public function index()
    {
        return view('pages.payroll.payroll_management.index');
    }
}
