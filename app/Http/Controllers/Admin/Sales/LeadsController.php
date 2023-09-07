<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;

class LeadsController extends Controller
{
    public function index()
    {
        return view('pages.sales.leads.index');
    }
}
