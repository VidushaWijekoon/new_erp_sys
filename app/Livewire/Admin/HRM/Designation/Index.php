<?php

namespace App\Livewire\Admin\HRM\Designation;

use Livewire\Component;
use App\Models\Designations;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $desgination_name, $description, $designation_id;

    public function rules()
    {
        return [
            'desgination_name' => 'required|string',
            'description' => 'required|string',
        ];
    }

    public function resetInput()
    {
        $this->desgination_name = NULL;
        $this->description = NULL;
        $this->designation_id = NULL;
    }

    public function createDesignation()
    {
        $validatedData = $this->validate();
        Designations::create([
            'desgination_name' => $this->desgination_name,
            'description' => $this->description,
            'status' => '1',
            'created_by' => Auth::user()->id,
        ]);

        session()->flash('message', 'Designations Added Successfully');
        // $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function showDesignation(int $designation_id)
    {
        $this->designation_id = $designation_id;
        $desgination = Designations::findOrFail($designation_id);
        $this->desgination_name = $desgination->desgination_name;
        $this->description = $desgination->description;
    }

    public function editDesignation(int $designation_id)
    {
        $this->designation_id = $designation_id;
        $desgination = Designations::findOrFail($designation_id);
        $this->desgination_name = $desgination->desgination_name;
        $this->description = $desgination->description;
    }

    public function updateDesgination()
    {
        $validatedData = $this->validate();
        Designations::findOrFail($this->designation_id)->update([
            'desgination_name' => $this->desgination_name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Designations Updated Successfully');
        // $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function deleteDesignation($designation_id)
    {
        $this->designation_id = $designation_id;
    }

    public function destroyDepartment()
    {
        Designations::findOrFail($this->designation_id)->delete();
        session()->flash('message', 'Designation Deleted Successfully');
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
        $designation = Designations::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.h-r-m.designation.index', ['designation' => $designation])
            ->extends('layouts.admin.app')
            ->section('content');
    }
}
