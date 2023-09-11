<?php

namespace App\Http\Controllers\Admin\Payroll;

use App\Models\Leaves;
use App\Models\Employees;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Payroll\LeavesRequestForm;

class LeavesController extends Controller
{
    public function index()
    {
        return view('pages.payroll_management.leaves.index');
    }

    public function create()
    {
        $year_leaves = Employees::select('year_leaves')->where('created_by', Auth::user()->id)->sum('year_leaves');
        $leave_count = Leaves::select('number_of_days')->where('created_by', Auth::user()->id)->sum('number_of_days');
        $leaves = Leaves::orderBy('created_at', 'DESC')->where('created_by', Auth::user()->id)->get();

        return view('pages.payroll_management.leaves.create', [
            'leaves' => $leaves,
            'year_leaves' => $year_leaves,
            'leave_count' => $leave_count,
        ]);
    }

    public function store(LeavesRequestForm $request)
    {
        $validatedData = $request->validated();
        $leaves = new Leaves();

        $leaves->leave_type = $validatedData['leave_type'];
        $leaves->fromDate = $validatedData['fromDate'];
        $leaves->toDate = $validatedData['toDate'];


        $fromDate = date_create($leaves->fromDate);
        $toDate = date_create($leaves->toDate);

        $interval = date_diff($fromDate, $toDate);
        $formatDate = $interval->format('%a');

        $leaves->number_of_days = $formatDate;

        $leaves->leave_reason = strtolower($validatedData['leave_reason']);
        $leaves->created_by = Auth::user()->id;
        $leaves->approved_by = Auth::user()->id;

        $leaves->save();
        return redirect(route('leaves-index'))->with('message', 'Leave Been Created Successfully');
    }

    public function show($leaves)
    {
        $leaves = Leaves::findOrFail($leaves);
        $year_leaves = Employees::select('year_leaves')->where('created_by', Auth::user()->id)->sum('year_leaves');
        $leave_count = Leaves::select('number_of_days')->where('created_by', Auth::user()->id)->sum('number_of_days');
        $leavesTaken = DB::table('leaves')->select('*')->where('created_by', '=', Auth::user()->id)->get();
        return view('pages.payroll_management.leaves.show', [
            'leaves' => $leaves,
            'leavesTaken' => $leavesTaken,
            'year_leaves' => $year_leaves,
            'leave_count' => $leave_count,
        ]);
    }

    public function edit($leaves)
    {
        $leaves = Leaves::findOrFail($leaves);
        $year_leaves = Employees::select('year_leaves')->where('created_by', Auth::user()->id)->sum('year_leaves');
        $leave_count = Leaves::select('number_of_days')->where('created_by', Auth::user()->id)->sum('number_of_days');
        $leavesTaken = DB::table('leaves')->select('*')->where('created_by', '=', Auth::user()->id)->get();
        return view('pages.payroll_management.leaves.edit', [
            'leaves' => $leaves,
            'leavesTaken' => $leavesTaken,
            'year_leaves' => $year_leaves,
            'leave_count' => $leave_count,
        ]);
    }

    public function update(LeavesRequestForm $request, $leaves)
    {
        $validatedData = $request->validated();
        $leaves = Leaves::findOrFail($leaves);

        $leaves->leave_type = $validatedData['leave_type'];
        $leaves->fromDate = $validatedData['fromDate'];
        $leaves->toDate = $validatedData['toDate'];


        $fromDate = date_create($leaves->fromDate);
        $toDate = date_create($leaves->toDate);

        $interval = date_diff($fromDate, $toDate);
        $formatDate = $interval->format('%a');

        $leaves->number_of_days = $formatDate;

        $leaves->leave_reason = strtolower($validatedData['leave_reason']);
        $leaves->created_by = Auth::user()->id;
        $leaves->approved_by = Auth::user()->id;

        $leaves->update();
        return redirect(route('leaves-index'))->with('message', 'Leave Been Update Successfully');
    }

    public function destroy($leaves)
    {
        $leaves = Leaves::findOrFail($leaves);

        $leaves->delete();
        return redirect()->back()->with('message', 'Leave has been removed');
    }

    public function approved($leaves)
    {
        $leaves = Leaves::findOrFail($leaves);

        $leaves->status = '1';
        $leaves->update();
        return redirect()->back()->with('message', 'Leave has been approved');
    }

    public function not_approved($leaves)
    {
        $leaves = Leaves::findOrFail($leaves);

        $leaves->status = '0';
        $leaves->update();
        return redirect()->back()->with('message', 'Not Approved leaves');
    }
}
