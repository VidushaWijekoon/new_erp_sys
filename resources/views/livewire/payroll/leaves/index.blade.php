<div>
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white text-capitalize" id="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Leaves') }}</h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('document-management.index') }}">
                        <i class="fa-solid fa-home fa-2x text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <a href="{{ route('department.create') }}"
                        class="btn btn-sm btn-primary">{{ __('Create New Leaves') }}</a>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Employee</th>
                            <th>Leaves Type</th>
                            <th>From</th>
                            <th>To</th>
                            <th>No of Days</th>
                            <th>Reason</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Project Apollo</td>
                            <td class="d-none d-xl-table-cell">01/01/2020</td>
                            <td class="d-none d-xl-table-cell">31/06/2020</td>
                            <td><span class="badge badge-success">Done</span></td>
                            <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                        </tr>
                        <tr>
                            <td>Project Fireball</td>
                            <td class="d-none d-xl-table-cell">01/01/2020</td>
                            <td class="d-none d-xl-table-cell">31/06/2020</td>
                            <td>
                                <span class="badge badge-danger">Cancelled</span>
                            </td>
                            <td class="d-none d-md-table-cell">William Harris</td>
                        </tr>
                        <tr>
                            <td>Project Hades</td>
                            <td class="d-none d-xl-table-cell">01/01/2020</td>
                            <td class="d-none d-xl-table-cell">31/06/2020</td>
                            <td><span class="badge badge-success">Done</span></td>
                            <td class="d-none d-md-table-cell">Sharon Lessman</td>
                        </tr>
                        <tr>
                            <td>Project Nitro</td>
                            <td class="d-none d-xl-table-cell">01/01/2020</td>
                            <td class="d-none d-xl-table-cell">31/06/2020</td>
                            <td>
                                <span class="badge badge-warning">In progress</span>
                            </td>
                            <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                        </tr>
                        <tr>
                            <td>Project Phoenix</td>
                            <td class="d-none d-xl-table-cell">01/01/2020</td>
                            <td class="d-none d-xl-table-cell">31/06/2020</td>
                            <td><span class="badge badge-success">Done</span></td>
                            <td class="d-none d-md-table-cell">William Harris</td>
                        </tr>
                        <tr>
                            <td>Project X</td>
                            <td class="d-none d-xl-table-cell">01/01/2020</td>
                            <td class="d-none d-xl-table-cell">31/06/2020</td>
                            <td><span class="badge badge-success">Done</span></td>
                            <td class="d-none d-md-table-cell">Sharon Lessman</td>
                        </tr>
                        <tr>
                            <td>Project Romeo</td>
                            <td class="d-none d-xl-table-cell">01/01/2020</td>
                            <td class="d-none d-xl-table-cell">31/06/2020</td>
                            <td><span class="badge badge-success">Done</span></td>
                            <td class="d-none d-md-table-cell">Christina Mason</td>
                        </tr>
                        <tr>
                            <td>Project Wombat</td>
                            <td class="d-none d-xl-table-cell">01/01/2020</td>
                            <td class="d-none d-xl-table-cell">31/06/2020</td>
                            <td>
                                <span class="badge badge-warning">In progress</span>
                            </td>
                            <td class="d-none d-md-table-cell">William Harris</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
