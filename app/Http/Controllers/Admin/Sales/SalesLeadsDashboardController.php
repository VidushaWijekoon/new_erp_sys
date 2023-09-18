<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;

class SalesLeadsDashboardController extends Controller
{
    public function index()
    {
        return view('pages.sales.sales-leads.index');
    }
}
