<?php

namespace App\Http\Controllers\Admin\HRM;

use App\Models\Employees;
use App\Models\Departments;
use App\Models\Designations;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\HRM\EmployeeRequestForm;
use App\Models\Country;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('pages.hrm.employees.index');
    }

    public function create()
    {
        $departments = Departments::where('status', '1')->get();
        $designations  = Designations::where('status', '1')->get();
        $countries = Country::orderBy('country_name', 'ASC')->get();
        return view('pages.hrm.employees.create', [
            'departments' => $departments,
            'designations' => $designations,
            'countries' => $countries
        ]);
    }

    public function store(EmployeeRequestForm $request)
    {
        $validatedData = $request->validated();
        $employee = new Employees();

        $employee->fullname = $validatedData['fullname'];
        $employee->email = $validatedData['email'];
        $employee->gender = $validatedData['gender'];
        $employee->birthday = $validatedData['birthday'];
        $employee->passport_number = $validatedData['passport_number'];
        $employee->passport_expiring = $validatedData['passport_expiring'];
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

    public function show($employee)
    {
        $departments = Departments::all();
        $designations  = Designations::all();
        $employee = Employees::findOrFail($employee);
        return view(
            'pages.hrm.employees.show',
            [
                'employee' => $employee,
                'departments' => $departments,
                'designations' => $designations
            ]
        );
    }

    public function edit($employee)
    {
        $departments = Departments::where('status', '1')->get();
        $designations  = Designations::where('status', '1')->get();
        $employee = Employees::findOrFail($employee);
        return view(
            'pages.hrm.employees.edit',
            [
                'employee' => $employee,
                'departments' => $departments,
                'designations' => $designations
            ]
        );
    }

    public function update(EmployeeRequestForm $request, $employee)
    {
        $validatedData = $request->validated();
        $employee = Employees::findOrFail($employee);

        $employee->fullname = $validatedData['fullname'];
        $employee->email = $validatedData['email'];
        $employee->gender = $validatedData['gender'];
        $employee->birthday = $validatedData['birthday'];
        $employee->passport_number = $validatedData['passport_number'];
        $employee->passport_expiring = $validatedData['passport_expiring'];
        $employee->visa_type = $validatedData['visa_type'];
        $employee->visa_expiring = $validatedData['visa_expiring'];
        $employee->contact_number = $validatedData['contact_number'];
        $employee->current_address = $validatedData['current_address'];
        $employee->resident_country = $validatedData['resident_country'];
        $employee->emergency_number = $validatedData['emergency_number'];

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/employee/';
            $path = 'uploads/employee/' . $employee->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/employee/', $filename);
            $employee->image = $uploadPath . $filename;
        }

        $employee->department = $validatedData['department'];
        $employee->designation = $validatedData['designation'];
        $employee->join_date = $validatedData['join_date'];
        $employee->special_note = $validatedData['special_note'];
        $employee->status = '1';
        $employee->created_by = Auth::user()->id;

        $employee->update();
        return redirect(route('employee.index'))->with('message', 'Employee Has Been Updated Successfully');
    }

    public function destroy($employee)
    {
        $employee = Employees::find($employee);
        $path = 'uploads/employee/' . $employee->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $employee->delete();
        return redirect()->back()->with('message', 'Employee Been Deleted');
    }

    public function activate($employee)
    {
        $employee = Employees::findOrFail($employee);

        $employee->status = '1';
        $employee->update();
        return redirect()->back()->with('message', 'Employee Activated');
    }

    public function dectivate($employee)
    {
        $employee = Employees::findOrFail($employee);

        $employee->status = '0';
        $employee->update();
        return redirect()->back()->with('message', 'Successfully Deactivate Employee');
    }

    public function view_employee($employee)
    {
        $employeesItem = Employees::findOrFail($employee);
        $employee = Employees::findOrFail($employee);
        return view('pages.hrm.employees.view_employee', compact('employeesItem'));
    }

    public function performance($employee)
    {
        $employeesItem = Employees::findOrFail($employee);
        $employee = Employees::findOrFail($employee);
        return view('pages.hrm.employees.performance', compact('employeesItem'));
    }
}
