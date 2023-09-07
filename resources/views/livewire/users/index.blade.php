<div>
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ __('Users') }}</strong> {{ __('Dashboard') }}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12 d-flex">
                <div class="w-100">

                    <div class="row">

                        <div class="col-md-3">
                            <div class="card border-success">
                                <div class="card-header bg-transparent border-success">
                                    <div class="d-flex justify-content-between">
                                        <h4>Users</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-users fa-4x mt-1 text-danger p-3"></i>
                                        <span class="d-flex align-items-center" style="text-align: end">
                                            Organize all users and user authentications.
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer border-danger" style="border-top: 1px solid blue">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6><strong class="mx-2">{{ $userCount }}</strong>Users</h6>
                                        <a href="{{ route('users') }}">
                                            <i class="fa-solid fa-circle-plus fa-2x text-danger"></i>
                                        </a>
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
