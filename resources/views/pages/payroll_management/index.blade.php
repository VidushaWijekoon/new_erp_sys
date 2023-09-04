@section('title', 'Payroll')
@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('Payroll') }}</strong> {{ __('Dashboard') }}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12 d-flex">
                <div class="w-100">

                    <div class="row">
                        <div class="col-sm-3">
                            <a href="{{ route('holiday.index') }}">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">{{ __('Year Holidays') }}</h1>
                                        <div class="mb-1">
                                            <span class="text-danger">
                                                <h1 class="text-danger">14</h1>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="{{ route('leaves.index') }}">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">{{ __('Leaves Request') }}</h1>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="{{ route('attendance.index') }}">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">{{ __('Attendance') }}</h1>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="#">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">{{ __('Letter Request') }}</h1>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="#">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">{{ __('Payroll') }}</h1>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="#">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">{{ __('Reports') }}</h1>
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
