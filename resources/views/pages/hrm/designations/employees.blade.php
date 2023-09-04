@section('title', 'Employees')
@extends('layouts.admin.app')
@section('content')
    <div>
        <div class="container-fluid p-0">
            <div class="d-flex justify-content-between">
                <div class="row mb-2 mb-xl-3">
                    <div class="col-auto d-none d-sm-block">

                    </div>
                </div>
                <div class="row mb-2 mb-xl-3">
                    <div class="col-auto d-none d-sm-block">
                        <a href="{{ route('document-management.index') }}">
                            <i class="fa-solid fa-home fa-2x text-info"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <div class="card flex-fill">
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('EMP ID') }}</th>
                                <th>{{ __('Fullname') }}</th>
                                <th>{{ __('Contact Number') }}</th>
                                <th>{{ __('Resident Country') }}</th>
                                <th>{{ __('Department') }}</th>
                                <th>{{ __('Designation') }}</th>
                                <th>{{ __('Join Date') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Created By') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $x = 1; ?>
                            @forelse ($designation as $designationEmployees)
                                <tr>
                                    <td>{{ $x++ }}</td>

                                    <td class="text-capitalize">{{ $designationEmployees->id }}</td>
                                    <td class="text-capitalize">{{ $designationEmployees->fullname }}</td>
                                    <td class="text-capitalize">{{ $designationEmployees->contact_number }}</td>
                                    <td class="text-capitalize">{{ $designationEmployees->resident_country }}</td>
                                    <td>
                                        @if ($designationEmployees->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Not Active</span>
                                        @endif
                                    </td>
                                    <td>{{ $designationEmployees->designation_name->designation_name }}</td>
                                    <td>{{ $designationEmployees->designation_name->designation_name }}</td>
                                    <td>{{ $designationEmployees->created_at }}</td>
                                    <td class="text-capitalize">{{ $designationEmployees->created_by_username->username }}
                                    </td>
                                </tr>
                            @empty
                                <span class="text-danger">No Data Has Been Found</span>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
