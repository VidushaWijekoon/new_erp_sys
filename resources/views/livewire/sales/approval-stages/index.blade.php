<div>
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('Sales') }}</strong> {{ __('Approvals') }}</h3>
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
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header" style="background: #222e3c">
                        <span class="card-title mb-0 d-flex justify-content-between">
                            <h4 style="color: #e9ecef">{{ __('Quoataion Need to Approval') }}</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Quoatation ID</th>
                                    <th>Customer name</th>
                                    <th>Contact Number</th>
                                    <th>Resident Country</th>
                                    <th>Created At</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="">0001</a>
                                    </td>
                                    <td>Vidusha Wijekoon</td>
                                    <td>+9182534586</td>
                                    <td>Sri Lanka</td>
                                    <td>2023-09-14</td>
                                    <td class="text-capitalize">admin</td>
                                    <td class="table-action">
                                        <a href="" class="btn btn-sm btn-success text-dark">Approval</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header" style="background: #222e3c">
                        <span class="card-title mb-0 d-flex justify-content-between">
                            <h4 style="color: #e9ecef">{{ __('Quoataion Need to Approval') }}</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <table id="invoice1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Quoatation ID</th>
                                    <th>Invoice ID</th>
                                    <th>Customer name</th>
                                    <th>Contact Number</th>
                                    <th>Resident Country</th>
                                    <th>Created At</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="">0001</a>
                                    </td>
                                    <td>
                                        <a href="">INV-0001</a>
                                    </td>
                                    <td>Vidusha Wijekoon</td>
                                    <td>+9182534586</td>
                                    <td>Sri Lanka</td>
                                    <td>2023-09-14</td>
                                    <td class="text-capitalize">admin</td>
                                    <td class="table-action">
                                        <a href="" class="btn btn-sm btn-success text-dark">Approval</a>
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
        $(function() {
            $("#invoice1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
