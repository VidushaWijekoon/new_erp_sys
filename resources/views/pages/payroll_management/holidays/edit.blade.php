@section('title', 'Edit Holiday')
@extends('layouts.admin.app')
@section('content')
    <div class="row justify-content-between">
        <div class="col-12 col-lg-5 col-xxl-5">
            <div class="card flex-fill">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Create New Holiday') }}-{{ $holidays->holiday_date }} </h4>
                    </span>
                </div>
                <form action="{{ url('admin/holiday/' . $holidays->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
                                @foreach ($errors->all() as $error)
                                    <div class="">{{ $error }} </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="">{{ __('Holiday Name') }}</label>
                            <input type="text" name="holiday_name" class="form-control form-control-sm text-capitalize"
                                value="{{ $holidays->holiday_name }}">
                            @error('holiday_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">{{ __('Holiday Date') }}</label>
                            <input type="date" name="holiday_date" class="form-control form-control-sm text-capitalize"
                                value="{{ $holidays->holiday_date }}">
                            @error('holiday_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">{{ __('Special Note') }}</label>
                            <textarea type="text" name="holiday_special_note" class="form-control form-control-sm" rows="3">{{ $holidays->holiday_special_note }}</textarea>
                            @error('holiday_special_note')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('holiday.index') }}" class="btn btn-secondary btn-sm">{{ __('Close') }}</a>
                        <button type="submit" class="btn btn-primary btn-sm">{{ __('Save Changes') }}</button>
                    </div>
                </form>

            </div>

        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Created Holidays') }}</h4>
                    </span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>{{ __('Holiday Name') }}</th>
                                    <th>{{ __('Holiday Date') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allholidays as $holidays)
                                    <tr>
                                        <td>{{ $holidays->holiday_name }}</td>
                                        <td>{{ $holidays->holiday_date }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
