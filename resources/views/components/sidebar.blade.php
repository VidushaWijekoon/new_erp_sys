<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand justify-content-center d-flex" href="{{ url('admin/dashboard') }}">
            <img src="{{ asset('images/company/rtlogolight.png') }}" alt="Company Logo" width="125">
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Pages</li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('admin/dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#hrm" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i>
                    <span class="align-middle">HRM</span>
                </a>
                <ul id="hrm" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('hrm-dashboard.index') }}">HR Dashboard</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('document-management.index') }}">Document Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('payroll-management.index') }}">Payroll Management</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#sales" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="git-branch"></i>
                    <span class="align-middle">Sales</span>
                </a>
                <ul id="sales" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('sales.dashboard') }}">Sales Dashboard</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('sales-leads') }}">Leads Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('quotation.index') }}">Quotation Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('invoices.index') }}">Invoice Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Sales Informations</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#accounts" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="briefcase"></i>
                    <span class="align-middle">Acconts</span>
                </a>
                <ul id="accounts" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('accounts-dashboard.index') }}">Accounts Dashboard</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Invocing</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Account Payable</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Account Receivable</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Payments</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Reporting and Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#pos" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="hard-drive"></i>
                    <span class="align-middle">POS</span>
                </a>
                <ul id="pos" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('pos-dashboard.index') }}">POS Dashboard</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">POS Items</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Orders</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Payment Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Reporting and Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#ecom" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="fa-brands fa-opencart"></i>
                    <span class="align-middle">E-Commerce</span>
                </a>
                <ul id="ecom" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('e-commerce-dashboard.index') }}">E-Commerce
                            Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-header">Supply Chain Management</li>

            <li class="sidebar-item">
                <a href="#procurement" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="codepen"></i>
                    <span class="align-middle">Procurement</span>
                </a>
                <ul id="procurement" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('procurement-dashboard.index') }}">Procurement
                            Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#inventory" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="box"></i>
                    <span class="align-middle">Inventory Management</span>
                </a>
                <ul id="inventory" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('inventory-management-dashboard') }}">Inventory
                            Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#warehouse" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="package"></i>
                    <span class="align-middle">Warehouse Management</span>
                </a>
                <ul id="warehouse" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('warehouse-management-dashoard') }}">Warehouse
                            Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#scm" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="filter"></i>
                    <span class="align-middle">SCM Management</span>
                </a>
                <ul id="scm" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('supply-chain-management-dashboard') }}">SCM
                            Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-header">Users & Authentications</li>

            <li class="sidebar-item">
                <a href="#users" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="user"></i>
                    <span class="align-middle">Users</span>
                </a>
                <ul id="users" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('user.register') }}">Create New User</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('users.index') }}">Disciplinary List</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="settings"></i>
                    <span class="align-middle">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
