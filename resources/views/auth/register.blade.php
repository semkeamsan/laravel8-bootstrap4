@extends('layouts.app')
@section('content')
    <!--register -->
    <section class="py-7 register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="py-3 {{ request()->is('register') ? 'col-xl-8 ' : 'col-xl-12' }}">
                    <div class="card">
                        <div class="card-body">
                            @if (request()->is('register'))
                                <div class="section-title">
                                    <h2 class="text-center">{{ __('Register') }}</h2>
                                </div>
                            @endif

                            <div class="form-row">
                                <div class="col-xl-6">
                                    <form class="form-row mt-4 mb-5 align-items-center has-validated" method="POST"
                                        novalidate action="{{ route('register') }}">
                                        @csrf
                                        <div class="mb-3 col-sm-12">
                                            <label>{{ __('Name') }}:</label>
                                            <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                                name="name" placeholder="" value="{{ old('name') }}" required
                                                autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <label>{{ __('Email Address') }}:</label>
                                            <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                                name="email" placeholder="" value="{{ old('email') }}" required
                                                autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <label>{{ __('Password') }}:</label>
                                            <div class="input-group">
                                                <input type="password" id="password"
                                                    class="form-control  @error('password') is-invalid @enderror"
                                                    value="{{ old('password') }}"
                                                    name="password" autocomplete="new-password">

                                                <div class="input-group-append" data-toggle="sh-password"
                                                    data-target="#password">
                                                    <span class="input-group-text">
                                                        <i class="fal fa-eye" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <label>{{ __('Confirm Password') }}:</label>
                                            <div class="input-group">
                                                <input type="password" id="password_confirmation"
                                                    class="form-control  @error('password_confirmation') is-invalid @enderror"
                                                    value="{{ old('password_confirmation') }}"
                                                    name="password_confirmation" autocomplete="new-password">

                                                <div class="input-group-append" data-toggle="sh-password"
                                                    data-target="#password_confirmation">
                                                    <span class="input-group-text">
                                                        <i class="fal fa-eye" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit"
                                                class="btn btn-primary btn-block">{{ __('Register') }}</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="{{ asset('images/logo.png') }}" class="w-100">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--register -->

@endsection
