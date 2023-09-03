<?php

namespace App\Livewire\Admin\HRM\Department;

use Livewire\Component;
use App\Models\Departments;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $department_name, $description, $department_id;

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
        $this->department_id = NULL;
    }

    public function storeDepartment()
    {
        $validatedData = $this->validate();
        Departments::create([
            'department_name' => $this->department_name,
            'description' => $this->description,
            'status' => '1',
            'created_by' => Auth::user()->id,
        ]);

        session()->flash('message', 'Department Added Successfully');
        // $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function showDepartment(int $department_id)
    {
        $this->department_id = $department_id;
        $department = Departments::findOrFail($department_id);
        $this->department_name = $department->department_name;
        $this->description = $department->description;
    }

    public function editDepartment(int $department_id)
    {
        $this->department_id = $department_id;
        $department = Departments::findOrFail($department_id);
        $this->department_name = $department->department_name;
        $this->description = $department->description;
    }

    public function updateDepartment()
    {
        $validatedData = $this->validate();
        Departments::findOrFail($this->department_id)->update([
            'department_name' => $this->department_name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Department Updated Successfully');
        // $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function deleteDepartment($department_id)
    {
        $this->department_id = $department_id;
    }

    public function destroyDepartment()
    {
        Departments::findOrFail($this->department_id)->delete();
        session()->flash('message', 'Department Deleted Successfully');
        // $this->dispatchBrowserEvent('close-modal');
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
        $dapartments = Departments::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.h-r-m.department.index', ['dapartments' => $dapartments])
            ->extends('layouts.admin.app')
            ->section('content');
    }
}
