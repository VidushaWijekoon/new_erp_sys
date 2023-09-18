<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand justify-content-center d-flex" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('images/company/rtlogolight.png') }}" alt="Company Logo" width="125">
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">{{ __('Pages') }}</li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">{{ __('Dashboard') }}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#hrm" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i>
                    <span class="align-middle">{{ __('HRM') }}</span>
                </a>
                <ul id="hrm" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('hrm-dashboard.index') }}">{{ __('HR Dashboard') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link"
                            href="{{ route('document-management.index') }}">{{ __('Document Management') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Payroll Management') }}</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#sales" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="git-branch"></i>
                    <span class="align-middle">{{ __('Sales') }}</span>
                </a>
                <ul id="sales" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('sales.dashboard') }}">{{ __('Sales Dashboard') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Leads Management') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Quotation Management') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Invoice Management') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Approval Stages') }}</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#accounts" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="briefcase"></i>
                    <span class="align-middle">{{ __('Acconts') }}</span>
                </a>
                <ul id="accounts" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Accounts Dashboard') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Sales Orders') }} </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Invocing') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('All Accounts') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Approval Stages') }}</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#pos" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="hard-drive"></i>
                    <span class="align-middle">{{ __('POS') }}</span>
                </a>
                <ul id="pos" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('POS Dashboard') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('POS Items') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Orders') }}</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#ecom" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="fa-brands fa-opencart"></i>
                    <span class="align-middle">{{ __('E-Commerce') }}</span>
                </a>
                <ul id="ecom" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            {{ __('E-Commerce Dashboard') }}</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-header">{{ __('Supply Chain Management') }}</li>

            <li class="sidebar-item">
                <a href="#procurement" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="codepen"></i>
                    <span class="align-middle">{{ __('Procurement') }}</span>
                </a>
                <ul id="procurement" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            {{ __('Procurement Dashboard') }}</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#inventory" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="hard-drive"></i>
                    <span class="align-middle">{{ __('Inventory') }}</span>
                </a>
                <ul id="inventory" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            {{ __('Inventory Dashboard') }}
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            {{ __('Inventory') }}
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            {{ __('Stock Report') }}
                        </a>
                    </li>
                </ul>
            </li>


            <li class="sidebar-item">
                <a href="#scm" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="filter"></i>
                    <span class="align-middle">{{ __('SCM Management') }}</span>
                </a>
                <ul id="scm" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            {{ __('SCM Dashboard') }}
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-header">{{ __('Users & Authentications') }}</li>

            <li class="sidebar-item">
                <a href="#users" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="user"></i>
                    <span class="align-middle">{{ __('Users') }}</span>
                </a>
                <ul id="users" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Create New User') }}</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">{{ __('Disciplinary List') }}</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
