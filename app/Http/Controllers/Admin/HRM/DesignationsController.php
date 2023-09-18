<?php

namespace App\Http\Controllers\Admin\HRM;

use App\Models\Employees;
use App\Models\Designations;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DesignationsController extends Controller
{
    public function activate($designation)
    {
        $designation = Designations::findOrFail($designation);

        $designation->status = '1';
        $designation->update();
        return redirect()->back()->with('message', 'Designations Activated');
    }

    public function dectivate($designation)
    {
        $designation = Designations::findOrFail($designation);

        $designation->status = '0';
        $designation->update();
        return redirect()->back()->with('message', 'Successfully Deactivate designation');
    }

    public function designation($designation)
    {
        $deptCount = DB::table('employees')->where('department', $designation)->count(['id']);

        $designation = Employees::where('department', $designation)->get();
        return view(
            'pages.hrm.designations.employees',
            [
                'designation' => $designation,
                'deptCount' => $deptCount,
            ]
        );
    }
}
