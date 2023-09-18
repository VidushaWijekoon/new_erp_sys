<?php

namespace App\Http\Livewire\HRM\Designation;

use Livewire\Component;
use App\Models\Designations;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $designation_name, $description, $designation_id;

    public function rules()
    {
        return [
            'designation_name' => 'required|string',
            'description' => 'required|string',
        ];
    }

    // Empty the all the fields after submit the fields
    public function resetInput()
    {
        $this->designation_name = NULL;
        $this->description = NULL;
        $this->designation_id = NULL;
    }

    public function storeDesignation()
    {
        $validatedData = $this->validate();
        Designations::create([
            'designation_name' => $this->designation_name,
            'description' => $this->description,
            'status' => '0',
            'created_by' => Auth::user()->id,
        ]);

        session()->flash('message', 'Designation Created Successfully');
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

    public function show(int $designation_id)
    {
        $this->designation_id = $designation_id;
        $designation = Designations::findOrFail($designation_id);
        $this->designation_name = $designation->designation_name;
        $this->description = $designation->description;
    }

    public function edit(int $designation_id)
    {
        $this->designation_id = $designation_id;
        $designation = Designations::findOrFail($designation_id);
        $this->designation_name = $designation->designation_name;
        $this->description = $designation->description;
    }

    public function editDesignation()
    {
        $validatedData = $this->validate();
        Designations::findOrFail($this->designation_id)->update([
            'designation_name' => $this->designation_name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Designation Has Been Updated Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function deleteDesignation(int $designation_id)
    {
        $this->designation_id = $designation_id;
    }

    public function detroyDepartment()
    {
        if (!Auth::user()->role == '1') {
            Designations::findOrFail($this->designation_id)->delete();
            session()->flash('message', 'Designation Has Been Deleted Successfully');
        } else {
            session()->flash('message', 'You Cannot Remove this Role');
        };
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function render()
    {
        $designCount = DB::table('designations')->count(['id']);
        $designations = Designations::orderBy('id', 'ASC')->paginate('15');
        return view('livewire.h-r-m.designation.index', ['designations' => $designations, 'designCount' => $designCount])
            ->extends('layouts.admin.app')
            ->section('content');
    }
}