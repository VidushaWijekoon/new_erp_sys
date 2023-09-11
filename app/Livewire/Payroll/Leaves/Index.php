<?php

namespace App\Livewire\Payroll\Leaves;

use App\Models\Leaves;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $leaves = Leaves::orderBy('created_at', 'ASC')->get();
        return view('livewire.payroll.leaves.index', [
            'leaves' => $leaves
        ]);
    }
}
