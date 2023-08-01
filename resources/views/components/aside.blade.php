<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="#">
            <span class="align-middle d-flex justify-content-center">
                <img src="{{ asset('img/rtlogolight.png') }}" alt="company logo" width="80">
            </span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Main</li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#pos" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layers"></i>
                    <span class="align-middle">POS</span>
                </a>
                <ul id="pos" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('pos.index') }}">POS</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Make Order</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Categories</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Products</a>
                    </li>
                </ul>
            </li>


            <li class="sidebar-item">
                <a href="#sales" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="file"></i>
                    <span class="align-middle">Sales & Marketing</span>
                </a>
                <ul id="sales" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Customers</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Orders</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Quatations</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Sales Invoice</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Sales Return</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Sales Analysis</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#accounts" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="briefcase"></i>
                    <span class="align-middle">Accounts & Finance</span>
                </a>
                <ul id="accounts" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Customers</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">General Ledger</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Account Payable</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Account Receivable</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Tax Management</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="clipboard"></i>
                    <span class="align-middle">Purchasing</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="globe"></i>
                    <span class="align-middle">E-Commerce</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="cast"></i>
                    <span class="align-middle">CRM</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#hr" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i>
                    <span class="align-middle">HR</span>
                </a>
                <ul id="hr" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('hr.dashboard') }}">Employees</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Payroll</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-header">Reports</li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="package"></i>
                    <span class="align-middle">Warehouse Management</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="cpu"></i>
                    <span class="align-middle">Project Management</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="box"></i>
                    <span class="align-middle">Supply Chain Management</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#reports" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="activity"></i>
                    <span class="align-middle">Reports</span>
                </a>
                <ul id="reports" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Alerts</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Buttons</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-cards.html">Cards</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-general.html">General</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-grid.html">Grid</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-modals.html">Modals</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-typography.html">Typography</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-header">Other</li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-profile.html">
                    <i class="align-middle" data-feather="user"></i>
                    <span class="align-middle">Profile</span>
                </a>
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
