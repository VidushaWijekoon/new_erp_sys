<div>
    @include('livewire.admin.h-r-m.form-modal')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>HRM</strong> Dashboard</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12 d-flex">
                <div class="w-100">

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <h1 class="display-5 mt-1 mb-3">Departments</h1>
                                    <div class="mb-1">
                                        <span class="text-danger">
                                            <h1 class="text-danger">25</h1>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <h1 class="display-5 mt-1 mb-3">Employees</h1>
                                    <div class="mb-1">
                                        <span>
                                            <h1 class="text-danger">25</h1>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3><strong>Employees</strong></h3>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('create-employee') }}"
                                    class="btn btn-sm btn-primary float-right text-capitalize">create new
                                    employee</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                                <th>Phone Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Vanessa Tucker</td>
                                <td>864-348-0485</td>
                                <td class="d-none d-md-table-cell">June 21, 1961</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>William Harris</td>
                                <td>914-939-2458</td>
                                <td class="d-none d-md-table-cell">May 15, 1948</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sharon Lessman</td>
                                <td>704-993-5435</td>
                                <td class="d-none d-md-table-cell">September 14, 1965</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Christina Mason</td>
                                <td>765-382-8195</td>
                                <td class="d-none d-md-table-cell">April 2, 1971</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Robin Schneiders</td>
                                <td>202-672-1407</td>
                                <td class="d-none d-md-table-cell">October 12, 1966</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3><strong>Departments</strong></h3>
                            </div>
                            <div class="col-md-6">
                                <a href="#" data-toggle="modal" data-target="#createNewDepartment"
                                    class="btn btn-sm btn-primary float-right text-capitalize">create new
                                    department</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                                <th>Phone Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Vanessa Tucker</td>
                                <td>864-348-0485</td>
                                <td class="d-none d-md-table-cell">June 21, 1961</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>William Harris</td>
                                <td>914-939-2458</td>
                                <td class="d-none d-md-table-cell">May 15, 1948</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sharon Lessman</td>
                                <td>704-993-5435</td>
                                <td class="d-none d-md-table-cell">September 14, 1965</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Christina Mason</td>
                                <td>765-382-8195</td>
                                <td class="d-none d-md-table-cell">April 2, 1971</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Robin Schneiders</td>
                                <td>202-672-1407</td>
                                <td class="d-none d-md-table-cell">October 12, 1966</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>

<script>
    window.addEventListener('close-modal', event => {
        $('#createNewDepartment').modal('hide');
    });
</script>
