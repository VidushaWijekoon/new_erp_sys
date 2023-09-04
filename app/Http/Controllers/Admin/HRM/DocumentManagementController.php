<?php

namespace App\Http\Controllers\Admin\HRM;

use App\Models\Departments;
use App\Models\Designations;
use App\Http\Controllers\Controller;
use App\Models\Employees;

class DocumentManagementController extends Controller
{
    public function index()
    {
        $deptlist = Departments::all();
        $deptCount = $deptlist->count();
        $designList = Designations::all();
        $designCount = $designList->count();
        $empList = Employees::all();
        $empCount = $empList->count();

        return view(
            'pages.document_management.index',
            [
                'deptCount' => $deptCount,
                'designCount' => $designCount,
                'empCount' => $empCount,
            ]
        );
    }
}
