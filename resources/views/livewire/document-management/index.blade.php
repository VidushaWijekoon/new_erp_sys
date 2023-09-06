<div>

    <!--------------------------------------------------------------
    # Info
    ---------------------------------------------------------------->
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('HRM') }}</strong> {{ __('Dashboard') }}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12 d-flex">
                <div class="w-100">

                    <div class="row">
                        <div class="col-sm-3">
                            <a href="{{ route('department.index') }}">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">{{ __('Departments') }}</h1>
                                        <div class="mb-1">
                                            <span class="text-danger">
                                                <h1 class="text-danger">{{ $deptCount }}</h1>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="{{ route('designation.index') }}">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">{{ __('Designations') }}</h1>
                                        <div class="mb-1">
                                            <span>
                                                <h1 class="text-danger">{{ $designCount }}</h1>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="{{ route('employee.index') }}">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">{{ __('Employees') }}</h1>
                                        <div class="mb-1">
                                            <span>
                                                <h1 class="text-danger">{{ $empCount }}</h1>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <!--------------------------------------------------------------
            # Department
            ---------------------------------------------------------------->
            <div class="col-xl-6 col-md-12 col-sm-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <a href="{{ route('department.create') }}"
                            class="btn btn-sm btn-primary">{{ __('Create New Department') }}</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>{{ __('#') }}</th>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Department Name') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th class="text-center">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x = 1; ?>
                                @forelse ($departmentList as $departmentItem)
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
                                        <td>
                                            @if ($departmentItem->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Not Active</span>
                                            @endif
                                        </td>
                                        <td class="table-action">
                                            @if ($departmentItem->status == '1')
                                                <a href="{{ url('admin/department/' . $departmentItem->id . '/dectivate') }}"
                                                    onclick="return confirm('Are you sure you want to deactivate this department')"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Deactivate {{ $departmentItem->department_name }} Department">
                                                    <i class="fa-solid fa-circle-xmark mx-1 text-danger"></i>
                                                </a>
                                            @elseif($departmentItem->status == '0')
                                                <a href="{{ url('admin/department/' . $departmentItem->id . '/activate') }}"
                                                    onclick="return confirm('Are you sure you want to activate this department')"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Activate {{ $departmentItem->department_name }} Department">
                                                    <i class="fa-solid fa-circle-check mx-1 text-success"></i>
                                                </a>
                                            @endif
                                            <a href="{{ url('admin/department/' . $departmentItem->id . '/show') }}"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Show {{ $departmentItem->department_name }} Department">
                                                <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                            </a>
                                            <a href="{{ url('admin/department/' . $departmentItem->id . '/edit') }}"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Edit {{ $departmentItem->department_name }} Department">
                                                <i class="fa-solid fa-pen mx-1 text-info"></i>
                                            </a>
                                            <a href="{{ url('admin/department/' . $departmentItem->id . '/destroy') }}"
                                                onclick="return confirm('Are you sure you want to delete this department')"
                                                wire:data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Remove {{ $departmentItem->department_name }} Department">
                                                <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                            </a>
                                        </td>
                                    @empty
                                        <span class="text-danger">{{ __('No Found!') }}</span>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end mx-3 mt-2">
                        {{ $departmentList->links() }}
                    </div>
                </div>
            </div>

            <!--------------------------------------------------------------
            # Designation
            ---------------------------------------------------------------->
            <div class="col-xl-6 col-md-12 col-sm-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <a href="{{ route('designation.create') }}"
                            class="btn btn-sm btn-primary">{{ __('Create New Designation') }}</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>{{ __('#') }}</th>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Designation Name') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th class="text-center">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x = 1; ?>
                                @forelse ($designationList as $designationList)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>
                                            <a
                                                href="{{ url('admin/designation/' . $designationList->id . '/department') }}">
                                                {{ $designationList->id }}
                                            </a>
                                        </td>
                                        <td class="text-capitalize">
                                            <a
                                                href="{{ url('admin/designation/' . $designationList->id . '/department') }}">
                                                {{ $designationList->designation_name }}</a>
                                        </td>

                                        <td>
                                            @if ($designationList->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Not Active</span>
                                            @endif
                                        </td>
                                        <td class="table-action">
                                            @if ($designationList->status == '1')
                                                <a href="{{ url('admin/designation/' . $designationList->id . '/dectivate') }}"
                                                    onclick="return confirm('Are you sure you want to deactivate this designation')"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Deactivate {{ $designationList->designation_name }} Designation">
                                                    <i class="fa-solid fa-circle-xmark mx-1 text-danger"></i>
                                                </a>
                                            @elseif($designationList->status == '0')
                                                <a href="{{ url('admin/designation/' . $designationList->id . '/activate') }}"
                                                    onclick="return confirm('Are you sure you want to activate this designation')"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Activate {{ $designationList->designation_name }} Designation">
                                                    <i class="fa-solid fa-circle-check mx-1 text-success"></i>
                                                </a>
                                            @endif
                                            <a href="{{ url('admin/designation/' . $designationList->id . '/show') }}"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Show {{ $designationList->designation_name }} Designation">
                                                <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                            </a>
                                            <a href="{{ url('admin/designation/' . $designationList->id . '/edit') }}"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Edit {{ $designationList->designation_name }} Designation">
                                                <i class="fa-solid fa-pen mx-1 text-info"></i>
                                            </a>
                                            <a href="{{ url('admin/designation/' . $designationList->id . '/destroy') }}"
                                                onclick="return confirm('Are you sure you want to delete this designation')"
                                                wire:data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Remove {{ $designationList->designation_name }} Designation">
                                                <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                            </a>
                                        </td>
                                    @empty
                                        <span class="text-danger">{{ __('No Found!') }}</span>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-end mx-3 mt-2">
                        {{ $departmentList->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
