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
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Leaves') }}</h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('payroll-management.index') }}">
                        <i class="fa-solid fa-home fa-2x text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <a href="{{ route('leaves.create') }}"
                            class="btn btn-sm btn-primary">{{ __('Create New Leaves') }}</a>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Employee</th>
                                <th>Leaves Type</th>
                                <th>From</th>
                                <th>To</th>
                                <th>No of Days</th>
                                <th>Reason</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Project Apollo</td>
                                <td>Casual Leave</td>
                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                <td>2</td>
                                <td class="d-none d-md-table-cell">Personal Reason</td>
                                <td>
                                    <span class="badge badge-danger">Not Approved</span>
                                </td>
                                <td class="table-action">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Show">
                                        <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Edit">
                                        <i class="fa-solid fa-pen mx-1 text-info"></i>
                                    </a>
                                    <a href="#"
                                        onclick="return confirm('Are you sure you want to delete this employee')"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Project Apollo</td>
                                <td>Casual Leave</td>
                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                <td>2</td>
                                <td class="d-none d-md-table-cell">Personal Reason</td>
                                <td>
                                    <span class="badge badge-danger">Not Approved</span>
                                </td>
                                <td class="table-action">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Show">
                                        <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Edit">
                                        <i class="fa-solid fa-pen mx-1 text-info"></i>
                                    </a>
                                    <a href="#"
                                        onclick="return confirm('Are you sure you want to delete this employee')"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Project Apollo</td>
                                <td>Casual Leave</td>
                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                <td>2</td>
                                <td class="d-none d-md-table-cell">Personal Reason</td>
                                <td>
                                    <span class="badge badge-danger">Not Approved</span>
                                </td>
                                <td class="table-action">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Show">
                                        <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Edit">
                                        <i class="fa-solid fa-pen mx-1 text-info"></i>
                                    </a>
                                    <a href="#"
                                        onclick="return confirm('Are you sure you want to delete this employee')"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Project Apollo</td>
                                <td>Casual Leave</td>
                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                <td>2</td>
                                <td class="d-none d-md-table-cell">Personal Reason</td>
                                <td>
                                    <span class="badge badge-danger">Not Approved</span>
                                </td>
                                <td class="table-action">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Show">
                                        <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Edit">
                                        <i class="fa-solid fa-pen mx-1 text-info"></i>
                                    </a>
                                    <a href="#"
                                        onclick="return confirm('Are you sure you want to delete this employee')"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Project Apollo</td>
                                <td>Casual Leave</td>
                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                <td>2</td>
                                <td class="d-none d-md-table-cell">Personal Reason</td>
                                <td>
                                    <span class="badge badge-danger">Not Approved</span>
                                </td>
                                <td class="table-action">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Show">
                                        <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Edit">
                                        <i class="fa-solid fa-pen mx-1 text-info"></i>
                                    </a>
                                    <a href="#"
                                        onclick="return confirm('Are you sure you want to delete this employee')"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Project Apollo</td>
                                <td>Casual Leave</td>
                                <td class="d-none d-xl-table-cell">01/01/2020</td>
                                <td class="d-none d-xl-table-cell">31/06/2020</td>
                                <td>2</td>
                                <td class="d-none d-md-table-cell">Personal Reason</td>
                                <td>
                                    <span class="badge badge-danger">Not Approved</span>
                                </td>
                                <td class="table-action">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Show">
                                        <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Edit">
                                        <i class="fa-solid fa-pen mx-1 text-info"></i>
                                    </a>
                                    <a href="#"
                                        onclick="return confirm('Are you sure you want to delete this employee')"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                    </a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
