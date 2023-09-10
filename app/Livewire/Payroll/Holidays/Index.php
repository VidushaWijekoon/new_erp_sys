<?php

namespace App\Livewire\Payroll\Holidays;

use App\Models\Holiday;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $holidaysCount = DB::table('holidays')->count(['id']);
        $holidays = Holiday::orderBy('holiday_date', 'ASC')->paginate(20);

        return view('livewire.payroll.holidays.index', [
            'holidays' => $holidays,
            'holidaysCount' => $holidaysCount,
        ]);
    }
}
