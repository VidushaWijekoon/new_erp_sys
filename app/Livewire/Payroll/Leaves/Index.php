<?php

namespace App\Livewire\Payroll\Leaves;

use App\Models\Leaves;
use Livewire\Component;
use App\Models\Employees;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $leaves = Leaves::where('created_by', Auth::user()->id)->orderBy('created_at', 'ASC')->get();
        $leave_count = Leaves::select('number_of_days')->where('created_by', Auth::user()->id)->sum('number_of_days');
        $approve_leave_count = Leaves::select('id')->where('created_by', Auth::user()->id)->where('status', '1')->count(['id']);
        $not_approve_leave_count = Leaves::select('id')->where('created_by', Auth::user()->id)->where('status', '0')->count(['id']);
        $year_leaves = Employees::select('year_leaves')->where('created_by', Auth::user()->id)->sum('year_leaves');

        return view('livewire.payroll.leaves.index', [
            'leaves' => $leaves,
            'leave_count' => $leave_count,
            'approve_leave_count' => $approve_leave_count,
            'not_approve_leave_count' => $not_approve_leave_count,
            'year_leaves' => $year_leaves,
        ]);
    }
}
