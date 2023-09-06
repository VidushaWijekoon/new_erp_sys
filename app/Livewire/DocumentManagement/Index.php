<?php

namespace App\Livewire\DocumentManagement;

use Livewire\Component;
use App\Models\Employees;
use App\Models\Departments;
use App\Models\Designations;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $deptlist = Departments::all();
        $deptCount = $deptlist->count();
        $designList = Designations::all();
        $designCount = $designList->count();
        $empList = Employees::all();
        $empCount = $empList->count();

        $departmentList = Departments::orderBy('department_name', 'ASC')->paginate(10);
        $designationList = Designations::orderBy('designation_name', 'ASC')->paginate(10);

        return view('livewire.document-management.index', [
            'deptCount' => $deptCount,
            'designCount' => $designCount,
            'empCount' => $empCount,
            'departmentList' => $departmentList,
            'designationList' => $designationList,
        ]);
    }
}
