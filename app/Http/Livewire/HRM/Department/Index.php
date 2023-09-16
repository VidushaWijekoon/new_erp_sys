<?php

namespace App\Http\Livewire\HRM\Department;

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

    // Empty the all the fields after submit the fields
    public function resetInput()
    {
        $this->department_name = NULL;
        $this->description = NULL;
    }

    public function storeDepartment()
    {
        $validatedData = $this->validate();
        Departments::create([
            'department_name' => $this->department_name,
            'description' => $this->description,
            'status' => '0',
            'created_by' => Auth::user()->id,
        ]);

        session()->flash('message', 'Department Created Successfully');
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

    public function show(int $department_id)
    {
        $this->department_id = $department_id;
        $department = Departments::findOrFail($department_id);
        $this->department_name = $department->department_name;
        $this->description = $department->description;
    }

    public function edit(int $department_id)
    {
        $this->department_id = $department_id;
        $department = Departments::findOrFail($department_id);
        $this->department_name = $department->department_name;
        $this->description = $department->description;
    }

    public function editDepartment()
    {
        $validatedData = $this->validate();
        Departments::findOrFail($this->department_id)->update([
            'department_name' => $this->department_name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Department Has Been Updated Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function deleteDepartment(int $department_id)
    {
        $this->department_id = $department_id;
    }

    public function detroyDepartment()
    {
        Departments::findOrFail($this->department_id)->delete();
        session()->flash('message', 'Department Has Been Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function render()
    {
        $departments = Departments::orderBy('id', 'DESC')->paginate('10');
        return view('livewire.h-r-m.department.index', ['departments' => $departments])
            ->extends('layouts.admin.app')
            ->section('content');
    }
}
