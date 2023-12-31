<div>
    @section('title', 'VSoft | Holidays')
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white text-capitalize" id="alert">
            {{ session('message') }}
        </div>
    @endif
    @include('livewire.payroll.holiday.holiday-form')
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong>
                        {{ __('Holidays In') }} <?= date('Y') ?>
                    </h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('payroll-management.index') }}">
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
                            <h4>{{ __('Holidays 2023') }}</h4>
                        </span>
                        <span class="info-box-number">
                            <h4>{{ $holidaysCount }}</h4>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

        </div>
    </div>

    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-lg-8 ">
                <div class="card flex-fill">
                    <div class="card-header">
                        <a href="#" data-toggle="modal" data-target="#createHoliday"
                            class="btn btn-sm btn-primary">{{ __('Create New Holiday') }}</a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>{{ __('#') }}</th>
                                    <th>{{ __('Holiday Name') }}</th>
                                    <th>{{ __('Holiday Date') }}</th>
                                    <th>{{ __('Created At') }}</th>
                                    <th>{{ __('Created By') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $x = 1; ?>
                                @foreach ($holidays as $allHolidays)
                                    <tr>
                                        <td>{{ $x++ }}</td>
                                        <td>{{ $allHolidays->holiday_name }}</td>
                                        <td>{{ $allHolidays->holiday_date }}</td>
                                        <td>{{ $allHolidays->created_at }}</td>
                                        <td>{{ $allHolidays->created_by_username->username }}</td>
                                        <td class="table-action">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-toggle="modal" data-target="#showHoliday"
                                                wire:click="show({{ $allHolidays->id }})"
                                                title="Show {{ $allHolidays->holiday_name }}">
                                                <i class="fa-solid fa-eye mx-1 text-primary"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-toggle="modal" data-target="#editHoliday"
                                                wire:click="edit({{ $allHolidays->id }})"
                                                title="Edit {{ $allHolidays->holiday_name }}">
                                                <i class="fa-solid fa-pen mx-1 text-info"></i>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-toggle="modal" data-target="#deleteHoliday"
                                                wire:click="deleteHoliday({{ $allHolidays->id }})"
                                                title="Delete {{ $allHolidays->holiday_name }}">
                                                <i class="fa-solid fa-trash mx-1 text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
