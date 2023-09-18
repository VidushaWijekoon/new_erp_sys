<?php

namespace App\Http\Livewire\HRM\DocumentManagement;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $deptCount = DB::table('departments')->count(['id']);
        $designCount = DB::table('designations')->count(['id']);
        $empCount = DB::table('employees')->count(['id']);
        return view('livewire.h-r-m.document-management.index', [
            'deptCount' => $deptCount,
            'designCount' => $designCount,
            'empCount' => $empCount,
        ]);
    }
}
