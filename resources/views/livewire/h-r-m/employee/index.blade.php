<div>
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white text-capitalize" id="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Employees') }}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <a href="{{ route('employee.create') }}"
                        class="btn btn-sm btn-primary">{{ __('Create New Employee') }}</a>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Visa Type</th>
                            <th>Contact Number</th>
                            <th>Resident Country</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Join Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
