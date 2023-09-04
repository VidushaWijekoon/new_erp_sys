@section('title', 'Leaves Create')
@extends('layouts.admin.app')
@section('content')
    <div class="row justify-content-between">
        <div class="col-12 col-lg-7">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Create New Leave') }}</h4>
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
                                <div class="form-group">
                                    <label>Leave Type <span class="text-danger">*</span></label>
                                    <select class="custom-select rounded-0">
                                        <option>Select Leave Type</option>
                                        <option>Casual Leave 12 Days</option>
                                        <option>Medical Leave</option>
                                        <option>Loss of Pay-(No Pay)</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>From <span class="text-danger">*</span></label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>To <span class="text-danger">*</span></label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Number of days <span class="text-danger">*</span></label>
                                            <input class="form-control" readonly="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Remaining Leaves <span class="text-danger">*</span></label>
                                            <input class="form-control" readonly="" value="12" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Leave Reason <span class="text-danger">*</span></label>
                                    <textarea rows="4" cols="5" class="form-control"></textarea>
                                </div>
                                <a href="{{ route('department.index') }}" type="button"
                                    class="btn btn-secondary btn-sm">{{ __('Close') }}</a>
                                <button type="submit" class="btn btn-primary btn-sm">{{ __('Save Changes') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
