<div>
    @include('livewire.h-r-m.department.department-form')
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Departments') }}</h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('document-management.index') }}">
                        <i class="fa-solid fa-home fa-2x text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info">
                        <i class="fa-solid fa-file-invoice text-white"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            <h4>{{ __('Departments') }}</h4>
                        </span>
                        <span class="info-box-number">
                            <h4>{{ $deptCount }}</h4>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal"
                            data-target="#createDepartment">{{ __('Create New Department') }}</a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>{{ __('#') }}</th>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Department Name') }}</th>
                                    <th>{{ __('Discription') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Created At') }}</th>
                                    <th>{{ __('Created By') }}</th>
                                    <th class="text-center">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x = 1; ?>
                                @forelse ($departments as $departmentItem)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>
                                            <a
                                                href="{{ url('admin/department/' . $departmentItem->id . '/department') }}">
                                                {{ $departmentItem->id }}
                                            </a>
                                        </td>
                                        <td class="text-capitalize">
                                            <a
                                                href="{{ url('admin/department/' . $departmentItem->id . '/department') }}">
                                                {{ $departmentItem->department_name }}</a>
                                        </td>
                                        <td class="text-capitalize">
                                            <a
                                                href="{{ url('admin/department/' . $departmentItem->id . '/department') }}">
                                                {{ $departmentItem->description }}</a>
                                        </td>
                                        <td>
                                            @if ($departmentItem->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Not Active</span>
                                            @endif
                                        </td>
                                        <td>{{ $departmentItem->created_at }}</td>
                                        <td class="text-capitalize">
                                            {{ $departmentItem->created_by_username->username }}
                                        </td>
                                        <td class="table-action">
                                            @if ($departmentItem->status == '1')
                                                <a href="{{ url('admin/department/' . $departmentItem->id . '/dectivate') }}"
                                                    onclick="return confirm('Are you sure you want to deactivate this department')"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Deactivate {{ $departmentItem->department_name }}">
                                                    <i class="fa-solid fa-circle-xmark mx-1 text-danger"></i>
                                                </a>
                                            @elseif($departmentItem->status == '0')
                                                <a href="{{ url('admin/department/' . $departmentItem->id . '/activate') }}"
                                                    onclick="return confirm('Are you sure you want to activate this department')"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Activate {{ $departmentItem->department_name }} ">
                                                    <i class="fa-solid fa-circle-check mx-1 text-success"></i>
                                                </a>
                                            @endif
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                wire:click="show({{ $departmentItem->id }})" data-toggle="modal"
                                                data-target="#showDepartment"
                                                title="Show {{ $departmentItem->department_name }}">
                                                <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                wire:click="edit({{ $departmentItem->id }})" data-toggle="modal"
                                                data-target="#editDepartment"
                                                title="Edit {{ $departmentItem->department_name }}">
                                                <i class="fa-solid fa-pen mx-1 text-info"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-toggle="modal" data-target="#deleteDepartment"
                                                wire:click="deleteDepartment({{ $departmentItem->id }})"
                                                title="Delete {{ $departmentItem->department_name }}">
                                                <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                            </a>
                                        </td>
                                    @empty
                                        <span class="text-danger">{{ __('No Found!') }}</span>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex float-end justify-content-end">
                            {{ $departments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#createDepartment').modal('hide');
            $('#showDepartment').modal('hide');
            $('#editDepartment').modal('hide');
            $('#deleteDepartment').modal('hide');
        });
    </script>
@endpush
