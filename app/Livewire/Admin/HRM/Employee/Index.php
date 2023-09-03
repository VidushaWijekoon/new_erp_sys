<?php

namespace App\Livewire\Admin\HRM\Employee;

use Livewire\Component;
use App\Models\Employees;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $employees = Employees::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.h-r-m.employee.index', ['employees' => $employees]);
    }
}
