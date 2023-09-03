@section('title', 'Create New Employee')
@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-warning">
                                @foreach ($errors->all() as $error)
                                    <div class="">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        <form action="{{ url('admin/employee/' . $employee->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="px-4">{{ __('Personal Informations') }}</legend>

                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Fullname') }}</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0 text-capitalize"
                                                    value="{{ $employee->fullname }}" name="fullname">
                                            </div>
                                            @error('fullname')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">{{ __('Email') }}</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0 text-capitalize"
                                                    value="{{ $employee->email }}" name="email">
                                            </div>
                                            @error('email')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">{{ __('Gender') }}</label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0" name="gender" required>
                                                    <option value="{{ $employee->gender }}"
                                                        {{ $employee->gender == $employee->gender ? 'selected' : '' }}>
                                                        @if ($employee->gender == '0')
                                                            {{ __('Male') }}
                                                        @elseif ($employee->gender == '1')
                                                            {{ __('Female') }}
                                                        @endif
                                                    </option>

                                                    <option value="0">{{ __('Male') }}</option>
                                                    <option value="1">{{ __('Female') }}</option>
                                                </select>
                                            </div>
                                            @error('gender')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Birthday') }}</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control rounded-0 text-capitalize"
                                                    value="{{ $employee->birthday }}" name="birthday">
                                            </div>
                                            @error('birthday')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Passport Number') }}</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0 text-capitalize"
                                                    value="{{ $employee->passport_number }}" name="passport_number">
                                            </div>
                                            @error('passport_number')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Passport Expring') }}</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control rounded-0 text-capitalize"
                                                    value="{{ $employee->passport_expiring }}" name="passport_expiring">
                                            </div>
                                            @error('passport_expiring')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Visa Type') }}</label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0 text-capitalize" name="visa_type"
                                                    required>
                                                    <option value="{{ $employee->visa_type }}"
                                                        {{ $employee->visa_type == $employee->visa_type ? 'selected' : '' }}>
                                                        @if ($employee->visa_type == '0')
                                                            {{ __('Visit Visa') }}
                                                        @elseif ($employee->visa_type == '1')
                                                            {{ __('Cancel Visa') }}
                                                        @elseif ($employee->visa_type == '2')
                                                            {{ __('Family Visa') }}
                                                        @elseif ($employee->visa_type == '3')
                                                            {{ __('Freelance Visa') }}
                                                        @elseif ($employee->visa_type == '4')
                                                            {{ __('Own Visa') }}
                                                        @elseif ($employee->visa_type == '5')
                                                            {{ __('Student Visa') }}
                                                        @endif
                                                    </option>
                                                    <option value="0">{{ __('Visit Visa') }}</option>
                                                    <option value="1">{{ __('Cancel Visa') }}</option>
                                                    <option value="2">{{ __('Family Visa') }}</option>
                                                    <option value="3">{{ __('Freelance Visa') }}</option>
                                                    <option value="4">{{ __('Own Visa') }}</option>
                                                    <option value="5">{{ __('Student Visa') }}</option>
                                                </select>
                                            </div>
                                            @error('visa_type')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Visa Expring') }}</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control rounded-0 text-capitalize"
                                                    value="{{ $employee->visa_expiring }}" name="visa_expiring">
                                            </div>
                                            @error('visa_expiring')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </fieldset>

                                    <fieldset>
                                        <legend class="px-4">{{ __('Living Information') }}</legend>

                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Contact Number') }}</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0 text-capitalize"
                                                    value="{{ $employee->contact_number }}" name="contact_number">
                                            </div>
                                            @error('contact_number')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Current Address') }}</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0 text-capitalize"
                                                    value="{{ $employee->current_address }}" name="current_address">
                                            </div>
                                            @error('current_address')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Resident Country') }}</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0 text-capitalize"
                                                    value="{{ $employee->resident_country }}" name="resident_country">
                                            </div>
                                            @error('resident_country')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Emergency Number') }}</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0 text-capitalize"
                                                    value="{{ $employee->emergency_number }}" name="emergency_number">
                                            </div>
                                            @error('emergency_number')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </fieldset>

                                </div>
                                <div class="col-md-6">

                                    <fieldset>
                                        <legend class="px-4">{{ __('Profile Information') }}</legend>
                                        <div class="form-group">
                                            <label class="form-label">{{ __('Profile Photo') }}</label>
                                            <input type="file" class="rounded-0 ml-5" name="image"
                                                accept="image/x-png, image/gif, image/jpeg, image/png, image/jpg">
                                            <br>
                                            <img src="{{ asset($employee->image) }}" alt="{{ $employee->fullname }}"
                                                width="120">
                                        </div>
                                        @error('image')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </fieldset>

                                    <fieldset>
                                        <legend class="px-4">{{ __('Company Information') }}</legend>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">{{ __('Department') }}
                                            </label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0" name="department" required>
                                                    <option value="{{ $employee->department_name }}">
                                                        {{ $employee->department_name->department_name }}
                                                    </option>
                                                    @foreach ($departments as $department)
                                                        <option value="{{ $department->id }}"
                                                            class="text-capitalize rounded-0">
                                                            {{ $department->department_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('department')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">{{ __('Designation') }}
                                            </label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0" name="designation" required>
                                                    <option value="{{ $employee->designation_name }}">
                                                        {{ $employee->designation_name->designation_name }}
                                                    </option>
                                                    @foreach ($designations as $designation)
                                                        <option value="{{ $designation->id }}" class="text-capitalize">
                                                            {{ $designation->designation_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('department')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Join Date') }}</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control rounded-0 text-capitalize"
                                                    value="{{ $employee->join_date }}" name="join_date">
                                            </div>
                                            @error('join_date')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </fieldset>

                                    <fieldset>
                                        <legend class="px-4">{{ __('Company Information') }}</legend>
                                        <div class="form-group row">
                                            <label
                                                class="col-form-label col-sm-3 text-sm-start">{{ __('Special Note') }}</label>
                                            <div class="col-sm-9">
                                                <textarea type="date" class="form-control rounded-0" name="special_note" placeholder="Special Note"
                                                    rows="3">{{ $employee->special_note }}</textarea>
                                            </div>
                                            @error('special_note')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </fieldset>
                                    <div class="mt-2 text-center">
                                        <a href="{{ route('employee.index') }}"
                                            class="btn btn-secondary btn-sm">{{ __('Close') }}</a>
                                        <button type="submit"
                                            class="btn btn-primary btn-sm">{{ __('Save changes') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>

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
