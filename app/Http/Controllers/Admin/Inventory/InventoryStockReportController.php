<?php

namespace App\Http\Controllers\Admin\Inventory;

use App\Http\Controllers\Controller;

class InventoryStockReportController extends Controller
{
    public function index()
    {
        return view('pages.inventory.stock-report.index');
    }
}
