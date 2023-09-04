<?php

namespace App\Http\Controllers\Admin\Payroll;

use App\Models\Holiday;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Payroll\HolidayRequestForm;

class HolidaysController extends Controller
{
    public function index()
    {
        return view('pages.payroll_management.holidays.index');
    }

    public function create()
    {
        $holiday = Holiday::all();
        return view('pages.payroll_management.holidays.create', ['holiday' => $holiday]);
    }

    public function store(HolidayRequestForm $request)
    {
        dd($request);
        $validatedData = $request->validated();
        $holiday = new Holiday();

        $holiday->holiday_name = strtolower($validatedData['holiday_name']);
        $holiday->holiday_date = strtolower($validatedData['holiday_date']);
        $holiday->holiday_special_note = strtolower($validatedData['holiday_special_note']);
        $holiday->status = '1';
        $holiday->created_by = Auth::user()->id;

        $holiday->save();
        return redirect(route('holiday.index'))->with('message', 'New Holiday Created Successfully');
    }
}
