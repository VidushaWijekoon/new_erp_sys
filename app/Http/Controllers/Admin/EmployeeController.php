<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employees;
use App\Models\Departments;
use App\Models\Designations;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EmployeeRequestForm;

class EmployeeController extends Controller
{

    public function index()
    {
        return view('pages.employee.index');
    }

    public function create()
    {
        $departments = Departments::all();
        $designations = Designations::all();
        return view('pages.employee.create', ['departments' => $departments, 'designations' => $designations]);
    }

    public function store(EmployeeRequestForm $request)
    {
        $validatedData = $request->validated();
        $employee = new Employees();

        $employee->fullname = $validatedData['fullname'];
        $employee->email = $validatedData['email'];
        $employee->birthday = $validatedData['birthday'];
        $employee->passport_number = $validatedData['passport_number'];
        $employee->visa_type = $validatedData['visa_type'];
        $employee->visa_expiring = $validatedData['visa_expiring'];
        $employee->contact_number = $validatedData['contact_number'];
        $employee->current_address = $validatedData['current_address'];
        $employee->resident_country = $validatedData['resident_country'];
        $employee->emergency_number = $validatedData['emergency_number'];

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/employee/';
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move($uploadPath, $filename);
            $employee->image = $uploadPath . $filename;
        }

        $employee->department = $validatedData['department'];
        $employee->designation = $validatedData['designation'];
        $employee->join_date = $validatedData['join_date'];
        $employee->special_note = $validatedData['special_note'];
        $employee->status = '1';
        $employee->created_by = Auth::user()->id;

        $employee->save();
        return redirect(route('employee.index'))->with('message', 'Employee Created Successfully');
    }
}
