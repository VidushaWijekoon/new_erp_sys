<div>
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="d-flex justify-content-between w-100 px-3">
                <h3><strong>{{ __('Inventory') }}</strong></h3>
                <h3><strong>{{ __('Materials') }}</strong></h3>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-md-12 ">

                <div class="row">

                    <div class="col-md-8">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-lg-4">
                                    <!-- small card -->
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3><i class="fas fa-zero"></i></h3>
                                            <h2>{{ __('Production') }}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-bell-slash"></i>
                                        </div>
                                        <a href="{{ route('leaves-index') }}" class="small-box-footer">
                                            {{ __('More info ') }}
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <!-- small card -->
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3><i class="fas fa-zero"></i></h3>
                                            <h2>{{ __('Row Materials') }}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-bell-slash"></i>
                                        </div>
                                        <a href="{{ route('leaves-index') }}" class="small-box-footer">
                                            {{ __('More info ') }}
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <!-- small card -->
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3><i class="fas fa-zero"></i></h3>
                                            <h2>{{ __('Stock Report') }}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-bell-slash"></i>
                                        </div>
                                        <a href="{{ route('inventory-stock-report') }}" class="small-box-footer">
                                            {{ __('More info ') }}
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>


                    <div class="col-md-4 float-end">
                        <div class="info-box mb-3 bg-warning">
                            <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Inventory</span>
                                <span class="info-box-number">5,200</span>
                            </div>
                        </div>
                        <div class="info-box mb-3 bg-success">
                            <span class="info-box-icon"><i class="far fa-heart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Mentions</span>
                                <span class="info-box-number">92,050</span>
                            </div>
                        </div>
                        <div class="info-box mb-3 bg-danger">
                            <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Downloads</span>
                                <span class="info-box-number">114,381</span>
                            </div>
                        </div>
                        <div class="info-box mb-3 bg-info">
                            <span class="info-box-icon"><i class="far fa-comment"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Direct Messages</span>
                                <span class="info-box-number">163,921</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

@push('scripts')
    <script></script>
@endpush
