<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;

class SalesDashboardController extends Controller
{
    public function index()
    {
        return view('pages.sales.sales_dashboard.index');
    }
}
