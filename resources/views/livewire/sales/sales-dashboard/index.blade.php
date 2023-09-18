<div>
    {{-- The whole world belongs to you. --}}
</div>
<div>
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('Sales') }}</strong> {{ __('Dashboard') }}</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">CPU Traffic</span>
                        <span class="info-box-number">
                            10
                            <small>%</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Sales</span>
                        <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">New Members</span>
                        <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <!-- ./card-body -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-3 col-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                        17%</span>
                                    <h5 class="description-header">$35,210.43</h5>
                                    <span class="description-text">TOTAL REVENUE</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 col-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i>
                                        0%</span>
                                    <h5 class="description-header">$10,390.90</h5>
                                    <span class="description-text">TOTAL COST</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 col-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                        20%</span>
                                    <h5 class="description-header">$24,813.53</h5>
                                    <span class="description-text">TOTAL PROFIT</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 col-6">
                                <div class="description-block">
                                    <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i>
                                        18%</span>
                                    <h5 class="description-header">1200</h5>
                                    <span class="description-text">GOAL COMPLETIONS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-md-12 d-flex">
                <div class="w-100">

                    <div class="row">

                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-header bg-transparent border-success">
                                    <div class="d-flex justify-content-between">
                                        <h4>Sales Leads</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-users fa-4x mt-1 text-danger p-3"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            Organize Customers, Leads and Vendors.
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('sales-leads') }}">
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
                                        <h4>Quoatations</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-filter-circle-dollar fa-4x mt-1 text-success p-3"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            Create, edit and send estimates and quotes.
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-between">
                                        <strong>
                                            <h4>3 : <span>Quoatations</span></h4>
                                        </strong>
                                        <a href="{{ route('quotation.index') }}">
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
                                        <h4>Invoices</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-receipt fa-4x mt-1 p-3 text-primary"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            Create, edit and send invoices.
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-between">
                                        <strong>
                                            <h4>3 : <span>Invoices</span></h4>
                                        </strong>
                                        <a href="{{ route('invoices.index') }}">
                                            <i class="fa-solid fa-circle-plus fa-2x text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-header bg-transparent border-success">
                                    <div class="d-flex justify-content-between">
                                        <h4>Approval Stages</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-circle-check fa-4x mt-1 p-3 text-info"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            Create, edit and send invoices.
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-between">
                                        <strong>
                                            <h4>3 : <span>Waiting for Approval</span></h4>
                                        </strong>
                                        <a href="{{ route('sales-approvals') }}">
                                            <i class="fa-solid fa-circle-plus fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-header bg-transparent border-success">
                                    <div class="d-flex justify-content-between">
                                        <h4>Sales Tracking</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-location-dot fa-4x mt-1 p-3 text-warning"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            Checking all sales person perfomance and sales tracking
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('sales-approvals') }}">
                                            <i class="fa-solid fa-circle-plus fa-2x text-warning"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-header bg-transparent border-success">
                                    <div class="d-flex justify-content-between">
                                        <h4>Email Campaigns</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-envelopes-bulk fa-4x mt-1 p-3 text-secondary"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            Quickly create and send bulk emails to your customers and leads using email
                                            templates that you create
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-end">
                                        <a href="">
                                            <i class="fa-solid fa-circle-plus fa-2x text-secondary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-header bg-transparent border-success">
                                    <div class="d-flex justify-content-between">
                                        <h4>Sales Reports</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-folder-tree fa-4x mt-1 p-3"
                                            style="color: rgb(46, 124, 111)"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            Create, edit and send sakes receipts
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-end">
                                        <a href="">
                                            <i class="fa-solid fa-circle-plus fa-2x mx-4"
                                                style="color: rgb(46, 124, 111)"></i>
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
