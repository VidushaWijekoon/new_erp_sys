@section('title', 'Employee Performance')
@extends('layouts.admin.app')
@section('content')
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white text-capitalize" id="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Employees') }}</h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ url('admin/employee/' . $employeesItem->id . '/view_employee') }}">
                        <i class="fa-solid fa-home fa-2x text-info"></i>
                    </a>
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
                            <h4 style="color: #e9ecef">{{ __('Sale EMP 0001 Performance') }}</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">$18,230.00</span>
                                <span>Sales Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                </span>
                                <span class="text-muted">Since last month</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> This year
                            </span>

                            <span>
                                <i class="fas fa-square text-gray"></i> Last year
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 justify-content-center mx-auto mb-5 ">
                <div class="card">
                    <div class="card-header" style="background: #222e3c">
                        <span class="card-title mb-0 d-flex justify-content-between">
                            <h4 style="color: #e9ecef">{{ __('09/09/2023 Performance') }}</h4>
                        </span>
                    </div>
                    <div class="card-body">
                        <table id="" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Completed QR</th>
                                    <th>Target</th>
                                    <th>Morning Delay Time</th>
                                    <th>Lunch Delay Time</th>
                                    <th>Teatime delay time</th>
                                    <th>Total delay time per day</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2023-02-01 09:09:25</td>
                                    <td>22</td>
                                    <td>still not complete </td>
                                    <td>00:03:00</td>
                                    <td>00:10:00</td>
                                    <td>00:00:00</td>
                                    <td>00:13:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-02 09:03:09</td>
                                    <td>19</td>
                                    <td>still not complete </td>
                                    <td>0</td>
                                    <td>00:09:00</td>
                                    <td>0</td>
                                    <td>00:09:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-04 09:06:10</td>
                                    <td>21</td>
                                    <td>still not complete </td>
                                    <td>00:01:00</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>00:01:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-05 09:01:27</td>
                                    <td>21</td>
                                    <td>still not complete </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-06 09:03:19</td>
                                    <td>23</td>
                                    <td>still not complete </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2023-02-07 09:05:40</td>
                                    <td>19</td>
                                    <td>still not complete </td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-08 09:01:10</td>
                                    <td>21</td>
                                    <td>still not complete </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2023-02-09 09:01:39</td>
                                    <td>21</td>
                                    <td>still not complete </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-11 09:04:04</td>
                                    <td>23</td>
                                    <td>still not complete </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>00:00:00</td>
                                    <td>00:00:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-12 09:01:36</td>
                                    <td>41</td>
                                    <td>still not complete </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2023-02-13 09:01:20</td>
                                    <td>40</td>
                                    <td>still not complete </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>00:02:00</td>
                                    <td>00:02:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-14 09:10:01</td>
                                    <td>41</td>
                                    <td>still not complete </td>
                                    <td>00:05:00</td>
                                    <td>00:04:00</td>
                                    <td>00:00:00</td>
                                    <td>00:09:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-15 09:10:08</td>
                                    <td>38</td>
                                    <td>still not complete </td>
                                    <td>00:05:00</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>00:05:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-16 09:07:37</td>
                                    <td>16</td>
                                    <td>still not complete </td>
                                    <td>00:02:00</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>00:02:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-19 11:27:38</td>
                                    <td>17</td>
                                    <td>still not complete </td>
                                    <td>02:22:00</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>02:22:00</td>
                                </tr>
                                <tr>
                                    <td>2023-02-21 18:58:42</td>
                                    <td>4</td>
                                    <td>still not complete </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>00:13:00</td>
                                    <td>00:13:00</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Total Delay Time during selected date range</td>
                                    <td>03:16:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                    labels: ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
                    datasets: [{
                            backgroundColor: '#007bff',
                            borderColor: '#007bff',
                            data: [1000, 2000, 3000, 2500, 2700, 2500, 3000]
                        },
                        {
                            backgroundColor: '#ced4da',
                            borderColor: '#ced4da',
                            data: [700, 1700, 2700, 2000, 1800, 1500, 2000]
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
                                        value += 'k'
                                    }
                                    return '$' + value
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
