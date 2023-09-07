<?php

namespace App\Http\Controllers\Admin\ECommerce;

use App\Http\Controllers\Controller;

class ECommerceDashboardController extends Controller
{
    public function index()
    {
        return view('pages.e-commerce-dashboard.index');
    }
}
