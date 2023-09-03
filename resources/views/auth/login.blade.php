@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 60vh">
            <div class="col-md-6">
                <div class="card" style="border-radius: 0">

                    <div class="card-body">
                        <div class="card-title d-flex justify-content-center">
                            <img src="{{ asset('images/company/logortbig.png') }}" alt="Company Logo" width="150">
                        </div>
                        <hr>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="username" class="form-label">{{ __('Username') }} </label>
                                <div class="">
                                    <input id="username" type="username"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus
                                        style="border-radius: 0">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="form-label">{{ __('Password') }} </label>
                                <div class="">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" style="border-radius: 0">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0 mt-4 justify-content-between">

                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-sm btn-outline-info px-4"
                                        style="border-radius: 0">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                                <div class="col-md-4 mt-1">
                                    <div class="form-check" style="padding-left: 4.5em;">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
