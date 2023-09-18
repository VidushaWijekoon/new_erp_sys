<?php

namespace App\Http\Livewire\Payroll\Attendance;

use Livewire\Component;
use App\Models\Employees;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $all_active_employee = Employees::where('status', '=', '1')->get();
        return view('livewire.payroll.attendance.index', ['all_active_employee' => $all_active_employee]);
    }
}
