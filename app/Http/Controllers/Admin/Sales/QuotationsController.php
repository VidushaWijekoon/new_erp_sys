<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;

class QuotationsController extends Controller
{
    public function index()
    {
        return view('pages.sales.quoatations.index');
    }

    public function create()
    {
        return view('pages.sales.quoatations.create ');
    }
}
