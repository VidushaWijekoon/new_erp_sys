<div>
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">Sales</strong> Quoatations</h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('sales.dashboard') }}">
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
                            <h4>{{ __('Quoatations') }}</h4>
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
                    <span class="info-box-icon bg-danger">
                        <i class="fa-solid fa-file-invoice text-white"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            <h4>{{ __('Customer Reject') }}</h4>
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
                            <h4>{{ __('Customer Accept') }}</h4>
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
                    <span class="info-box-icon bg-primary">
                        <i class="fa-solid fa-file-invoice text-white"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            <h4>{{ __('Customer Pending') }}</h4>
                        </span>
                        <span class="info-box-number">
                            <h4>1450</h4>
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
                        <a href="{{ route('quotation.create') }}" class="btn btn-sm btn-primary">Create New
                            Quoatation</a>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Quoatation ID</th>
                                <th>Customer name</th>
                                <th>Contact Number</th>
                                <th>Resident Country</th>
                                <th>Company Name</th>
                                <th>Created At</th>
                                <th>Created By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="#">
                                        0017
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/customer/' . '12' . '/view_customer') }}">
                                        Vidusha Wijekoon
                                    </a>
                                </td>
                                <td>+9182534586</td>
                                <td>Sri Lanka</td>
                                <td>RTech Cooparation</td>
                                <td>2023-09-14</td>
                                <td class="text-capitalize">admin</td>
                                <td class="table-action">
                                    <a href="#"
                                        onclick="return confirm('Are you sure you want to deactivate this employee')">
                                        <i class="fa-solid fa-circle-xmark mx-1 text-danger"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-pen mx-1 text-info"></i>
                                    </a>
                                    <a href="#"
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
