<?php

namespace App\Http\Controllers\Admin\Payroll;

use App\Models\Holiday;
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
        $allholidays = Holiday::all();
        return view('pages.payroll_management.holidays.create', ['allholidays' => $allholidays]);
    }

    public function store(HolidayRequestForm $request)
    {
        $validatedData = $request->validated();
        $holidays = new Holiday();

        $holidays->holiday_name = strtolower($validatedData['holiday_name']);
        $holidays->holiday_date = $validatedData['holiday_date'];
        $holidays->holiday_special_note = strtolower($validatedData['holiday_special_note']);
        $holidays->status = '0';
        $holidays->created_by = Auth::user()->id;

        $holidays->save();
        return redirect(route('holiday.index'))->with('message', 'New Holiday Has Been Created Successfully');
    }

    public function show($holiday)
    {
        $holiday = Holiday::findOrFail($holiday);
        return view('pages.payroll_management.holidays.show', ['holiday' => $holiday]);
    }

    public function edit($holiday)
    {
        $holidays = Holiday::findOrFail($holiday);
        $allholidays = Holiday::all();
        return view('pages.payroll_management.holidays.edit', ['holidays' => $holidays, 'allholidays' => $allholidays]);
    }

    public function update(HolidayRequestForm $request, $holiday)
    {
        $validatedData = $request->validated();
        $holidays = Holiday::findOrFail($holiday);

        $holidays->holiday_name = strtolower($validatedData['holiday_name']);
        $holidays->holiday_date = $validatedData['holiday_date'];
        $holidays->holiday_special_note = strtolower($validatedData['holiday_special_note']);
        $holidays->status = '0';
        $holidays->created_by = Auth::user()->id;

        $holidays->update();
        return redirect(route('holiday.index'))->with('message', 'Holiday Has Been Updated Successfully');
    }

    public function destroy($holiday)
    {
        $holiday = Holiday::findOrFail($holiday);

        $holiday->delete();
        return redirect()->back()->with('message', 'Holiday has been removed');
    }
}
