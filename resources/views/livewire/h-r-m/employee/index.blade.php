<div>
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white text-capitalize" id="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Employees') }}</h3>
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
                        <i class="fa-solid fa-users text-white"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            <h4>{{ __('Employees') }}</h4>
                        </span>
                        <span class="info-box-number">
                            <h4>{{ $empCount }}</h4>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <a href="{{ route('employee.create') }}"
                            class="btn btn-sm btn-primary">{{ __('Create New Employee') }}</a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>{{ __('#') }}</th>
                                    <th>{{ __('EMP ID') }}</th>
                                    <th>{{ __('Fullname') }}</th>
                                    <th>{{ __('Contact Number') }}</th>
                                    <th>{{ __('Resident Country') }}</th>
                                    <th>{{ __('Department') }}</th>
                                    <th>{{ __('Designation') }}</th>
                                    <th>{{ __('Join Date') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Created By') }}</th>
                                    <th class="text-center">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x = 1; ?>
                                @forelse ($employees as $employeesItem)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>
                                            <a
                                                href="{{ url('admin/employee/' . $employeesItem->id . '/view_employee') }}">
                                                {{ $employeesItem->id }}
                                            </a>
                                        </td>
                                        <td>
                                            <a
                                                href="{{ url('admin/employee/' . $employeesItem->id . '/view_employee') }}">
                                                {{ $employeesItem->fullname }}
                                            </a>
                                        </td>
                                        <td>{{ $employeesItem->contact_number }}</td>
                                        <td>{{ $employeesItem->resident_country }}</td>
                                        <td>{{ $employeesItem->department_name->department_name }}</td>
                                        <td>{{ $employeesItem->designation_name->designation_name }}</td>
                                        <td>{{ $employeesItem->join_date }}</td>
                                        <td>
                                            @if ($employeesItem->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Not Active</span>
                                            @endif
                                        </td>
                                        <td class="text-capitalize">{{ $employeesItem->created_by_username->username }}
                                        </td>
                                        <td class="table-action">
                                            @if ($employeesItem->status == '1')
                                                <a href="{{ url('admin/employee/' . $employeesItem->id . '/dectivate') }}"
                                                    onclick="return confirm('Are you sure you want to deactivate this employee')"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Deactivate {{ $employeesItem->fullname }}">
                                                    <i class="fa-solid fa-circle-xmark mx-1 text-danger"></i>
                                                </a>
                                            @elseif($employeesItem->status == '0')
                                                <a href="{{ url('admin/employee/' . $employeesItem->id . '/activate') }}"
                                                    onclick="return confirm('Are you sure you want to activate this employee')"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Activate {{ $employeesItem->fullname }}">
                                                    <i class="fa-solid fa-circle-check mx-1 text-success"></i>
                                                </a>
                                            @endif
                                            <a href="{{ url('admin/employee/' . $employeesItem->id . '/show') }}"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Show {{ $employeesItem->fullname }}">
                                                <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                            </a>
                                            <a href="{{ url('admin/employee/' . $employeesItem->id . '/edit') }}"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Edit {{ $employeesItem->fullname }}">
                                                <i class="fa-solid fa-pen mx-1 text-info"></i>
                                            </a>
                                            <a href="{{ url('admin/employee/' . $employeesItem->id . '/destroy') }}"
                                                onclick="return confirm('Are you sure you want to delete this employee')"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Delete {{ $employeesItem->fullname }}">
                                                <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <span class="text-danger">{{ __('Data Not Found') }}</span>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@push('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
