<div>
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('HR') }}</strong> {{ __('Dashboard') }}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12 d-flex">
                <div class="w-100">

                    <div class="row">

                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-header bg-transparent border-success">
                                    <div class="d-flex justify-content-between">
                                        <h4>{{ __('Employees') }}</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-users fa-4x mt-1 text-danger p-3"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            {{ __('Organize all employees, Department and Designation.') }}
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('document-management.index') }}">
                                            <i class="fa-solid fa-circle-plus fa-2x text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-header bg-transparent border-success">
                                    <div class="d-flex justify-content-between">
                                        <h4>{{ __('Payroll') }}</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-filter-circle-dollar fa-4x mt-1 text-success p-3"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            {{ __('Manage employee payroll, leaves, attendance') }}
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('payroll-management.index') }}">
                                            <i class="fa-solid fa-circle-plus fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-header bg-transparent border-success">
                                    <div class="d-flex justify-content-between">
                                        <h4>{{ __('Employee Reports') }}</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-folder-tree fa-4x mt-1 p-3"
                                            style="color: rgb(46, 124, 111)"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            {{ __('Check all the employee monthly, weekly, daily perfomance') }}
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-end">
                                        <a href="#">
                                            <i class="fa-solid fa-circle-plus fa-2x"
                                                style="color: rgb(46, 124, 111)"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-header bg-transparent border-success">
                                    <div class="d-flex justify-content-between">
                                        <h4>{{ __('Compliance') }}</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-globe fa-4x mt-1 p-3"
                                            style="color: rgb(101, 161, 32)"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            {{ __('Check and use data for reporting and compliance purposes,Follow all
                                                                                        workplace-related regulations and legislation') }}
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-end">
                                        <a href="#">
                                            <i class="fa-solid fa-circle-plus fa-2x"
                                                style="color: rgb(101, 161, 32)"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-header bg-transparent border-success">
                                    <div class="d-flex justify-content-between">
                                        <h4>{{ __('Recruitments') }}</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-users-viewfinder fa-4x mt-1 p-3"
                                            style="color: rgb(206, 128, 26)"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            {{ __('Check and use data for reporting and compliance purposes,Follow all
                                                                                        workplace-related regulations and legislation') }}
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-end">
                                        <a href="#">
                                            <i class="fa-solid fa-circle-plus fa-2x"
                                                style="color: rgb(206, 128, 26)"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
