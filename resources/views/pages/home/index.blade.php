@extends('layouts.admin.app')
@section('content')
    @if (session('message'))
        <div class="alert alert-success p-2 text-capitalize" style="color: black">{{ session('message') }}</div>
    @endif
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Dashboard</strong> </h3>
            </div>
        </div>
    </div>
@endsection
