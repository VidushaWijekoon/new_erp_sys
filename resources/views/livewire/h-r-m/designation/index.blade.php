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
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Designations') }}</h3>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info">
                        <i class="fa-solid fa-file-invoice text-white"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            <h4>{{ __('Designations') }}</h4>
                        </span>
                        <span class="info-box-number">
                            <h4>{{ $deptCount }}</h4>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <a href="{{ route('designation.create') }}"
                            class="btn btn-sm btn-primary">{{ __('Create New Designation') }}</a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>{{ __('#') }}</th>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Designation Name') }}</th>
                                    <th>{{ __('Discription') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Created At') }}</th>
                                    <th>{{ __('Created By') }}</th>
                                    <th class="text-center">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x = 1; ?>
                                @forelse ($designation as $designationItem)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>
                                            <a
                                                href="{{ url('admin/designation/' . $designationItem->id . '/designation') }}">
                                                {{ $designationItem->id }}
                                            </a>
                                        </td>
                                        <td class="text-capitalize">
                                            <a
                                                href="{{ url('admin/designation/' . $designationItem->id . '/designation') }}">
                                                {{ $designationItem->designation_name }}</a>
                                        </td>
                                        <td class="text-capitalize">
                                            <a
                                                href="{{ url('admin/designation/' . $designationItem->id . '/designation') }}">
                                                {{ $designationItem->description }}</a>
                                        </td>
                                        <td>
                                            @if ($designationItem->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Not Active</span>
                                            @endif
                                        </td>
                                        <td>{{ $designationItem->created_at }}</td>
                                        <td class="text-capitalize">
                                            {{ $designationItem->created_by_username->username }}
                                        </td>
                                        <td class="table-action">
                                            @if ($designationItem->status == '1')
                                                <a href="{{ url('admin/designation/' . $designationItem->id . '/dectivate') }}"
                                                    onclick="return confirm('Are you sure you want to deactivate this designation')"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Deactivate {{ $designationItem->designation_name }}">
                                                    <i class="fa-solid fa-circle-xmark mx-1 text-danger"></i>
                                                </a>
                                            @elseif($designationItem->status == '0')
                                                <a href="{{ url('admin/designation/' . $designationItem->id . '/activate') }}"
                                                    onclick="return confirm('Are you sure you want to activate this designation')"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Activate {{ $designationItem->designation_name }}">
                                                    <i class="fa-solid fa-circle-check mx-1 text-success"></i>
                                                </a>
                                            @endif
                                            <a href="{{ url('admin/designation/' . $designationItem->id . '/show') }}"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Show {{ $designationItem->designation_name }}">
                                                <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                            </a>
                                            <a href="{{ url('admin/designation/' . $designationItem->id . '/edit') }}"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Edit {{ $designationItem->designation_name }}">
                                                <i class="fa-solid fa-pen mx-1 text-info"></i>
                                            </a>
                                            <a href="{{ url('admin/designation/' . $designationItem->id . '/destroy') }}"
                                                onclick="return confirm('Are you sure you want to delete this designation')"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Delete {{ $designationItem->designation_name }}">
                                                <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                            </a>
                                        </td>
                                    @empty
                                        <span class="text-danger">{{ __('No Found!') }}</span>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end mx-3 mt-2">
                        {{ $designation->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
