@section('title', 'Mark Attendance')
@extends('layouts.admin.app')
@section('content')
    <div class="row justify-content-between">
        <div class="col-12 col-lg-7">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Create New Leave') }}</h4>
                    </span>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
                            @foreach ($errors->all() as $error)
                                <div class="">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('department.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Employee ID<span class="text-danger">*</span></label>
                                    <select class="custom-select rounded-0">
                                        <option>Select Leave Type</option>
                                        <option>Casual Leave 12 Days</option>
                                        <option>Medical Leave</option>
                                        <option>Loss of Pay-(No Pay)</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Date <span class="text-danger">*</span></label>
                                            <select class="custom-select rounded-0">
                                                <option>Select Leave Type</option>
                                                <option>Casual Leave 12 Days</option>
                                                <option>Medical Leave</option>
                                                <option>Loss of Pay-(No Pay)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Attendance<span class="text-danger">*</span></label>
                                    <div>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inline-radios-example"
                                                value="option1">
                                            <span class="form-check-label">
                                                Present
                                            </span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inline-radios-example"
                                                value="option2">
                                            <span class="form-check-label">
                                                Absent
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <a href="{{ route('department.index') }}" type="button"
                                    class="btn btn-secondary btn-sm">{{ __('Close') }}</a>
                                <button type="submit" class="btn btn-primary btn-sm">{{ __('Save Changes') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                                <th>11</th>
                                <th>12</th>
                                <th>13</th>
                                <th>14</th>
                                <th>15</th>
                                <th>16</th>
                                <th>17</th>
                                <th>18</th>
                                <th>19</th>
                                <th>20</th>
                                <th>22</th>
                                <th>23</th>
                                <th>24</th>
                                <th>25</th>
                                <th>26</th>
                                <th>27</th>
                                <th>28</th>
                                <th>29</th>
                                <th>30</th>
                                <th>31</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Albina Simonis</td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td>
                                    <div class="half-day"><span class="first-off"><i
                                                class="fa fa-check text-success"></i></span> <span class="first-off"><i
                                                class="fa fa-close text-danger"></i></span></div>
                                </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td>
                                    <div class="half-day"><span class="first-off"><i
                                                class="fa fa-close text-danger"></i></span> <span class="first-off"><i
                                                class="fa fa-check text-success"></i></span></div>
                                </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
