<?php

namespace App\Livewire\HRMDashboard;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public function render()
    {
        $deptCount = DB::table('departments')->count(['id']);
        $designCount = DB::table('designations')->count(['id']);
        $empCount = DB::table('employees')->count(['id']);

        return view(
            'livewire.h-r-m-dashboard.index',
            [
                "deptCount" => $deptCount,
                "designCount" => $designCount,
                "empCount" => $empCount,
            ]
        );
    }
}