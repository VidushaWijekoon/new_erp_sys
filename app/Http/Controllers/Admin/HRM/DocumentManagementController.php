<?php

namespace App\Http\Controllers\Admin\HRM;

use App\Models\Departments;
use App\Models\Designations;
use App\Http\Controllers\Controller;

class DocumentManagementController extends Controller
{
    public function index()
    {
        $deptlist = Departments::where('status', '1')->get();
        $deptCount = $deptlist->count();
        $designList = Designations::where('status', '1')->get();
        $designCount = $designList->count();

        return view('pages.document_controller.index', ['deptCount' => $deptCount, 'designCount' => $designCount]);
    }
}
