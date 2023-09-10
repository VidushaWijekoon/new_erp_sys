@section('title', 'Create New Holiday')
@extends('layouts.admin.app')
@section('content')
    <div class="row justify-content-between">
        <div class="col-12 col-lg-5 col-xxl-5">
            <div class="card flex-fill">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ $holiday->holiday_date }}</h4>
                    </span>
                </div>
                <div class="card-body">

                    <div class="mb-3">
                        <label for="">{{ __('Holiday Name') }}</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $holiday->holiday_name }}"
                            readonly disabled>
                    </div>

                    <div class="mb-3">
                        <label for="">{{ __('Holiday Date') }}</label>
                        <input type="date" class="form-control form-control-sm" value="{{ $holiday->holiday_date }}"
                            readonly disabled>
                    </div>

                    <div class="mb-3">
                        <label for="">{{ __('Special Note') }}</label>
                        <textarea type="text" class="form-control form-control-sm" rows="3" readonly disabled>{{ $holiday->holiday_special_note }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('holiday.index') }}" class="btn btn-secondary btn-sm">{{ __('Close') }}</a>
                    <button type="submit" class="btn btn-primary btn-sm">{{ __('Save Changes') }}</button>
                </div>

            </div>

        </div>

    </div>

@endsection
