<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;

class InvoicesController extends Controller
{
    public function index()
    {
        return view('pages.sales.invoices.index');
    }

    public function create()
    {
        return view('pages.sales.invoices.create ');
    }
}
