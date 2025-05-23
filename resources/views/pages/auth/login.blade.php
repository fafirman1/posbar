@extends('layouts.auth')

@section('title', 'Login')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="login-brand">
            <img src="{{ asset('img/bbc.png') }}"
                alt="logo"
                width="60"
                {{-- class="shadow-light rounded-circle" --}}
                >
        </div>
        <div class="card-header">
            <h4 style="color: black">Login</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{route('login')}}" class="needs-validation" novalidate="">
                @csrf

                {{-- email --}}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email"
                        type="email"
                        class="form-control
                        @error('email')
                        is-invalid
                        @enderror"
                        name="email"
                        tabindex="1"
                        autofocus>
                    @error ('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="form-group">
                    <div class="d-block">
                        <label for="password"
                            class="control-label">Password
                        </label>
                    </div>
                    <input id="password"
                        type="password"
                        class="form-control
                        @error('password')
                        is-invalid
                        @enderror"
                        name="password"
                        tabindex="2">
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                {{-- Button --}}
                <div class="form-group">
                    <button type="submit"
                        class="btn btn-primary btn-lg btn-block" style="border-radius: 30px"
                        tabindex="4">
                        Login
                    </button>
                </div>
            </form>

        </div>
    </div>

@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
