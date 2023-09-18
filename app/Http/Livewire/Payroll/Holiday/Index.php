<?php

namespace App\Http\Livewire\Payroll\Holiday;

use App\Models\Holiday;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $holiday_name, $holiday_date, $holiday_special_note, $holiday_id;

    public function rules()
    {
        return [
            'holiday_name' => 'required|string',
            'holiday_date' => 'required|string',
            'holiday_special_note' => 'required|string',
        ];
    }

    // Empty the all the fields after submit the fields
    public function resetInput()
    {
        $this->holiday_name = NULL;
        $this->holiday_date = NULL;
        $this->holiday_special_note = NULL;
        $this->holiday_id = NULL;
    }

    public function storeHoliday()
    {
        $validatedData = $this->validate();
        Holiday::create([
            'holiday_name' => $this->holiday_name,
            'holiday_date' => $this->holiday_date,
            'holiday_special_note' => $this->holiday_special_note,
            'created_by' => Auth::user()->id,
        ]);

        session()->flash('message', 'Holiday Created Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

    public function show(int $holiday_id)
    {
        $this->holiday_id = $holiday_id;
        $holiday = Holiday::findOrFail($holiday_id);
        $this->holiday_name = $holiday->holiday_name;
        $this->holiday_date = $holiday->holiday_date;
        $this->holiday_special_note = $holiday->holiday_special_note;
    }

    public function edit(int $holiday_id)
    {
        $this->holiday_id = $holiday_id;
        $holiday = Holiday::findOrFail($holiday_id);
        $this->holiday_name = $holiday->holiday_name;
        $this->holiday_date = $holiday->holiday_date;
        $this->holiday_special_note = $holiday->holiday_special_note;
    }

    public function editHoliday()
    {
        $validatedData = $this->validate();
        Holiday::findOrFail($this->holiday_id)->update([
            'holiday_name' => $this->holiday_name,
            'holiday_date' => $this->holiday_date,
            'holiday_special_note' => $this->holiday_special_note,
        ]);

        session()->flash('message', 'Holiday Has Been Updated Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function deleteHoliday(int $holiday_id)
    {
        $this->holiday_id = $holiday_id;
    }

    public function detroyHoliday()
    {
        Holiday::findOrFail($this->holiday_id)->delete();
        session()->flash('message', 'Holiday Has Been Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function render()
    {
        $holidaysCount = DB::table('holidays')->count(['id']);
        $holidays = Holiday::orderBy('holiday_date', 'ASC')->paginate(20);
        return view(
            'livewire.payroll.holiday.index',
            [
                'holidays' => $holidays,
                'holidaysCount' => $holidaysCount,
            ]
        )
            ->extends('layouts.admin.app')
            ->section('content');
    }
}
