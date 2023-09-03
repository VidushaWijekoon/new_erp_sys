@section('title', 'RSoft | Employees')
<div>
    <a href="{{ route('employee.create') }}" class="btn btn-primary btn-sm mb-3 text-white">
        Create New Department
    </a>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title" style="font-size: 20px"><strong>Employees</strong></h2>
                    </div>
                    <table class="table table-hover">
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
                            @forelse ($employees as $employeesItem)
                                <tr>
                                    <td>{{ $employeesItem->id }}</td>
                                    <td>{{ $employeesItem->fullname }}</td>
                                    <td>{{ $employeesItem->visa_type }}</td>
                                    <td>{{ $employeesItem->contact_number }}</td>
                                    <td>{{ $employeesItem->resident_country }}</td>
                                    <td>{{ $employeesItem->department_name->department_name }}</td>
                                    <td>{{ $employeesItem->desgination_name->desgination_name }}</td>
                                    <td>{{ $employeesItem->join_date }}</td>
                                    <td>
                                        @if ($employeesItem->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Not Active</span>
                                        @endif
                                    </td>
                                    <td class="table-action">
                                        <a href="#">
                                            <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa-solid fa-pen mx-1 text-info"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                        </a>

                                    </td>
                                </tr>
                            @empty
                                <span>No Employee Data Found</span>
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
