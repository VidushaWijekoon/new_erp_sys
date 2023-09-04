@section('title', 'Create New User')
@extends('layouts.admin.app')
@section('content')
    <div class="row justify-content-between">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Create New User') }}</h4>
                    </span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label class="form-label">
                                        <span>{{ __('Name') }}</span>
                                    </label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        style="border-radius: 0">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">
                                        <span>{{ __('EMP ID') }}</span>
                                    </label>
                                    <select class="custom-select rounded-0" name="emp_id" required>
                                        <option value="" selected>Please Select the EMP ID</option>
                                        @foreach ($available_users as $emp)
                                            <option value="{{ $emp->id }}" class="text-capitalize">
                                                {{ $emp->id }} - {{ $emp->fullname }} -
                                                {{ $emp->designation_name->designation_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('emp_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">
                                        <span>{{ __('Role') }}</span>
                                    </label>
                                    <select class="custom-select rounded-0" name="role" required>
                                        <option value="" selected>Please Select the Designation</option>
                                        @foreach ($role as $emp)
                                            <option value="{{ $emp->id }}" class="text-capitalize">
                                                {{ $emp->designation_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">{{ __('Username') }}</label>
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus
                                        style="border-radius: 0">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" style="border-radius: 0">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        style="border-radius: 0">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <a href="{{ route('users.index') }}" type="button"
                                    class="btn btn-secondary btn-sm">{{ __('Close') }}</a>
                                <button type="submit" class="btn btn-primary btn-sm">{{ __('Save Changes') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Available Users to Create') }}</h4>
                    </span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>EMP ID</th>
                                    <th>EMP Fullname</th>
                                    <th>EMP Department</th>
                                    <th>EMP Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($available_users as $availableUsers)
                                    <tr>
                                        <td>{{ $availableUsers->id }}</td>
                                        <td>{{ $availableUsers->fullname }}</td>
                                        <td>{{ $availableUsers->department_name->department_name }}</td>
                                        <td>{{ $availableUsers->designation_name->designation_name }}</td>
                                    </tr>
                                @empty
                                    <span class="text-danger">No Available Employees to Create New User</span>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
