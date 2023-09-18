<?php

namespace App\Http\Controllers\Admin\HRM;

use App\Http\Controllers\Controller;

class HRDashboardController extends Controller
{
    public function index()
    {
        return view('pages.hrm.hrm-dashboard.index');
    }
}
