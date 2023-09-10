<?php

namespace App\Livewire\HRM\Designation;

use Livewire\Component;
use App\Models\Designations;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $deptCount = DB::table('designations')->count(['id']);
        $designation = Designations::orderBy('designation_name', 'ASC')->paginate(20);
        return view(
            'livewire.h-r-m.designation.index',
            [
                'designation' => $designation,
                'deptCount' => $deptCount,
            ]
        );
    }
}
