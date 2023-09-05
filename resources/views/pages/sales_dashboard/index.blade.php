@section('title', 'Sales Dashboard')
@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('Sales') }}</strong> {{ __('Dashboard') }}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12 d-flex">
                <div class="w-100">

                    <div class="row">
                        <div class="col-sm-3">
                            <a href="{{ route('customer.index') }}">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">{{ __('Customers') }}</h1>
                                        <div class="mb-1">
                                            <span class="text-danger">
                                                <h1 class="text-danger">25</h1>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="{{ route('quotation.index') }}">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h1 class="display-5 mt-1 mb-3">{{ __('Quatations') }}</h1>
                                        <div class="mb-1">
                                            <span>
                                                <h1 class="text-danger">25</h1>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Bar Chart</h5>
                    <h6 class="card-subtitle text-muted">A bar chart provides a way of showing data values represented as
                        vertical bars.</h6>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <div style="width: 600px; margin: auto;">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
