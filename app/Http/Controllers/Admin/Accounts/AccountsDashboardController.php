<?php

namespace App\Http\Controllers\Admin\Accounts;

use App\Http\Controllers\Controller;

class AccountsDashboardController extends Controller
{
    public function index()
    {
        return view('pages.accounts-dashboard.index');
    }
}
