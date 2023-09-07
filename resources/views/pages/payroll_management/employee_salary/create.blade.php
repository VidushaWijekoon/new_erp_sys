@section('title', 'Create New Holiday')
@extends('layouts.admin.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-12 col-xl-10">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Salary Sheet') }}</h4>
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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">{{ __('Employee Name and ID') }}</label>
                                <select class="custom-select rounded-0">
                                    <option>Please Select Employee ID</option>
                                    <option>{{ __('Vidusha Wijekoon - 0001') }}</option>
                                    <option>{{ __('Vidusha Wijekoon - 0002') }}</option>
                                    <option>{{ __('Vidusha Wijekoon - 0003') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">{{ __('Net Salary') }}</label>
                                <input type="text" class="form-control" placeholder="Net Salary" disabled readonly
                                    value="2500">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row mb-3">

                        <div class="col-md-6">
                            <fieldset>
                                <legend class="px-4">{{ __('Earning') }}</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('Basic') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" name="fullname"
                                            placeholder="Basic Salary" required>
                                    </div>
                                    @error('fullname')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('DA(40%)') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" name="email"
                                            placeholder="DA Percentage" required>
                                    </div>
                                    @error('email')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('HRA(15%)') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" name="email"
                                            placeholder="HRA Percentage" required>
                                    </div>
                                    @error('gender')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('Conveyance') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" name="birthday"
                                            placeholder="Conveyance" required>
                                    </div>
                                    @error('birthday')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('Allowance') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" placeholder="Allowance"
                                            name="passport_number" required>
                                    </div>
                                    @error('passport_number')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label
                                        class="col-form-label col-sm-3 text-sm-start">{{ __('Medical Allowance') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" placeholder="Medical Allowance"
                                            name="passport_expiring" required>
                                    </div>
                                    @error('passport_expiring')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('Others') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" placeholder="Others Earnings"
                                            name="passport_expiring" required>
                                    </div>
                                    @error('passport_expiring')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                            </fieldset>
                        </div>

                        <div class="col-md-6">
                            <fieldset>
                                <legend class="px-4">{{ __('Deductions') }}</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('TDS') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" name="fullname"
                                            placeholder="TDS Percentage" required>
                                    </div>
                                    @error('fullname')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('ESI') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" name="email"
                                            placeholder="ESI Percentage" required>
                                    </div>
                                    @error('email')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('PF') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" name="email"
                                            placeholder="PF Percentage" required>
                                    </div>
                                    @error('gender')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('Leave') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" name="birthday"
                                            value="4.5 Days" required readonly disabled>
                                    </div>
                                    @error('birthday')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('Prof. Tax') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" placeholder="Allowance"
                                            name="Tex Deducations" required>
                                    </div>
                                    @error('passport_number')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label
                                        class="col-form-label col-sm-3 text-sm-start">{{ __('Labour Welfare') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" placeholder="Labour Welfare"
                                            name="passport_expiring" required>
                                    </div>
                                    @error('passport_expiring')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('Fund') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0" placeholder="Fund"
                                            name="passport_expiring" required>
                                    </div>
                                    @error('passport_expiring')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-sm-3 text-sm-start">{{ __('Others') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control rounded-0"
                                            placeholder="Others Deductions" name="passport_expiring" required>
                                    </div>
                                    @error('passport_expiring')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                            </fieldset>
                        </div>

                    </div>

                    <a href="{{ route('employee-salary.index') }}" type="button"
                        class="btn btn-secondary btn-sm">{{ __('Close') }}</a>
                    <button type="submit" class="btn btn-primary btn-sm">{{ __('Save Changes') }}</button>
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
