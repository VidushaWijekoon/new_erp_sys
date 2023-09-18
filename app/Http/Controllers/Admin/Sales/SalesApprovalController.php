<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;

class SalesApprovalController extends Controller
{
    public function index()
    {
        return view('pages.sales.approval_stages.index');
    }
}
