<?php

namespace App\Http\Livewire\Payroll\PayrollManagement;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public function render()
    {
        $holidaysCount = DB::table('holidays')->count(['id']);
        return view('livewire.payroll.payroll-management.index', ['holidaysCount' => $holidaysCount]);
    }
}
