<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand justify-content-center d-flex" href="{{ url('admin/dashboard') }}">
            <img src="{{ asset('images/company/rtlogolight.png') }}" alt="Company Logo" width="125">
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Pages</li>

            <li class="sidebar-item active">
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
                        <a class="sidebar-link" href="{{ route('document-management.index') }}">Document Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Payroll Management</a>
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
                        <a class="sidebar-link" href="#">Sales</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Customer Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Appointment Scheduling</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Target Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Quotation Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Opportunity Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Sales Estimation</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Sales Informations</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Campaign Informations</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Reporting and Dashboard</a>
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
                        <a class="sidebar-link" href="#">Accounts</a>
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

            <li class="sidebar-header">Supply Chain Management</li>


            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="codepen"></i>
                    <span class="align-middle">Procurement</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="box"></i>
                    <span class="align-middle">Inventory Management</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="package"></i>
                    <span class="align-middle">Warehouse Management</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="filter"></i>
                    <span class="align-middle">Import & Export</span>
                </a>
            </li>

            <li class="sidebar-header">Users & Authentications</li>

            <li class="sidebar-item">
                <a href="#users" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="user"></i>
                    <span class="align-middle">Users</span>
                </a>
                <ul id="users" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Create New User</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Disciplinary List</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-settings.html">
                    <i class="align-middle" data-feather="settings"></i>
                    <span class="align-middle">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
