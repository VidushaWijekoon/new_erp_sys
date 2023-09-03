@section('title', 'Show Departments')
@extends('layouts.admin.app')
@section('content')
    <div class="row justify-content-between">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef" class="text-capitalize">{{ $departments->department_name }}
                            {{ __('Department') }}</h4>
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">
                                    <span>{{ __('Department Name') }}</span>
                                </label>
                                <input type="text" class="form-control rounded-0 text-capitalize"
                                    value="{{ $departments->department_name }}" readonly disabled>
                            </div>

                            <div class="form-group">
                                <label class="form-label">{{ __('Description') }}</label>
                                <textarea type="password" class="form-control rounded-0 text-capitalize" rows="3" readonly disabled>{{ $departments->description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
