@section('title', 'Document Controller')
@extends('layouts.admin.app')
@section('content')
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
                            <a href="{{ route('department.index') }}">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">Departments</h1>
                                        <div class="mb-1">
                                            <span class="text-danger">
                                                <h1 class="text-danger">{{ $deptCount }}</h1>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="{{ route('designation.index') }}">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">Designations</h1>
                                        <div class="mb-1">
                                            <span>
                                                <h1 class="text-danger">{{ $designCount }}</h1>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="{{ route('employee.index') }}">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">Employees</h1>
                                        <div class="mb-1">
                                            <span>
                                                <h1 class="text-danger">30</h1>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
