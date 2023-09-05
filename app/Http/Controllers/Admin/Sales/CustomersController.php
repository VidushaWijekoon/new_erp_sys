<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function index()
    {
        return view('pages.sales.customers.index');
    }

    public function create()
    {
        return view('pages.sales.customers.create ');
    }

    public function view_customer()
    {
        return view('pages.sales.customers.view_customer');
    }
}
