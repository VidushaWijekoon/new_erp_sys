<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;

class VendorsController extends Controller
{
    public function index()
    {
        return view('pages.sales.vendors.index');
    }
}
