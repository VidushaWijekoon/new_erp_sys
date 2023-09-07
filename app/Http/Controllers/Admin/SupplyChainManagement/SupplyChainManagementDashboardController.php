<?php

namespace App\Http\Controllers\Admin\SupplyChainManagement;

use App\Http\Controllers\Controller;

class SupplyChainManagementDashboardController extends Controller
{
    public function index()
    {
        return view('pages.supply-chain-management.index');
    }
}
