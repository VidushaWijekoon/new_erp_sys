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
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Employee Salary') }}</h3>
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
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Employee</th>
                                <th>Employee ID</th>
                                <th>Join Date</th>
                                <th>Salary</th>
                                <th>Created By</th>
                                <th>Pay Slip</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="{{ route('employee-salary.create') }}">Vidusha Wijekoon</a>
                                </td>
                                <td>0001</td>
                                <td>2023-10-23</td>
                                <td>$2302</td>
                                <td>
                                    <a href="{{ route('employee-salary.payslip') }}"
                                        class="btn btn-white btn-sm btn-outline-info">
                                        <i class="fa-solid fa-file-pdf mx-1"></i>
                                        Salary Slip
                                    </a>
                                </td>
                                <td class="text-capitalize">Admin</td>
                                <td class="table-action">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Show">
                                        <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Edit">
                                        <i class="fa-solid fa-pen mx-1 text-info"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"
                                        onclick="return confirm('Are you sure you want to delete this employee')">
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
