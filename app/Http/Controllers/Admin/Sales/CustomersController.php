<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Models\Country;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function index()
    {
        return view('pages.sales.customers.index');
    }

    public function create()
    {
        $countries = Country::orderBy('country_name', 'ASC')->get();
        return view('pages.sales.customers.create', ['countries' => $countries]);
    }

    public function store()
    {
    }

    public function view_customer()
    {
        return view('pages.sales.customers.view_customer');
    }
}
