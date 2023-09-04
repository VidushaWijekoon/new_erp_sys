@section('title', 'Create New Holiday')
@extends('layouts.admin.app')
@section('content')
    <div class="row justify-content-between">
        <div class="col-12 col-lg-5 col-xxl-5">
            <div class="card flex-fill">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Create New Holiday') }}</h4>
                    </span>
                </div>
                <form action="{{ route('holiday.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-warning bg-warning p-3 mb-3 rounded-3">
                                @foreach ($errors->all() as $error)
                                    <div class="">{{ $error }} </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="">{{ __('Holiday Name') }}</label>
                            <input type="text" wire:model.defer="holiday_name" class="form-control form-control-sm"
                                placeholder="Holiday Name">
                            @error('holiday_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">{{ __('Holiday Date') }}</label>
                            <input type="date" wire:model.defer="holiday_date" class="form-control form-control-sm"
                                placeholder="Holiday Date">
                            @error('holiday_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">{{ __('Special Note') }}</label>
                            <textarea type="text" wire:model.defer="holiday_special_note" class="form-control form-control-sm" rows="3"
                                placeholder="Special Note"></textarea>
                            @error('holiday_special_note')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('holiday.index') }}" class="btn btn-secondary btn-sm">{{ __('Close') }}</a>
                        <button type="submit" class="btn btn-primary btn-sm">{{ __('Save Changes') }}</button>
                    </div>
                </form>

            </div>

        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header" style="background: #222e3c">
                    <span class="card-title mb-0 d-flex justify-content-between">
                        <h4 style="color: #e9ecef">{{ __('Created Holidays') }}</h4>
                    </span>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Holiday Name</th>
                                    <th>Holiday Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($holiday as $holidays)
                                    <tr>
                                        <td>{{ $holidays->holiday_name }}</td>
                                        <td>{{ $holidays->holiday_date }}</td>
                                    </tr>
                                @empty
                                    <span class="text-danger">No Holidays Found for This Year</span>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
