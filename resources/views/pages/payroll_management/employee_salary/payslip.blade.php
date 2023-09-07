@section('title', 'PaySheet')
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
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Employee Salary of Vidusha Wijekoon') }}
                    </h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('employee-salary.index') }}">
                        <i class="fa-solid fa-home fa-2x text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-sm-5 col-4">
        </div>
        <div class="col-sm-7 col-8 text-right m-b-30">
            <div class="btn-group btn-group-sm">
                <button class="btn btn-white btn-outline-info"><i class="fa-solid fa-file-csv mx-1"></i>CSV</button>
                <button class="btn btn-white btn-outline-info"><i class="fa-solid fa-file-pdf mx-1"></i>PDF</button>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-12 col-lg-12">
            <div class="card p-5">

                <h4 class="payslip-title">Payslip for the month of July 2018</h4>
                <div class="row">
                    <div class="col-sm-6 m-b-20">
                        <img src="{{ asset('images/company/logortbig.png') }}" class="inv-logo my-3" alt=""
                            width="150">
                        <ul class="list-unstyled mb-0">
                            <li>PreClinic</li>
                            <li>3864 Quiet Valley Lane,</li>
                            <li>Sherman Oaks, CA, 91403</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 m-b-20">
                        <div class="invoice-details">
                            <h3 class="text-uppercase">Payslip #49029</h3>
                            <ul class="list-unstyled">
                                <li>Salary Month: <span>July, 2018</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 m-b-20">
                        <ul class="list-unstyled">
                            <li>
                                <h5 class="mb-0 mt-3"><strong>Albina Simonis</strong></h5>
                            </li>
                            <li><span>Nurse</span></li>
                            <li>Employee ID: NS-0001</li>
                            <li>Joining Date: 7 May 2015</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <h4 class="m-b-10"><strong>Earnings</strong></h4>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><strong>Basic Salary</strong> <span class="float-right">$6500</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>House Rent Allowance (H.R.A.)</strong> <span
                                                class="float-right">$55</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Conveyance</strong> <span class="float-right">$55</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Other Allowance</strong> <span class="float-right">$55</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Earnings</strong> <span
                                                class="float-right"><strong>$55</strong></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <h4 class="m-b-10"><strong>Deductions</strong></h4>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><strong>Tax Deducted at Source (T.D.S.)</strong> <span
                                                class="float-right">$0</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Provident Fund</strong> <span class="float-right">$0</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>ESI</strong> <span class="float-right">$0</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Loan</strong> <span class="float-right">$300</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Deductions</strong> <span
                                                class="float-right"><strong>$59698</strong></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <p class="d-flex justify-content-end">
                            <strong>Net Salary: $59698</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
