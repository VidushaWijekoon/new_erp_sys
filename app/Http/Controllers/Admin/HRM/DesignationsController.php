<?php

namespace App\Http\Controllers\Admin\HRM;

use App\Models\Employees;
use App\Models\Designations;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\HRM\DesignationRequestForm;

class DesignationsController extends Controller
{
    public function index()
    {
        return view('pages.hrm.designations.index');
    }

    public function create()
    {
        $designation = Designations::all();
        return view('pages.hrm.designations.create', ['designation' => $designation]);
    }

    public function store(DesignationRequestForm $request)
    {
        $validatedData = $request->validated();
        $designation = new Designations();

        $designation->designation_name = strtolower($validatedData['designation_name']);
        $designation->description = strtolower($validatedData['description']);
        $designation->status = '1';
        $designation->created_by = Auth::user()->id;

        $designation->save();
        return redirect(route('designation.index'))->with('message', 'New Designation Created Successfully');
    }

    public function show($designation)
    {
        $designation = Designations::findOrFail($designation);
        return view('pages.hrm.designations.show', ['designation' => $designation]);
    }

    public function edit($designation)
    {
        $designation = Designations::findOrFail($designation);
        $allD = Designations::all();
        return view('pages.hrm.designations.edit', ['designation' => $designation, 'allD' => $allD]);
    }

    public function update(DesignationRequestForm $request, $designation)
    {
        $validatedData = $request->validated();
        $designation = Designations::findOrFail($designation);

        $designation->designation_name = strtolower($validatedData['designation_name']);
        $designation->description = strtolower($validatedData['description']);
        $designation->status = '1';
        $designation->created_by = Auth::user()->id;

        $designation->update();
        return redirect(route('designation.index'))->with('message', 'Designation Has Been Updated Successfully');
    }

    public function destroy($designation)
    {
        $designation = Designations::findOrFail($designation);

        $designation->delete();
        return redirect()->back()->with('message', 'Designations has been removed');
    }

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
        $designation  = Employees::where('designation', $designation)->get();
        return view('pages.hrm.designations.employees', ['designation' => $designation]);
    }
}
