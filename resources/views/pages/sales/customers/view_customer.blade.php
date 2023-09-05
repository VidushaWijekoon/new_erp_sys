@section('title', 'View Customer')
@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: #222e3c">
                        <span class="card-title mb-0 d-flex justify-content-between">
                            <h4 style="color: #e9ecef" class="text-capitalize">{{ __('Customer View Asd Asd, Anguilla') }}
                            </h4>
                        </span>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-warning">
                                @foreach ($errors->all() as $error)
                                    <div class="">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif

                        <div class="">
                            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                <li class="nav-item">
                                    <div class="nav-link tabLable active" id="custom-content-below-overview-tab"
                                        data-toggle="pill" href="#custom-content-below-overview" role="tab"
                                        aria-controls="custom-content-below-overview" aria-selected="true">Overview</div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link tabLable" id="custom-content-below-order-tab" data-toggle="pill"
                                        href="#custom-content-below-order" role="tab"
                                        aria-controls="custom-content-below-order" aria-selected="false">Orders</div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link tabLable" id="custom-content-below-common-models-tab"
                                        data-toggle="pill" href="#custom-content-below-common-models" role="tab"
                                        aria-controls="custom-content-below-common-models" aria-selected="false">Common
                                        Modals</div>
                                </li>
                            </ul>
                            <div class="tab-content" id="custom-content-below-tabContent">
                                <!-- overview -->
                                <div class="tab-pane fade active show" id="custom-content-below-overview" role="tabpanel"
                                    aria-labelledby="custom-content-below-overview-tab">
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-12 pl-3 border" style="background-color: #ffffff;">

                                            <div class="row">
                                                <div class="col-sm-7 mt-2 mb-3">
                                                    <div class="">
                                                        <p style="font-weight: bold" class="text-capitalize">Vidusha
                                                            Wijekoon (Sri Lanka)</p>
                                                        <p><i class="fa-solid fa-mobile mx-2"></i>+1264 123456</p>
                                                        <a href="">Edit |</a>
                                                        <a href="" onclick="deleteThisUser()">Delete</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3 mx-1">
                                                <div class="w-100 d-flex align-items-center border" onclick="myFunction()"
                                                    style="justify-content: space-between; cursor: pointer;">
                                                    <p class="tabViewLable">Address</p>
                                                    <i class="right fas fa-angle-left"></i>
                                                </div>
                                                <div id="myDIV">
                                                    This is my DIV element.
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Right Side Section -->
                                        <div class="col-lg-7 col-sm-12 px-2 mt-3">

                                            <div class="row mb-2">
                                                <div class="col-lg-4">
                                                    <div class="lable2">
                                                        Payment Due Period
                                                    </div>

                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="lable3">
                                                        Due on Receipt
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-4">
                                                    <div class="lable2">
                                                        Credit Limit
                                                    </div>

                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="lable3">
                                                        No Limit
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2 mt-3">
                                                <div class="col-lg-12">
                                                    <div class="lable4">
                                                        Receivables
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-2">
                                                    <div class="tableSec mr-4">
                                                        <table class="table mx-3 table-hover text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th>Currency</th>
                                                                    <th>Outstanding Receivables</th>
                                                                    <th>Unused Credit</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>AED</td>
                                                                    <td>50</td>
                                                                    <td>27</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Orders -->
                                <div class="tab-pane fade" id="custom-content-below-order" role="tabpanel"
                                    aria-labelledby="custom-content-below-order-tab">
                                    <div class="row">
                                        <div class="col mx-auto justify-content-center">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Sales Order</th>
                                                            <th scope="col">Reference</th>
                                                            <th scope="col">Customer Name</th>
                                                            <th scope="col">Order Status</th>
                                                            <th scope="col">Shipping Date</th>
                                                            <th scope="col">Packed</th>
                                                            <th scope="col">Invoiced</th>
                                                            <th scope="col">Payment</th>
                                                            <th scope="col">Shipped</th>
                                                            <th scope="col">Shipping Method</th>
                                                            <th scope="col">Remaining Time</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Common Models -->
                                <div class="tab-pane fade" id="custom-content-below-common-models" role="tabpanel"
                                    aria-labelledby="custom-content-below-common-models-tab">
                                    <div class="row">
                                        <div class="col-sm-9 mx-auto justify-content-center">
                                            <div class="table-responsive">
                                                <table class="table table-hover mt-3 ">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Device</th>
                                                            <th scope="col">Brand</th>
                                                            <th scope="col">Model</th>
                                                            <th scope="col">Processor</th>
                                                            <th scope="col">Core</th>
                                                            <th scope="col">Generation</th>
                                                            <th scope="col">Speed</th>
                                                            <th scope="col">QTY</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Laptop</td>
                                                            <td>Dell</td>
                                                            <td>Latitude E7470</td>
                                                            <td>Intel</td>
                                                            <td>i5-6300u</td>
                                                            <td>6</td>
                                                            <td>2.30Ghz</td>
                                                            <td><span class="badge badge-success px-2 py-1">35</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Laptop</td>
                                                            <td>Dell</td>
                                                            <td>Precision M5530</td>
                                                            <td>Intel</td>
                                                            <td>i9-8950HQ</td>
                                                            <td>8</td>
                                                            <td>2.60Ghz</td>
                                                            <td><span class="badge badge-success px-2 py-1">25</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Laptop</td>
                                                            <td>HP</td>
                                                            <td>Elitebook 1030 G3</td>
                                                            <td>Intel</td>
                                                            <td>i5-7600u</td>
                                                            <td>7</td>
                                                            <td>1.90Ghz</td>
                                                            <td><span class="badge badge-success px-2 py-1">5</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
@endpush
