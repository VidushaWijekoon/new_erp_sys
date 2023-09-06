<?php

namespace App\Livewire\PayrollManagement;

use App\Models\Holiday;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $holidays = Holiday::all();
        return view('livewire.payroll-management.index', ['holidays' => $holidays]);
    }
}
