@extends('layouts.dashboard.app')
@section('content')
@if (session('message'))
<div class="alert alert-success bg-info p-2 mb-3 text-white" id="alert">{{ session('message') }}</div>
@endif
@endsection