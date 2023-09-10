<?php

namespace App\Livewire\HRM\Employee;

use Livewire\Component;
use App\Models\Employees;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $employees = Employees::all();
        $empCount = DB::table('employees')->count(['id']);
        return view('livewire.h-r-m.employee.index', [
            'employees' => $employees,
            'empCount' => $empCount,
        ]);
    }
}
