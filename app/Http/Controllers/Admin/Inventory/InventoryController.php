<?php

namespace App\Http\Controllers\Admin\Inventory;

use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    public function index()
    {
        return view('pages.inventory.inventory.index');
    }
}
