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
                        <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="px-4">Personal Informations</legend>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Fullname</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0" name="fullname"
                                                    placeholder="Fullname" required>
                                            </div>
                                            @error('fullname')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control rounded-0" name="email"
                                                    placeholder="Email" required>
                                            </div>
                                            @error('email')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Gender</label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0" name="gender" required>
                                                    <option selected value="0">Male</option>
                                                    <option value="1">Female</option>
                                                </select>
                                            </div>
                                            @error('gender')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Birthday</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control rounded-0" name="birthday"
                                                    placeholder="Birthday" required>
                                            </div>
                                            @error('birthday')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Passport Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0"
                                                    placeholder="Passport Number" name="passport_number" required>
                                            </div>
                                            @error('passport_number')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Passport Expring</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control rounded-0"
                                                    placeholder="Passport Expring" name="passport_expiring" required>
                                            </div>
                                            @error('passport_expiring')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Visa Type</label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0 text-capitalize" name="visa_type"
                                                    required>
                                                    <option selected value="0">Visit Visa</option>
                                                    <option value="1">Cancel Visa</option>
                                                    <option value="2">Family Visa</option>
                                                    <option value="3">Freelance Visa</option>
                                                    <option value="4">Own Visa</option>
                                                    <option value="5">Student Visa</option>
                                                </select>
                                            </div>
                                            @error('visa_type')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Visa Expring</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control rounded-0"
                                                    placeholder="Visa Expring" name="visa_expiring" required>
                                            </div>
                                            @error('visa_expiring')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </fieldset>

                                    <fieldset>
                                        <legend class="px-4">Living Information</legend>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Contact Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0"
                                                    placeholder="Contact Number" name="contact_number" required>
                                            </div>
                                            @error('contact_number')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Current Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0"
                                                    placeholder="Current Address" name="current_address" required>
                                            </div>
                                            @error('current_address')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Resident Country</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0"
                                                    placeholder="Resident Country" name="resident_country" required>
                                            </div>
                                            @error('resident_country')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Emergency Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0"
                                                    placeholder="Emergency Number" name="emergency_number" required>
                                            </div>
                                            @error('emergency_number')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </fieldset>

                                </div>
                                <div class="col-md-6">

                                    <fieldset>
                                        <legend class="px-4">Profile Information</legend>
                                        <div class="form-group">
                                            <label class="form-label">Profile Photo</label>
                                            <input type="file" class="rounded-0 ml-5" name="image"
                                                accept="image/x-png, image/gif, image/jpeg, image/png, image/jpg">
                                        </div>
                                        @error('image')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </fieldset>

                                    <fieldset>
                                        <legend class="px-4">Company Information</legend>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Department
                                            </label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0" name="department" required>
                                                    <option value="" selected>Please Select the
                                                        Department</option>
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
                                            <label class="col-form-label col-sm-3 text-sm-start">Designation
                                            </label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0" name="designation" required>
                                                    <option value="" selected>Please Select the Designation</option>
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
                                            <label class="col-form-label col-sm-3 text-sm-start">Join Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control rounded-0"
                                                    placeholder="Join Date" name="join_date" required>
                                            </div>
                                            @error('join_date')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </fieldset>

                                    <fieldset>
                                        <legend class="px-4">Company Information</legend>
                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Special Note</label>
                                            <div class="col-sm-9">
                                                <textarea type="date" class="form-control rounded-0" name="special_note" placeholder="Special Note"
                                                    rows="3"></textarea>
                                            </div>
                                            @error('special_note')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </fieldset>
                                    <div class="mt-2 text-center">
                                        <a href="{{ route('employee.index') }}"
                                            class="btn btn-secondary btn-sm">Close</a>
                                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
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
