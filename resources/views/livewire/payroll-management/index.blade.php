<div>
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('Payroll') }}</strong> {{ __('Management') }}</h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('hrm-dashboard.index') }}">
                        <i class="fa-solid fa-home fa-2x text-info"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12 d-flex">
                <div class="w-100">

                    <div class="row">

                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $holidaysCount }}</h3>
                                    <h2>{{ __('Year Holidays 2023') }}</h2>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-arrows-to-circle"></i>
                                </div>
                                <a href="{{ route('holidays') }}" class="small-box-footer">
                                    {{ __('More info ') }}
                                    <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><i class="fas fa-zero"></i></h3>
                                    <h2>{{ __('Leaves Request') }}</h2>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-bell-slash"></i>
                                </div>
                                <a href="{{ route('leaves-index') }}" class="small-box-footer">
                                    {{ __('More info ') }}
                                    <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><i class="fas fa-zero"></i></h3>
                                    <h2>{{ __('Attendance') }}</h2>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-calendar-days"></i>
                                </div>
                                <a href="{{ route('attendance.index') }}" class="small-box-footer">
                                    {{ __('More info ') }}
                                    <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><i class="fas fa-zero"></i></h3>
                                    <h2>{{ __('Salary') }}</h2>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-coins"></i>
                                </div>
                                <a href="{{ route('employee-salary.index') }}" class="small-box-footer">
                                    {{ __('More info ') }}
                                    <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
