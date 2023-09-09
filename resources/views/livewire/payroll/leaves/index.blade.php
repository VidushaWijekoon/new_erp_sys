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
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info">
                        <i class="fa-solid fa-file-invoice text-white"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            <h4>{{ __('Leaves') }}</h4>
                        </span>
                        <span class="info-box-number">
                            <h4>1450</h4>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success">
                        <i class="fa-solid fa-file-invoice text-white"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            <h4>{{ __('Approved') }}</h4>
                        </span>
                        <span class="info-box-number">
                            <h4>2</h4>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-danger">
                        <i class="fa-solid fa-file-invoice text-white"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            <h4>{{ __('Not Approved') }}</h4>
                        </span>
                        <span class="info-box-number">
                            <h4>2</h4>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-secondary">
                        <i class="fa-solid fa-file-invoice text-white"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            <h4>{{ __('Remaining Leaves') }}</h4>
                        </span>
                        <span class="info-box-number">
                            <h4>4/12</h4>
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
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <a href="{{ route('leaves.create') }}"
                            class="btn btn-sm btn-primary">{{ __('Create New Leaves') }}</a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
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
