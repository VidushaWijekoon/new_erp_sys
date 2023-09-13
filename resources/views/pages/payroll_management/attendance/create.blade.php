@section('title', 'Mark Attendance')
@extends('layouts.admin.app')
@section('content')
    <div class="row justify-content-between">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Vidusha Wijekoon - September 2023 - Attendance') }}</h4>
                    </span>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
                            @foreach ($errors->all() as $error)
                                <div class="">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('department.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Employee ID<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control rounded-0" value="EMP-0001"
                                                name="passport_expiring" required disabled readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control rounded-0" value="EMP-0001"
                                                name="passport_expiring" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>In Time <span class="text-danger">*</span></label>
                                            <input type="time" class="form-control rounded-0" value="EMP-0001"
                                                name="passport_expiring" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Exit Time <span class="text-danger">*</span></label>
                                            <input type="time" class="form-control rounded-0" value="EMP-0001"
                                                name="passport_expiring" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Type <span class="text-danger">*</span></label>
                                            <select class="custom-select rounded-0">
                                                <option>Select Leave Type</option>
                                                <option>Full Day</option>
                                                <option>Half Day - (Approved)</option>
                                                <option>Half Day - (Not Approved)</option>
                                                <option>Medical Leave</option>
                                                <option>Paid Leave</option>
                                                <option>No Leave</option>
                                                <option>On Vacation</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description <span class="text-danger">*</span></label>
                                            <textarea name="" id="" class="form-control rounded-0" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('attendance.index') }}" type="button"
                                    class="btn btn-secondary btn-sm">{{ __('Close') }}</a>
                                <button type="submit" class="btn btn-primary btn-sm">{{ __('Save Changes') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                    </span>
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Date') }}</th>
                                            <th>{{ __('In') }}</th>
                                            <th>{{ __('Out') }}</th>
                                            <th>{{ __('Type') }}</th>
                                            <th>{{ __('Description') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
