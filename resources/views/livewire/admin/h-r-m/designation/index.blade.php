@section('title', 'R-Soft | Designations')
<div>
    @include('livewire.admin.h-r-m.designation.designations-form')
    <button type="button" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#createNewDesgination">
        Create New Designation
    </button>
    <div class="row">
        <div class="col-md-8 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title" style="font-size: 20px"><strong>Designation</strong></h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('Designation Name') }}</th>
                            <th>{{ __('Discription') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Created At') }}</th>
                            <th>{{ __('Created By') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($designation as $designationItem)
                            <tr>
                                <td>{{ $designationItem->id }}</td>
                                <td class="text-capitalize">{{ $designationItem->desgination_name }}</td>
                                <td class="text-capitalize">{{ $designationItem->description }}</td>
                                <td>
                                    @if ($designationItem->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Not Active</span>
                                    @endif
                                </td>
                                <td>{{ $designationItem->created_at }}</td>
                                <td class="text-capitalize">{{ $designationItem->created_by_username->username }}</td>
                                <td class="table-action">
                                    {{-- @if ($designationItem->status == '0')
                                        <a href="#" wire:click="activeStatus({{ $designationItem->id }})"
                                            data-toggle="modal" data-target="#activeStatus">
                                            <i class="fa-solid fa-circle-xmark mx-1 text-danger"></i>
                                        </a>
                                    @elseif($designationItem->status == '1')
                                        <a href="#" wire:click="deactivateStatus({{ $designationItem->id }})"
                                            data-toggle="modal" data-target="#deactivateStatus">
                                            <i class="fa-solid fa-circle-check mx-1 text-success"></i>
                                        </a>
                                    @endif --}}
                                    <a href="#" wire:click="showDesignation({{ $designationItem->id }})"
                                        data-toggle="modal" data-target="#showDesignation">
                                        <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                    </a>
                                    <a href="#" wire:click="editDesignation({{ $designationItem->id }})"
                                        data-toggle="modal" data-target="#editDesignation">
                                        <i class="fa-solid fa-pen mx-1 text-info"></i>
                                    </a>
                                    <a href="#" wire:click="deleteDesignation({{ $designationItem->id }})"
                                        data-toggle="modal" data-target="#destroyDepartment">
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
                    {{ $designation->links() }}
                </div>
            </div>
        </div>

    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#createNewDepartment').modal('hide');
            $('#showDepartment').modal('hide');
            $('#editDepartment').modal('hide');
            $('#deleteDepartment').modal('hide');
        });
    </script>
@endpush
