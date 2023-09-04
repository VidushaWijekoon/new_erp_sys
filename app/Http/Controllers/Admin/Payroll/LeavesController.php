<?php

namespace App\Http\Controllers\Admin\Payroll;

use App\Http\Controllers\Controller;

class LeavesController extends Controller
{
    public function index()
    {
        return view('pages.payroll_management.leaves.index');
    }
}
