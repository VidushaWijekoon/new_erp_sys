<?php

namespace App\Livewire\Payroll\Holidays;

use App\Models\Holiday;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $holidays = Holiday::orderBy('holiday_date', 'ASC')->paginate(20);
        return view('livewire.payroll.holidays.index', ['holidays' => $holidays]);
    }
}
