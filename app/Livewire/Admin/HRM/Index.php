<?php

namespace App\Livewire\Admin\HRM;

use App\Models\Departments;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $department_name, $description;

    public function rules()
    {
        return [
            'department_name' => 'required|string',
            'description' => 'required|string',
        ];
    }

    public function resetInput()
    {
        $this->department_name = NULL;
        $this->description = NULL;
    }

    public function storeDepartment()
    {
        $validatedData = $this->validate();
        Departments::created([
            'department_name' => $this->department_name,
            'description' => $this->description,
            'status' => '0',
            'created_by' => Auth::user()->id,
        ]);

        session()->flash('message', 'Department Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

    public function render()
    {
        return view('livewire.admin.h-r-m.index')
            ->extends('layouts.admin.app')
            ->section('content');
    }
}
