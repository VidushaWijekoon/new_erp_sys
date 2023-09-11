@section('title', 'Leaves Create')
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
                    @if ($errors->any())
                        <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
                            @foreach ($errors->all() as $error)
                                <div class="">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('leaves.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{ __('Leave Type') }} <span class="text-danger">*</span></label>
                                    <select class="custom-select rounded-0" name="leave_type" required>
                                        <option>{{ __('Select Leave Type') }}</option>
                                        <option value="0">{{ __('Sick Leave') }}</option>
                                        <option value="1">{{ __('Casual Leave') }}</option>
                                        <option value="2">{{ __('Public holidays') }}</option>
                                        <option value="3">{{ __('Religious holidays') }}</option>
                                        <option value="4">{{ __('Bereavement holidays') }}</option>
                                        <option value="5">{{ __('Compensatory leave and time off in lieu (TOIL)') }}
                                        </option>
                                        <option value="6">{{ __('Sabbatical holidays') }}</option>
                                        <option value="7">{{ __('Unpaid leave (leave without pay)') }}</option>
                                    </select>
                                    @error('leave_type')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('From') }} <span
                                                    class="text-danger">{{ __('*') }}</span></label>
                                            <div class="cal-icon">
                                                <input type="date" class="form-control datetimepicker" name="fromDate"
                                                    id="fromDate" required>
                                                @error('fromDate')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('To') }} <span
                                                    class="text-danger">{{ __('*') }}</span></label>
                                            <div class="cal-icon">
                                                <input type="date" class="form-control datetimepicker" name="toDate"
                                                    id="toDate" onchange="getDays()" required>
                                                @error('toDate')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('Number of days') }} <span
                                                    class="text-danger">{{ __('*') }}</span></label>
                                            <input type="text" class="form-control" name="number_of_days" readonly
                                                disabled id="number_of_days">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('Remaining Leaves') }} <span
                                                    class="text-danger">{{ __('*') }}</span></label>
                                            <input type="text" class="form-control" value="12"
                                                name="remaining_leaves" readonly disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Leave Reason') }} <span
                                            class="text-danger">{{ __('*') }}</span></label>
                                    <textarea rows="4" cols="5" class="form-control" name="leave_reason" placeholder="Leave Reason" required></textarea>
                                    @error('leave_reason')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <a href="{{ route('leaves-index') }}"
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
                                        @foreach ($leaves as $leavesItem)
                                            <tr>
                                                <td>{{ $leavesItem->leave_type }}</td>
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

@push('scripts')
    <script>
        $(function() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;

            $('#fromDate').attr('min', maxDate);
            $('#toDate').attr('min', maxDate);

        });

        function getDays() {

            var start_date = new Date(document.getElementById('fromDate').value);
            var end_date = new Date(document.getElementById('toDate').value);

            var time_difference = end_date.getTime() - start_date.getTime();

            var days_difference = time_difference / (1000 * 3600 * 24);

            document.getElementById('number_of_days').value = days_difference;
        }

        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
