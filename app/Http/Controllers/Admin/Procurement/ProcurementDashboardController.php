<?php

namespace App\Http\Controllers\Admin\Procurement;

use App\Http\Controllers\Controller;

class ProcurementDashboardController extends Controller
{
    public function index()
    {
        return view('pages.procurement.index');
    }
}
