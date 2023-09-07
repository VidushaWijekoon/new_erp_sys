@section('title', 'Create New Customer')
@extends('layouts.admin.app')
@section('content')
    <div class="row justify-content-between">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Create New Customer') }}</h4>
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

                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Organization</label>
                            <div class="col-sm-8 mt-2">
                                <div class="icheck-success d-inline">
                                    <input type="radio" id="c27" name="organization" value="business" required
                                        checked>
                                    <label class="label_values" for="c27" style="margin-right: 15px;">Business

                                    </label>
                                </div>
                                <div class="icheck-danger d-inline">
                                    <input type="radio" id="c28" name="organization" value="individual">
                                    <label class="label_values" for="c28">Individual </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Customer Details</label>
                            <div class="col-sm-10 d-flex">
                                <select class="custom-select rounded-0" name="salutation"
                                    style="border-radius: 5px; width: 10%;" required>
                                    <option selected value="">--Select Salutaion--</option>
                                    <option value="mr">MR</option>
                                    <option value="mrs">MRS</option>
                                    <option value="ms">MS</option>
                                    <option value="mss">MSS</option>
                                </select>
                                <input type="text" class="form-control w-25 mx-1" placeholder="First Name"
                                    name="first_name" required>
                                <input type="text" class="form-control w-25 mx-1" placeholder="Last Name"
                                    name="last_name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Company Name</label>
                            <div class="col-sm-10 d-flex">
                                <input type="text" class="form-control w-25 rounded-0" placeholder="Company Name"
                                    name="company_name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Company Email</label>
                            <div class="col-sm-10 d-flex">
                                <input type="email" class="form-control w-25 rounded-0" placeholder="Company Email"
                                    name="company_email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Resident Country</label>
                            <div class="col-sm-10 d-flex">
                                <select class="custom-select rounded-0 w-25" name="salutation" style="border-radius: 5px; "
                                    required>
                                    <option selected value="">--Select Resident Country--</option>
                                    <option value="mr">MR</option>
                                    <option value="mrs">MRS</option>
                                    <option value="ms">MS</option>
                                    <option value="mss">MSS</option>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Customer Phone</label>
                            <div class="col-sm-10 d-flex">
                                <input type="text" class="form-control w-25 rounded-0" placeholder="Customer Phone"
                                    name="first_name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Whatsapp Number</label>
                            <div class="col-sm-10 d-flex">
                                <input type="text" class="form-control w-25 rounded-0" placeholder="Whatsapp Number"
                                    name="first_name" required>
                            </div>
                        </div>
                    </div>

                    <fieldset>
                        <legend>Other Details</legend>
                        <div class="row">
                            <div class="card card-primary card-outline card-outline-tabs m-2 w-100">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="tab1" role="tablist">
                                        <li class="nav-item text-center" style="width: 150px;">
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                                href="#custom-tabs-four-home" role="tab"
                                                aria-controls="custom-tabs-four-home" aria-selected="true"
                                                style="color: #000; font-size: 13px;">Address</a>
                                        </li>
                                        <li class="nav-item text-center" style="width: 150px;">
                                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                                href="#custom-tabs-four-profile" role="tab"
                                                aria-controls="custom-tabs-four-profile" aria-selected="false"
                                                style="color: #000; font-size: 13px;">Other Details</a>
                                        </li>

                                        <li class="nav-item text-center" style="width: 150px;">
                                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                                href="#custom-tabs-four-tab4" role="tab"
                                                aria-controls="custom-tabs-four-tab4" aria-selected="false"
                                                style="color: #000; font-size: 13px;">Contact Person</a>
                                        </li>
                                        <li class="nav-item text-center" style="width: 150px;">
                                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                                href="#custom-tabs-four-tab5" role="tab"
                                                aria-controls="custom-tabs-four-tab5" aria-selected="false"
                                                style="color: #000; font-size: 13px;">Remarks</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=" card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <!-- ============================================================== -->
                                        <!-- Tab 1  -->
                                        <!-- ============================================================== -->
                                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-home-tab">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class=" card-title">Billing Address</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label
                                                                        class="col-sm-4 col-form-label">Attention</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <input type="text"
                                                                            class="form-control w-75 rounded-0"
                                                                            name="billing_attention">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">Country/
                                                                        Region</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <select name="billing_country_region"
                                                                            class="info_select w-75 custom-select rounded-0"
                                                                            style="border-radius: 5px;">
                                                                            <option value="" selected
                                                                                class="">--Select
                                                                                Country--
                                                                            </option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">Address</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3" placeholder="Street 1"
                                                                            name="billing_street1" style="width: 75%; font-size: 10px;"></textarea>

                                                                    </div>
                                                                    <label class="col-sm-4 col-form-label"></label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <textarea class="form-control mt-2 rounded-0" id="exampleFormControlTextarea1" rows="3" placeholder="Street 2"
                                                                            name="shipping_street2" style="width: 75%; font-size: 10px;"></textarea>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">City</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <input type="text"
                                                                            class="form-control w-75 rounded-0"
                                                                            name="billing_city" placeholder="City">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">State</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <input type="text"
                                                                            class="form-control w-75 rounded-0"
                                                                            name="billing_state" placeholder="State">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">Zip
                                                                        Code</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <input type="number"
                                                                            class="form-control w-75 rounded-0"
                                                                            name="billing_zip_code"
                                                                            placeholder="Zip Code">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">Phone</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <input type="number"
                                                                            class="form-control w-75 rounded-0"
                                                                            name="billing_customer_phone_number"
                                                                            placeholder="Phone">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class=" card-title">Shipping Address</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label
                                                                        class="col-sm-4 col-form-label">Attention</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <input type="text"
                                                                            class="form-control w-75 rounded-0"
                                                                            name="shipping_attention">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">Country/
                                                                        Region</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <select name="billing_country_region"
                                                                            class="info_select w-75 custom-select rounded-0">
                                                                            <option value="" selected>--Select
                                                                                Country--
                                                                            </option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">Address</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Street 1"
                                                                            name="shipping_street1" style="width: 75%; font-size: 10px;"></textarea>

                                                                    </div>
                                                                    <label class="col-sm-4 col-form-label"></label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="3" placeholder="Street 2"
                                                                            name="shipping_street2" style="width: 75%; font-size: 10px;"></textarea>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">City</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <input type="text"
                                                                            class="form-control w-75 rounded-0"
                                                                            name="shipping_city" placeholder="City">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">State</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <input type="text"
                                                                            class="form-control w-75 rounded-0"
                                                                            name="shipping_state" placeholder="State">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">Zip
                                                                        Code</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <input type="text"
                                                                            class="form-control w-75 rounded-0"
                                                                            name="shipping_zip_code"
                                                                            placeholder="Zip Code">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <label class="col-sm-4 col-form-label">Phone</label>
                                                                    <div class="col-sm-8 d-flex">
                                                                        <input type="text"
                                                                            class="form-control w-75 rounded-0"
                                                                            name="shipping_customer_phone_number"
                                                                            placeholder="Phone">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ============================================================== -->
                                        <!-- Customer Other Details  -->
                                        <!-- ============================================================== -->
                                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-profile-tab">

                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Currency</label>
                                                    <div class="col-sm-10">

                                                        <select name="billing_country_region"
                                                            class="info_select w-25 custom-select rounded-0">
                                                            <option value="" selected>--Select Currency--
                                                            </option>
                                                            <option value="aed">AED د.إ</option>
                                                            <option value="usd">USD $</option>
                                                            <option value="euro">Euro €</option>
                                                            <option value="pound">Pound £</option>
                                                            <option value="yen">Yen ¥</option>
                                                            <option value="franc">Franc ₣</option>
                                                            <option value="ruppe">Ruppe ₹</option>
                                                            <option value="yuan">Yuan ¥</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Language</label>
                                                    <div class="col-sm-10 d-flex">
                                                        <select name="billing_country_region"
                                                            class="info_select w-25 custom-select rounded-0">
                                                            <option value="" selected>--Select Languages--
                                                            </option>
                                                            <option value="english">English</option>
                                                            <option value="arabic">Arabic</option>
                                                            <option value="chinese">Chinese</option>
                                                            <option value="spanish">Spanish</option>
                                                            <option value="france">France</option>
                                                            <option value="italian">Italian</option>
                                                            <option value="japanese">Japanese</option>
                                                            <option value="hindi">Hindi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Payment Terms</label>
                                                    <div class="col-sm-10 d-flex">
                                                        <select name="billing_country_region"
                                                            class="info_select w-25 custom-select rounded-0">
                                                            <option value="" selected>--Select Payment Terms--
                                                            </option>
                                                            <option value="net 15">Net 15</option>
                                                            <option value="net 30">Net 30</option>
                                                            <option value="net 45">Net 45</option>
                                                            <option value="net 60">Net 60</option>
                                                            <option value="due end of the month">Due end of the
                                                                month</option>
                                                            <option value="duo end the the next month">Due end
                                                                of the next month</option>
                                                            <option value="due on receipt">Due on Receipt
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Whatsapp
                                                        Number</label>
                                                    <div class="col-sm-10 d-flex">
                                                        <input type="number" class="form-control w-25 rounded-0"
                                                            placeholder="Whatsapp" name="whatsapp_number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Facebook</label>
                                                    <div class="col-sm-10 d-flex">
                                                        <input type="text" class="form-control w-25 rounded-0"
                                                            placeholder="Facebook" name="facebook">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <!-- ============================================================== -->
                                        <!-- Contact Person  -->
                                        <!-- ============================================================== -->
                                        <div class="tab-pane fade" id="custom-tabs-four-tab4" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-tab4-tab">
                                            <table class="table table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Salutation</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Email Address</th>
                                                        <th>Work Phone</th>
                                                        <th>Mobile</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
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

                                        <!-- ============================================================== -->
                                        <!-- Remarks  -->
                                        <!-- ============================================================== -->
                                        <div class="tab-pane fade" id="custom-tabs-four-tab5" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-tab5-tab">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Remark</label>
                                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3" placeholder="Remarks"
                                                    name="remarks" style="width: 50%;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            <a href="{{ route('customer.index') }}" type="button"
                                class="btn btn-secondary btn-sm mx-2">{{ __('Close') }}</a>
                            <button type="submit" class="btn btn-primary btn-sm">{{ __('Save Changes') }}</button>
                        </div>
                    </fieldset>

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
                '<td><input type="text" step="0.001" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="text" step="0.001" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="text" step="0.001" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="text" step="0.001" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="text" step="0.001" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
            html +=
                '<td><input type="text" step="0.001" min="0" name="tare[]" class="form-control rounded-0" required /></td>';
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
