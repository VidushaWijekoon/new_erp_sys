@section('title', 'Create New Leads')
@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">Create</strong> New Leads</h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('leads') }}">
                        <i class="fa-solid fa-home fa-2x text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
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
                                    <th>Customer Name</th>
                                    <th>Platform</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Resident Country</th>
                                    <th>Action</th>
                                </thead>
                            </tr>

                            <tbody id="tbody">

                            </tbody>
                        </table>
                    </div>

                    <table class="m-3 mx-auto">
                        <tr class="">
                            <td>
                                <input type="button" value="Add Leads" onclick="addItem()"
                                    class="btn btn-sm btn-info mx-2 text-white" />
                            </td>
                        </tr>
                    </table>

                    <div class="d-flex justify-content-end m-3">
                        <a href="{{ route('quotation.index') }}" type="button"
                            class="btn btn-secondary btn-sm mx-2">{{ __('Close') }}</a>
                        <button type="submit" class="btn btn-primary btn-sm">{{ __('Save all Leads') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var items = 0; // Initialize the items count

        function addItem() {
            items++;

            var html = "<tr>";
            html += "<td>" + items + "</td>";
            html +=
                '<td><input type="text" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="text" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="text" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="text" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="text" name="tare[]" class="form-control rounded-0" required /></td>';
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
