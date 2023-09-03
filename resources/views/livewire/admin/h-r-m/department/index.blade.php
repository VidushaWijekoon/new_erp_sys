@section('title', 'R-Soft | Departments')
<div>
    @include('livewire.admin.h-r-m.department.department-form')
    <button type="button" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#createNewDepartment">
        Create New Department
    </button>
    <div class="row">
        <div class="col-md-8 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title" style="font-size: 20px"><strong>Department</strong></h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('Department Name') }}</th>
                            <th>{{ __('Discription') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Created At') }}</th>
                            <th>{{ __('Created By') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dapartments as $departmentItem)
                            <tr>
                                <td>{{ $departmentItem->id }}</td>
                                <td class="text-capitalize">{{ $departmentItem->department_name }}</td>
                                <td class="text-capitalize">{{ $departmentItem->description }}</td>
                                <td>
                                    @if ($departmentItem->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Not Active</span>
                                    @endif
                                </td>
                                <td>{{ $departmentItem->created_at }}</td>
                                <td class="text-capitalize">{{ $departmentItem->created_by_username->username }}</td>
                                <td class="table-action">
                                    {{-- @if ($departmentItem->status == '0')
                                        <a href="#" wire:click="activeStatus({{ $departmentItem->id }})"
                                            data-toggle="modal" data-target="#activeStatus">
                                            <i class="fa-solid fa-circle-xmark mx-1 text-danger"></i>
                                        </a>
                                    @elseif($departmentItem->status == '1')
                                        <a href="#" wire:click="deactivateStatus({{ $departmentItem->id }})"
                                            data-toggle="modal" data-target="#deactivateStatus">
                                            <i class="fa-solid fa-circle-check mx-1 text-success"></i>
                                        </a>
                                    @endif --}}
                                    <a href="#" wire:click="showDepartment({{ $departmentItem->id }})"
                                        data-toggle="modal" data-target="#showDepartment">
                                        <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                    </a>
                                    <a href="#" wire:click="editDepartment({{ $departmentItem->id }})"
                                        data-toggle="modal" data-target="#editDepartment">
                                        <i class="fa-solid fa-pen mx-1 text-info"></i>
                                    </a>
                                    <a href="#" wire:click="deleteDepartment({{ $departmentItem->id }})"
                                        data-toggle="modal" data-target="#deleteDepartment">
                                        <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                    </a>

                                </td>
                            @empty
                                <span>No Found!</span>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mx-3 mt-2">
                    {{ $dapartments->links() }}
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#createNewDesgination').modal('hide');
            $('#showDesignation').modal('hide');
            $('#editDesignation').modal('hide');
            $('#deleteDesgination').modal('hide');
        });
    </script>
@endpush
