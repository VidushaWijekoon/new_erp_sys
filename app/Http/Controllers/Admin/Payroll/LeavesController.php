<?php

namespace App\Http\Controllers\Admin\Payroll;

use App\Models\Leaves;
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
        return view('pages.payroll_management.leaves.create');
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
}
