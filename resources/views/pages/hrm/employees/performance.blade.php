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
            <div class="col-lg-12 justify-content-center mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between mt-1">
                            <h1><strong>February</strong> Monthly Report</h1>
                        </div>
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
