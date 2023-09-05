@section('title', 'Create Quoatation')
@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Create New Quoatation') }}</h4>
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
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Customer Name') }}</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select rounded-0 text-capitalize" name="visa_type"
                                                required>
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
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Quoatation Number') }}</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" value="QO-0001" readonly disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-form-label col-sm-3 text-sm-start">{{ __('Reference') }}</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="Reference">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Shipping Date') }}</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" placeholder="Reference">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Expected Payment Date') }}</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" placeholder="Reference">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label
                                            class="col-form-label col-sm-3 text-sm-start">{{ __('Payment Terms') }}</label>
                                        <div class="col-sm-9">
                                            <select name="payment_term" class="custom-select rounded-0 text-capitalize"
                                                style="width: 100%;">
                                                <option value="" selected="">--Select Payment Terms--</option>
                                                <option value="Net 15">Net 15</option>
                                                <option value="Net 30">Net 30</option>
                                                <option value="Net 45">Net 45</option>
                                                <option value="Net 60">Net 60</option>
                                                <option value="Due end of the month">Due end of the month</option>
                                                <option value="Due end of the next month">Due end of the next month</option>
                                                <option value="Due on Receipt">Due on Receipt
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <hr>

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
                                    <th>Quantity</th>
                                    <th style="width: 400px">Description</th>
                                    <th>Unit Price</th>
                                    <th>Total</th>
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
                '<td><input type="number" step="0.001" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><textarea name="no_and_kind_of_packages[]" class="form-control rounded-0" rows="1" required></textarea></td>';
            html +=
                '<td><input type="number" step="0.001" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="number" step="0.001" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
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
