<div>
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">Sales</strong> Leads Collection of <strong>09/September/2023</strong></h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('sales-leads') }}">
                        <i class="fa-solid fa-home fa-2x text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <a href="{{ route('leads-create') }}" class="btn btn-sm btn-primary">Create New
                            Leads</a>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer name</th>
                                <th>Contact Number</th>
                                <th>Resident Country</th>
                                <th>Platform</th>
                                <th>Created At</th>
                                <th>Created By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Vidusha Wijekoon</td>
                                <td>+9182534586</td>
                                <td>Sri Lanka</td>
                                <td>Facebook</td>
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
