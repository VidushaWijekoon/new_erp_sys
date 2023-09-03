<?php

namespace App\Livewire\HRM\Department;

use Livewire\Component;
use App\Models\Departments;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $departments = Departments::orderBy('department_name', 'DESC')->paginate(10);
        return view('livewire.h-r-m.department.index', ['departments' => $departments]);
    }
}
