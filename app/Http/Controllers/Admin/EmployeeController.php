<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequestForm;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('pages.employee.create');
    }

    public function store(EmployeeRequestForm $request)
    {
        $validatedData = $request->validated();
        $employee = new Employees();

        $employee->fullname = $validatedData['fullname'];
    }
}
