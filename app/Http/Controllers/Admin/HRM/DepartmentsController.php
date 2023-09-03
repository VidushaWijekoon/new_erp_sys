<?php

namespace App\Http\Controllers\Admin\HRM;

use App\Http\Controllers\Controller;
use App\Http\Requests\HRM\DepartmentRequestForm;
use App\Models\Departments;
use Illuminate\Support\Facades\Auth;

class DepartmentsController extends Controller
{
    public function index()
    {
        return view('pages.hrm.departments.index');
    }

    public function create()
    {
        $departments = Departments::all();
        return view('pages.hrm.departments.create', ['departments' => $departments]);
    }

    public function store(DepartmentRequestForm $request)
    {
        $validatedData = $request->validated();
        $departments = new Departments();

        $departments->department_name = strtolower($validatedData['department_name']);
        $departments->description = strtolower($validatedData['description']);
        $departments->status = '1';
        $departments->created_by = Auth::user()->id;

        $departments->save();
        return redirect(route('department.index'))->with('message', 'New Department Created Successfully');
    }

    public function show($departments)
    {
        $departments = Departments::findOrFail($departments);
        return view('pages.hrm.departments.show', ['departments' => $departments]);
    }

    public function edit($departments)
    {
        $departments = Departments::findOrFail($departments);
        $allD = Departments::all();
        return view('pages.hrm.departments.edit', ['departments' => $departments, 'allD' => $allD]);
    }

    public function update(DepartmentRequestForm $request, $department)
    {
        $validatedData = $request->validated();
        $department = Departments::findOrFail($department);

        $department->department_name = strtolower($validatedData['department_name']);
        $department->description = strtolower($validatedData['description']);
        $department->status = '1';
        $department->created_by = Auth::user()->id;

        $department->update();
        return redirect(route('department.index'))->with('message', 'Department Has Been Updated Successfully');
    }

    public function destroy($department)
    {
        $department = Departments::findOrFail($department);

        $department->delete();
        return redirect()->back()->with('message', 'Departments has been removed');
    }

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
}
