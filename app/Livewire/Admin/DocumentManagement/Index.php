<?php

namespace App\Livewire\Admin\DocumentManagement;

use App\Models\Departments;
use App\Models\Designations;
use App\Models\Employees;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $department_name, $description, $department_id;

    public function render()
    {
        $deptlist = Departments::where('status', '1')->get();
        $deptCount = $deptlist->count();
        $designList = Designations::where('status', '1')->get();
        $designCount = $designList->count();
        $empList = Employees::where('status', '1')->get();
        $empCount = $empList->count();
        $departments = Departments::orderBy('id', 'ASC')->paginate('10');
        return view(
            'livewire.admin.document-management.index',
            [
                'departments' => $departments,
                'deptCount' => $deptCount,
                'designCount' => $designCount,
                'empCount' => $empCount
            ]
        );
    }
}
