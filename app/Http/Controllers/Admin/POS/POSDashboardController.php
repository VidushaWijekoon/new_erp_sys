<?php

namespace App\Http\Controllers\Admin\POS;

use App\Http\Controllers\Controller;

class POSDashboardController extends Controller
{
    public function index()
    {
        return view('pages.pos-dashboard.index');
    }
}
