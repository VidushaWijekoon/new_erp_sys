<div>

    <!--------------------------------------------------------------
    # Info
    ---------------------------------------------------------------->
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Departments') }}</h3>
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
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-md-12 d-flex">
                <div class="w-100">

                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $deptCount }}</h3>
                                    <h2>{{ __('Departments') }}</h2>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-building-user"></i>
                                </div>
                                <a href="{{ route('department.index') }}" class="small-box-footer">
                                    {{ __('More info ') }}
                                    <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $designCount }}</h3>
                                    <h2>{{ __('Designations') }}</h2>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-arrows-to-circle"></i>
                                </div>
                                <a href="{{ route('designation.index') }}" class="small-box-footer">
                                    {{ __('More info ') }}
                                    <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $empCount }}</h3>
                                    <h2>{{ __('Employees') }}</h2>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="{{ route('employee.index') }}" class="small-box-footer">
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

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background: #222e3c">
                        <span class="card-title mb-0 d-flex justify-content-between">
                            <h4 style="color: #e9ecef">{{ __('Departments') }}</h4>
                        </span>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="chart-responsive">
                                    <canvas id="pieChart" height="150"></canvas>
                                </div>
                                <!-- ./chart-responsive -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 d-flex align-items-center">
                                <ul class="chart-legend clearfix">
                                    <li><i class="far fa-circle text-danger mx-2"></i>FInance</li>
                                    <li><i class="far fa-circle text-success mx-2"></i>IT</li>
                                    <li><i class="far fa-circle text-warning mx-2"></i>Engineering</li>
                                    <li><i class="far fa-circle text-info mx-2"></i>Marketing</li>
                                    <li><i class="far fa-circle text-primary mx-2"></i>Production</li>
                                    <li><i class="far fa-circle text-secondary mx-2"></i>Purchasing</li>
                                    <li><i class="far fa-circle text-secondary mx-2"></i>QA</li>
                                </ul>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background: #222e3c">
                        <span class="card-title mb-0 d-flex justify-content-between">
                            <h4 style="color: #e9ecef">{{ __('Designations') }}</h4>
                        </span>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="chart-responsive">
                                    <canvas id="pieChart1" height="150"></canvas>
                                </div>
                                <!-- ./chart-responsive -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 d-flex align-items-center">
                                <ul class="chart-legend clearfix">
                                    <li><i class="far fa-circle text-danger mx-2"></i>Junior Software Engineering</li>
                                    <li><i class="far fa-circle text-success mx-2"></i>Senior Software Engineering</li>
                                    <li><i class="far fa-circle text-warning mx-2"></i>Managers</li>
                                    <li><i class="far fa-circle text-info mx-2"></i>Senior Graphic</li>
                                    <li><i class="far fa-circle text-primary mx-2"></i>QA</li>
                                </ul>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>

                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

</div>

@push('scripts')
    <script>
        //-------------
        //- PIE CHART Departments-
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [{
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var pieOptions = {
            legend: {
                display: false
            }
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var pieChart = new Chart(pieChartCanvas, {
            type: 'doughnut',
            data: pieData,
            options: pieOptions
        })

        //-----------------
        //- END PIE CHART -
        //-----------------
        //-------------
        //- PIE CHART Designations -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart1').get(0).getContext('2d')
        var pieData = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [{
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var pieOptions = {
            legend: {
                display: false
            }
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var pieChart = new Chart(pieChartCanvas, {
            type: 'doughnut',
            data: pieData,
            options: pieOptions
        })

        //-----------------
        //- END PIE CHART -
        //-----------------
    </script>
@endpush
