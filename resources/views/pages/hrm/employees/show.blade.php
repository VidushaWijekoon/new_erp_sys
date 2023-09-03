@section('title', 'Show Employee')
@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <legend class="px-4">{{ __('Personal Informations') }}</legend>

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 text-sm-start">{{ __('Fullname') }}</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->fullname }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 text-sm-start">{{ __('Email') }}</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->email }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 text-sm-start">{{ __('Gender') }}</label>
                                        <div class="col-sm-9">
                                            @if ($employee->gender == '0')
                                                <input type="text" class="form-control rounded-0 text-capitalize"
                                                    value="Male" readonly disabled>
                                            @elseif ($employee->gender == '1')
                                                <input type="text" class="form-control rounded-0 text-capitalize"
                                                    value="Female" readonly disabled>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 text-sm-start">{{ __('Birthday') }}</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->birthday }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Passport Number') }}</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->passport_number }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Passport Expring') }}</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->passport_expiring }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 text-sm-start">{{ __('Visa Type') }}</label>
                                        <div class="col-sm-9">
                                            @if ($employee->visa_type == '0')
                                                <input type="text" class="form-control rounded-0 text-capitalize"
                                                    value="Visit Visa" readonly disabled>
                                                @if ($employee->visa_type == '1')
                                                    <input type="text" class="form-control rounded-0 text-capitalize"
                                                        value="Cancel Visa" readonly disabled>
                                                    @if ($employee->visa_type == '1')
                                                        <input type="text" class="form-control rounded-0 text-capitalize"
                                                            value="Family Visa" readonly disabled>
                                                        @if ($employee->visa_type == '1')
                                                            <input type="text"
                                                                class="form-control rounded-0 text-capitalize"
                                                                value="Freelance Visa" readonly disabled>
                                                            @if ($employee->visa_type == '1')
                                                                <input type="text"
                                                                    class="form-control rounded-0 text-capitalize"
                                                                    value="Own Visa" readonly disabled>
                                                                @if ($employee->visa_type == '1')
                                                                    <input type="text"
                                                                        class="form-control rounded-0 text-capitalize"
                                                                        value="Student Visa" readonly disabled>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Visa Expring') }}</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->visa_expiring }}" readonly disabled>
                                        </div>
                                    </div>

                                </fieldset>

                                <fieldset>
                                    <legend class="px-4">{{ __('Living Information') }}</legend>

                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Contact Number') }}</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->contact_number }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Current Address') }}</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->current_address }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Resident Country') }}</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->resident_country }}" readonly disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Emergency Number') }}</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->emergency_number }}" readonly disabled>
                                        </div>
                                    </div>

                                </fieldset>
                            </div>

                            <div class="col-md-6">

                                <fieldset>
                                    <legend class="px-4">{{ __('Profile Information') }}</legend>
                                    <div class="form-group">
                                        <label class="form-label">{{ __('Profile Photo') }}</label>
                                        <img src="{{ asset($employee->image) }}" alt="{{ $employee->fullname }}"
                                            width="120">
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend class="px-4">{{ __('Company Information') }}</legend>
                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 text-sm-start">{{ __('Department') }}
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->department_name->department_name }}" readonly
                                                disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 text-sm-start">{{ __('Designation') }}
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->designation_name->designation_name }}" readonly
                                                disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 text-sm-start">{{ __('Join Date') }}</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control rounded-0 text-capitalize"
                                                value="{{ $employee->join_date }}" readonly disabled>
                                        </div>

                                </fieldset>

                                <fieldset>
                                    <legend class="px-4">{{ __('Company Information') }}</legend>

                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Special Note') }}</label>
                                        <div class="col-sm-9">
                                            <textarea type="date" class="form-control rounded-0" name="special_note" placeholder="Special Note"
                                                rows="3" readonly disabled>{{ $employee->special_note }}
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        fieldset,
        legend {
            all: revert;
            font-size: 12px;
        }
    </style>
@endpush
