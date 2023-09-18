@section('title', 'Show My Leaves')
@extends('layouts.admin.app')
@section('content')
    <div class="row justify-content-between">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Create New Leave') }}</h4>
                    </span>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{ __('Leave Type') }} <span class="text-danger">*</span></label>

                                @if ($leaves->leave_type == '0')
                                    <input type="text" class="form-control" value="{{ __('Sick Leave') }}" readonly
                                        disabled>
                                @elseif ($leaves->leave_type == '1')
                                    <input type="text" class="form-control" value="{{ __('Casual Leave') }}" readonly
                                        disabled>
                                @elseif ($leaves->leave_type == '2')
                                    <input type="text" class="form-control" value="{{ __('Public Leave') }}" readonly
                                        disabled>
                                @elseif ($leaves->leave_type == '3')
                                    <input type="text" class="form-control" value="{{ __('Religious Holidays') }}"
                                        readonly disabled>
                                @elseif ($leaves->leave_type == '4')
                                    <input type="text" class="form-control" value="{{ __('Bereavement Holiday') }}"
                                        readonly disabled>
                                @elseif ($leaves->leave_type == '5')
                                    <input type="text" class="form-control"
                                        value="{{ __('Compensatory leave and time off in lieu (TOIL)') }}" readonly
                                        disabled>
                                @elseif ($leaves->leave_type == '6')
                                    <input type="text" class="form-control" value="{{ __('Sabbatical Holiday') }}"
                                        readonly disabled>
                                @elseif ($leaves->leave_type == '7')
                                    <input type="text" class="form-control"
                                        value="{{ __('Unpaid leave (leave without pay)') }}" readonly disabled>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('From') }} <span
                                                class="text-danger">{{ __('*') }}</span></label>
                                        <div class="cal-icon">
                                            <input type="date" class="form-control datetimepicker"
                                                value="{{ $leaves->fromDate }}" readonly disabled>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('To') }} <span
                                                class="text-danger">{{ __('*') }}</span></label>
                                        <div class="cal-icon">
                                            <input type="date" class="form-control datetimepicker"
                                                value="{{ $leaves->toDate }}" readonly disabled>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Number of days') }} <span
                                                class="text-danger">{{ __('*') }}</span></label>
                                        <input type="text" class="form-control" value="{{ $leaves->number_of_days }}"
                                            readonly disabled>
                                    </div>
                                </div>
                                <?php
                                $sum = $year_leaves - $leave_count;
                                ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Remaining Leaves') }} <span
                                                class="text-danger">{{ __('*') }}</span></label>
                                        <input type="text" class="form-control" value="{{ $sum }}" readonly
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>{{ __('Leave Reason') }} <span
                                        class="text-danger">{{ __('*') }}</span></label>
                                <textarea rows="4" cols="5" class="form-control text-capitalize" placeholder="Leave Reason" readonly
                                    disabled>{{ $leaves->leave_reason }}</textarea>

                            </div>
                            <a href="{{ route('leaves-index') }}" class="btn btn-secondary btn-sm">{{ __('Close') }}</a>
                            <button type="submit" class="btn btn-primary btn-sm">{{ __('Save Changes') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Previous Leaves') }}</h4>
                    </span>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Leaves Type') }}</th>
                                            <th>{{ __('From') }}</th>
                                            <th>{{ __('To') }}</th>
                                            <th>{{ __('No of Days') }}</th>
                                            <th>{{ __('Reason') }}</th>
                                            <th>{{ __('Status') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($leavesTaken as $leavesItem)
                                            <tr>
                                                <td>
                                                    @if ($leavesItem->leave_type == '0')
                                                        {{ __('Sick Leave') }}
                                                    @elseif ($leavesItem->leave_type == '1')
                                                        {{ __('Casual Leave') }}
                                                    @elseif ($leavesItem->leave_type == '2')
                                                        {{ __('Public Leave') }}
                                                    @elseif ($leavesItem->leave_type == '3')
                                                        {{ __('Religious holidays') }}
                                                    @elseif ($leavesItem->leave_type == '4')
                                                        {{ __('Bereavement holidays') }}
                                                    @elseif ($leavesItem->leave_type == '5')
                                                        {{ __('Compensatory leave and time off in lieu (TOIL)') }}
                                                    @elseif ($leavesItem->leave_type == '6')
                                                        {{ __('Sabbatical holidays') }}
                                                    @elseif ($leavesItem->leave_type == '7')
                                                        {{ __('Unpaid leave (leave without pay)') }}
                                                    @endif
                                                </td>
                                                <td>{{ $leavesItem->fromDate }}</td>
                                                <td>{{ $leavesItem->toDate }}</td>
                                                <td>{{ $leavesItem->number_of_days }}</td>
                                                <td class="text-capitalize">{{ $leavesItem->leave_reason }}</td>
                                                <td>
                                                    @if ($leavesItem->status == '1')
                                                        <span class="badge badge-success">Approved</span>
                                                    @else
                                                        <span class="badge badge-danger">Not Approved</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
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
