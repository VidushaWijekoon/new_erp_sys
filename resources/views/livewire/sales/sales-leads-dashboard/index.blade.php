<div>

    <!--------------------------------------------------------------
    # Info
    ---------------------------------------------------------------->
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('Sales Leads') }}</strong> {{ __('Departments') }}</h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('sales.dashboard') }}">
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
                                    <h3>365</h3>
                                    <h2>{{ __('Customers') }}</h2>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="{{ route('customer.index') }}" class="small-box-footer">
                                    {{ __('More info ') }}
                                    <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>365</h3>
                                    <h2>{{ __('Leads') }}</h2>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-address-book"></i>
                                </div>
                                <a href="{{ route('leads') }}" class="small-box-footer">
                                    {{ __('More info ') }}
                                    <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>365</h3>
                                    <h2>{{ __('Vendors') }}</h2>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users-line"></i>
                                </div>
                                <a href="{{ route('vendors') }}" class="small-box-footer">
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header" style="background: #222e3c">
                        <span class="card-title mb-0 d-flex justify-content-between">
                            <h4 style="color: #e9ecef">{{ __('Weekly Leads') }}</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span>Sales Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-muted">Since last daily</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square mx-1" style="color: #007bff"></i> This Week Customers
                            </span>
                            <span>
                                <i class="fas fa-square mx-1" style="color: #19d127"></i> Last Week Leads
                            </span>
                            <span>
                                <i class="fas fa-square mx-1" style="color: #d11919"></i> Last Week Vendors
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header" style="background: #222e3c">
                        <span class="card-title mb-0 d-flex justify-content-between">
                            <h4 style="color: #e9ecef">{{ __('Monthly Leads') }}</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span>Sales Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-muted">Since last month</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="sales-chart-1" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square mx-1" style="color: #007bff"></i> This Month Customers
                            </span>
                            <span>
                                <i class="fas fa-square mx-1" style="color: #19d127"></i> Last Month Leads
                            </span>
                            <span>
                                <i class="fas fa-square mx-1" style="color: #d11919"></i> Last Month Vendors
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>


@push('scripts')
    <script>
        $(function() {
            'use strict'

            var ticksStyle = {
                fontColor: '#495057',
                fontStyle: 'bold'
            }

            var mode = 'index'
            var intersect = true

            var $salesChart = $('#sales-chart')
            var salesChart = new Chart($salesChart, {
                type: 'bar',
                data: {
                    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    datasets: [{
                            backgroundColor: '#007bff',
                            borderColor: '#007bff',
                            data: [10, 20, 65, 25, 27, 25, 30]
                        },
                        {
                            backgroundColor: '#19d127',
                            borderColor: '#19d127',
                            data: [10, 20, 30, 25, 52, 25, 30]
                        },
                        {
                            backgroundColor: '#d11919',
                            borderColor: '#d11919',
                            data: [10, 20, 30, 25, 52, 25, 30]
                        }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        mode: mode,
                        intersect: intersect
                    },
                    hover: {
                        mode: mode,
                        intersect: intersect
                    },
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            // display: false,
                            gridLines: {
                                display: false,
                                lineWidth: '4px',
                                color: 'rgba(0, 0, 0, .2)',
                                zeroLineColor: 'transparent'
                            },
                            ticks: $.extend({
                                beginAtZero: true,

                                // Include a dollar sign in the ticks
                                callback: function(value, index, values) {
                                    if (value >= 1000) {
                                        value /= 1000
                                    }
                                    return value
                                }
                            }, ticksStyle)
                        }],
                        xAxes: [{
                            display: true,
                            gridLines: {
                                display: false
                            },
                            ticks: ticksStyle
                        }]
                    }
                }
            })

            var $salesChart = $('#sales-chart-1')
            var salesChart = new Chart($salesChart, {
                type: 'bar',
                data: {
                    labels: ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
                    datasets: [{
                            backgroundColor: '#007bff',
                            borderColor: '#007bff',
                            data: [100, 200, 650, 250, 270, 250, 300]
                        },
                        {
                            backgroundColor: '#19d127',
                            borderColor: '#19d127',
                            data: [100, 200, 650, 250, 270, 250, 300]
                        },
                        {
                            backgroundColor: '#d11919',
                            borderColor: '#d11919',
                            data: [100, 200, 650, 250, 270, 250, 300]
                        }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        mode: mode,
                        intersect: intersect
                    },
                    hover: {
                        mode: mode,
                        intersect: intersect
                    },
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            // display: false,
                            gridLines: {
                                display: true,
                                lineWidth: '4px',
                                color: 'rgba(0, 0, 0, .2)',
                                zeroLineColor: 'transparent'
                            },
                            ticks: $.extend({
                                beginAtZero: true,

                                // Include a dollar sign in the ticks
                                callback: function(value, index, values) {
                                    if (value >= 1000) {
                                        value /= 1000
                                    }
                                    return value
                                }
                            }, ticksStyle)
                        }],
                        xAxes: [{
                            display: true,
                            gridLines: {
                                display: false
                            },
                            ticks: ticksStyle
                        }]
                    }
                }
            })

        })
    </script>
@endpush
