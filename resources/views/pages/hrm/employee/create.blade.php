@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if ($errors->any())
                        <div class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                                <div class="">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    <div class="card-body">

                        <form action="{{ route('create-employee') }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="px-4">Personal Informations</legend>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Fullname</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0" name="fullname"
                                                    placeholder="Fullname">
                                            </div>
                                            @error('fullname')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control rounded-0" name="email"
                                                    placeholder="Email">
                                            </div>
                                            @error('email')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Gender</label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0" name="gender">
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
                                                    placeholder="Birthday">
                                            </div>
                                            @error('birthday')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Passport Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0"
                                                    placeholder="Passport Number" name="passport_number">
                                            </div>
                                            @error('passport_number')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Passport Expring</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control rounded-0"
                                                    placeholder="Passport Expring" name="passport_expiring">
                                            </div>
                                            @error('passport_expiring')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Visa Type</label>
                                            <div class="col-sm-9">
                                                <select class="custom-select rounded-0" name="visa_type">
                                                    <option selected>Open this select menu</option>
                                                    <option value="0">Male</option>
                                                    <option value="1">Femail</option>
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
                                                    placeholder="Visa Expring" name="visa_expiring">
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
                                                    placeholder="Contact Number" name="contact_number">
                                            </div>
                                            @error('contact_number')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Current Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0"
                                                    placeholder="Current Address" name="current_address">
                                            </div>
                                            @error('current_address')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Resident Country</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0"
                                                    placeholder="Resident Country" name="resident_country">
                                            </div>
                                            @error('resident_country')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-sm-3 text-sm-start">Emergency Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control rounded-0"
                                                    placeholder="Emergency Number" name="emergency_number">
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
                                            <input type="file" class="rounded-0 ml-5" name="image">
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
                                                <select class="custom-select rounded-0" name="department">
                                                    <option selected>Open this select menu</option>
                                                    <option value="0">Male</option>
                                                    <option value="1">Femail</option>
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
                                                    placeholder="Join Date" name="join_date">
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
                                        <a href="{{ route('hrm') }}" class="btn btn-secondary btn-sm">Close</a>
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
