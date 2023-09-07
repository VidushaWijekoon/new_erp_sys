<?php

namespace App\Http\Controllers\Admin\InventoryManagement;

use App\Http\Controllers\Controller;

class InventoryManagementDashboardController extends Controller
{
    public function index()
    {
        return view('pages.inventory_management-dashboard.index');
    }
}
