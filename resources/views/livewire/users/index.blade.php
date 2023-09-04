<div>
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white text-capitalize" id="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Users') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <a href="{{ route('user.register') }}"
                        class="btn btn-sm btn-primary">{{ __('Create New User') }}</a>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('EMP ID') }}</th>
                            <th>{{ __('Username') }}</th>
                            <th>{{ __('Department') }}</th>
                            <th>{{ __('Designation') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Created At') }}</th>
                            <th>{{ __('Created By') }}</th>
                            <th class="text-center">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $x = 1; ?>
                        @forelse ($users as $allUsers)
                            <tr>
                                <td>{{ $x++ }}</td>
                                <td>{{ $allUsers->id }}</td>
                                <td class="text-capitalize">{{ $allUsers->username }}</td>
                                <td class="text-capitalize">{{ $allUsers->emp_id }}</td>
                                <td class="text-capitalize">{{ $allUsers->role }}</td>
                                <td>
                                    @if ($allUsers->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Not Active</span>
                                    @endif
                                </td>
                                <td>{{ $allUsers->created_at }}</td>
                                <td class="text-capitalize">{{ $allUsers->username }}</td>
                                <td class="table-action">
                                    @if ($allUsers->status == '1')
                                        <a href="{{ url('admin/user/' . $allUsers->id . '/dectivate') }}"
                                            onclick="return confirm('Are you sure you want to deactivate this user')">
                                            <i class="fa-solid fa-circle-xmark mx-1 text-danger"></i>
                                        </a>
                                    @elseif($allUsers->status == '0')
                                        <a href="{{ url('admin/user/' . $allUsers->id . '/activate') }}"
                                            onclick="return confirm('Are you sure you want to activate this user')">
                                            <i class="fa-solid fa-circle-check mx-1 text-success"></i>
                                        </a>
                                    @endif
                                    <a href="{{ url('admin/user/' . $allUsers->id . '/show') }}">
                                        <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                    </a>
                                    <a href="{{ url('admin/user/' . $allUsers->id . '/edit') }}">
                                        <i class="fa-solid fa-pen mx-1 text-info"></i>
                                    </a>
                                    <a href="{{ url('admin/user/' . $allUsers->id . '/destroy') }}"
                                        onclick="return confirm('Are you sure you want to delete this user')">
                                        <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <span class="text-danger">No Users Has Been Found!</span>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mx-3 mt-2">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
