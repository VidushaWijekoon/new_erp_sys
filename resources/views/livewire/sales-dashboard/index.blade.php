<div>
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('Sales') }}</strong> {{ __('Dashboard') }}</h3>
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
