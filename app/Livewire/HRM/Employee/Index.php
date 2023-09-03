<?php

namespace App\Livewire\HRM\Employee;

use App\Models\Employees;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $employees = Employees::orderBy('id', 'ASC')->paginate(20);
        return view('livewire.h-r-m.employee.index', ['employees' => $employees]);
    }
}
