<?php

namespace App\Http\Controllers\Admin\HRM;

use App\Models\Employees;
use App\Models\Departments;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class DepartmentController extends Controller
{
    public function activate($department)
    {
        $department = Departments::findOrFail($department);

        $department->status = '1';
        $department->update();
        return redirect()->back()->with('message', 'Department Activated');
    }

    public function dectivate($department)
    {
        $department = Departments::findOrFail($department);

        $department->status = '0';
        $department->update();
        return redirect()->back()->with('message', 'Successfully Deactivate Department');
    }

    public function department($department)
    {
        $deptCount = DB::table('employees')->where('department', $department)->count(['id']);

        $department = Employees::where('department', $department)->get();
        return view(
            'pages.hrm.employees.employees',
            [
                'department' => $department,
                'deptCount' => $deptCount,
            ]
        );
    }
}
