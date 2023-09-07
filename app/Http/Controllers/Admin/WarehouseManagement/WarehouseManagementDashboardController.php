<?php

namespace App\Http\Controllers\Admin\WarehouseManagement;

use App\Http\Controllers\Controller;

class WarehouseManagementDashboardController extends Controller
{
    public function index()
    {
        return view('pages.warehouse-management-dashboard.index');
    }
}
