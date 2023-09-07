@section('title', 'Create Quoatation')
@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Create New Invoice') }}</h4>
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
                    <div class=" row" style="background-color: #fff;">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Quoation Number <span class="text-danger">*</span></label>
                                        <select class="custom-select rounded-0 text-capitalize" name="visa_type" required>
                                            <option selected value="0">{{ __('Please Select Quoatation Number') }}
                                            </option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Customer Name <span class="text-danger">*</span></label>
                                        <select class="custom-select rounded-0 text-capitalize" name="visa_type" required>
                                            <option selected value="0">{{ __('Please Select Customer Name') }}
                                            </option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Tax</label>
                                        <select class="custom-select rounded-0 text-capitalize" name="visa_type" required>
                                            <option selected value="0">{{ __('Please Select Customer Name') }}
                                            </option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                            <option value="1">{{ __('Vidusha Wijekoon') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Shipping Address</label>
                                        <textarea class="form-control rounded-0" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Billing Address</label>
                                        <textarea class="form-control rounded-0" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Invoice date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input type="date" class="form-control datetimepicker rounded-0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Due Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input type="date" class="form-control datetimepicker rounded-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">

                                    <div class="card-header" style="background: #222e3c">
                                        <span class="card-title mb-0 d-flex justify-content-between">
                                            <h4 style="color: #e9ecef">{{ __('Quoataion Details') }}</h4>
                                        </span>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="emptbl" class="table table-bordered table-hover">
                                            <tr class="bg-secondary text-white">
                                                <thead>
                                                    <th>#</th>
                                                    <th>Item</th>
                                                    <th style="width: 400px">Description</th>
                                                    <th>Unit Cost</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </thead>
                                            </tr>

                                            <tbody id="tbody">

                                            </tbody>
                                        </table>
                                    </div>

                                    <table class="mb-3 mx-auto">
                                        <tr class="">
                                            <td>
                                                <input type="button" value="Add Container" onclick="addItem()"
                                                    class="btn btn-sm btn-info mx-2 text-white" />
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-white">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-right">Total</td>
                                                    <td style="text-align: right; padding-right: 30px;width: 230px">0
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right">Tax</td>
                                                    <td style="text-align: right; padding-right: 30px;width: 230px">
                                                        <input class="form-control text-right form-amt" value="0"
                                                            readonly="" type="text">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right">
                                                        Discount %
                                                    </td>
                                                    <td style="text-align: right; padding-right: 30px;width: 230px">
                                                        <input class="form-control text-right" type="text">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: right; font-weight: bold">
                                                        Grand Total
                                                    </td>
                                                    <td
                                                        style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                        $ 0.00
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group rounded-0">
                                                <label>Additional Information</label>
                                                <textarea class="form-control" rows=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-end mt-2">
                        <a href="{{ route('customer.index') }}" type="button"
                            class="btn btn-secondary btn-sm mx-2">{{ __('Close') }}</a>
                        <button type="submit" class="btn btn-primary btn-sm">{{ __('Create Quoatation') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@push('scripts')
    <script>
        var items = 0;

        var items = 0; // Initialize the items count

        function addItem() {
            items++;

            var html = "<tr>";
            html += "<td>" + items + "</td>";
            html +=
                '<td><input type="text" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><textarea name="no_and_kind_of_packages[]" class="form-control rounded-0" rows="1" required></textarea></td>';
            html +=
                '<td><input type="number" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="number" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="number" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="number" min="0" name="tare[]" class="form-control rounded-0" required readonly disabled /></td>';
            html +=
                "<td><button type='button' class='btn btn-sm btn-danger' onclick='deleteRow(this);'>Delete</button></td>";
            html += "</tr>";

            var row = document.getElementById("tbody").insertRow();
            row.innerHTML = html;
        }


        function deleteRow(button) {
            items--;
            button.parentElement.parentElement.remove();
        }
    </script>
@endpush
