<?php

namespace App\Livewire\HRM\Designation;

use App\Models\Designations;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $designation = Designations::orderBy('designation_name', 'DESC')->paginate(10);
        return view('livewire.h-r-m.designation.index', ['designation' => $designation]);
    }
}
