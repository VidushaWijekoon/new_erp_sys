<?php

namespace App\Livewire\HRM\Department;

use Livewire\Component;
use App\Models\Departments;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $deptCount = DB::table('departments')->count(['id']);
        $departments = Departments::orderBy('id', 'ASC')->get();

        return view(
            'livewire.h-r-m.department.index',
            [
                'departments' => $departments,
                'deptCount' => $deptCount,
            ]
        );
    }
}
