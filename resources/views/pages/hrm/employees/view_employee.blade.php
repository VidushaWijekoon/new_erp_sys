@section('title', 'View Employee')
@extends('layouts.admin.app')
@section('content')
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white text-capitalize" id="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Employees Monthly Report') }}</h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('employee.index') }}">
                        <i class="fa-solid fa-home fa-2x text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-5 col-4">
        </div>
        <div class="col-sm-7 col-8 text-right m-b-30">
            <div class="btn-group btn-group-sm">
                <button class="btn btn-white btn-outline-info"><i class="fa-solid fa-file-csv mx-1"></i>CSV</button>
                <button class="btn btn-white btn-outline-info"><i class="fa-solid fa-file-pdf mx-1"></i>PDF</button>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between mt-1">
                        <h1>February Monthly Report</h1>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Attendance</th>
                                <th>Daily Target</th>
                                <th>Completed</th>
                                <th>Different</th>
                                <th>Achived</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="{{ url('admin/employee/' . $employeesItem->id . '/performance') }}">1</a>
                                </td>
                                <td><span class="badge badge-success">Present</span></td>
                                <td>50</td>
                                <td>45</td>
                                <td>-5</td>
                                <td><span class="badge badge-danger">90%</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ url('admin/employee/' . $employeesItem->id . '/performance') }}">2</a>
                                </td>
                                <td><span class="badge badge-success">Present</span></td>
                                <td>50</td>
                                <td>55</td>
                                <td>+5</td>
                                <td><span class="badge badge-success">110%</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ url('admin/employee/' . $employeesItem->id . '/performance') }}">3</a>
                                </td>
                                <td><span class="badge badge-warning">Day Off</span></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td><span class="badge badge-warning">0</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ url('admin/employee/' . $employeesItem->id . '/performance') }}">3</a>
                                </td>
                                <td><span class="badge badge-success">Present</span></td>
                                <td>50</td>
                                <td>56</td>
                                <td>+6</td>
                                <td><span class="badge badge-success">112%</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ url('admin/employee/' . $employeesItem->id . '/performance') }}">5</a>
                                </td>
                                <td><span class="badge badge-danger">Absent</span></td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td><span class="badge badge-danger">Absent</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ url('admin/employee/' . $employeesItem->id . '/performance') }}">6</a>
                                </td>
                                <td><span class="badge badge-success">Present</span></td>
                                <td>50</td>
                                <td>37</td>
                                <td>-13</td>
                                <td><span class="badge badge-danger">74%</span></td>
                            </tr>
                            <tr>
                                <td><a href="{{ url('admin/employee/' . $employeesItem->id . '/performance') }}">7</a>
                                </td>
                                <td><span class="badge badge-success">Present</span></td>
                                <td>50</td>
                                <td>65</td>
                                <td>+15</td>
                                <td><span class="badge badge-success">130%</span></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">Total Working Days: 21/26</td>
                                <td>250</td>
                                <td>258</td>
                                <td>+8</td>
                                <td><span class="badge badge-success">103%</span></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">February Salary Sheet</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Name: </p>
                                </div>
                                <div class="col-sm-5">
                                    <p>John Doe </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Employee ID: </p>
                                </div>
                                <div class="col-sm-5">
                                    <p>001 </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Department: </p>
                                </div>
                                <div class="col-sm-5">
                                    <p>Production </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Designation: </p>
                                </div>
                                <div class="col-sm-5">
                                    <p>Technician </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <h6>Salary Calculation</h6>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-sm-5">
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Basic Salary: </p>
                                </div>
                                <div class="col-sm-5">
                                    <p>AED 1500.00 </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Bonus: </p>
                                </div>
                                <div class="col-sm-5">
                                    <p>100.00 </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Allowance: </p>
                                </div>
                                <div class="col-sm-5">
                                    <p>300.00 </p>
                                </div>
                            </div>
                            <h6>Deductions</h6>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Attendance: </p>
                                </div>
                                <div class="col-sm-5">
                                    <p>55.00</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Performance: </p>
                                </div>
                                <div class="col-sm-5">
                                    <p>155.00</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Other: </p>
                                </div>
                                <div class="col-sm-5">
                                    <p>500.00</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6>Net Salary: </h6>
                                </div>
                                <div class="col-sm-5">
                                    <p>997.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
