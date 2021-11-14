@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card-wrapper">
                <div class="card">

                    <div class="card-header">
                        <h3 class="mb-0">{{ __('View') }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-5 mb-3">
                                <div class="sticky-top">
                                    <div class="timeline timeline-one-side" data-timeline-content="axis"
                                        data-timeline-axis-style="dashed">
                                        <div class="timeline-block">
                                            <span class="timeline-step badge-primary">

                                            </span>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between pt-1">
                                                    <div class="avatar avatar-xl rounded-circle">
                                                        <img src="{{ $user->avatar }}" alt="{{ $user->name }}"
                                                            class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline-block">
                                            <span class="timeline-step badge-primary">

                                            </span>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between pt-1">
                                                    <div class="text-sm font-weight-bold">
                                                        <span class="text-muted">{{ __('Id') }} : </span>
                                                        {{ $user->id }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-block">
                                            <span class="timeline-step badge-primary">

                                            </span>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between pt-1">
                                                    <div class="text-sm font-weight-bold">
                                                        <span class="text-muted">{{ __('Name') }} : </span>
                                                        {{ $user->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-block">
                                            <span class="timeline-step badge-primary">

                                            </span>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between pt-1">
                                                    <div class="text-sm font-weight-bold">
                                                        <span class="text-muted">{{ __('Gender') }} : </span>
                                                        {{ __(Str::title($user->gender)) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-block">
                                            <span class="timeline-step badge-primary">

                                            </span>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between pt-1">
                                                    <div class="text-sm font-weight-bold">
                                                        <span class="text-muted">{{ __('About me') }} : </span>
                                                        {{ $user->about }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-block">
                                            <span class="timeline-step badge-primary">
                                                <i class="fab fa-facebook-f"></i>
                                            </span>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between pt-1">
                                                    <div class="text-sm font-weight-bold">
                                                        <span class="text-muted">{{ __('Facbook') }} : </span>
                                                        {{ $user->facebook }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-block">
                                            <span class="timeline-step badge-primary">
                                                <i class="fab fa-telegram"></i>
                                            </span>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between pt-1">
                                                    <div class="text-sm font-weight-bold">
                                                        <span class="text-muted">{{ __('Telegram') }} : </span>
                                                        {{ $user->telegram }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline-block">
                                            <span class="timeline-step badge-primary">
                                                <i class="fab fa-twitter"></i>
                                            </span>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between pt-1">
                                                    <div class="text-sm font-weight-bold">
                                                        <span class="text-muted">{{ __('Twitter') }} : </span>
                                                        {{ $user->twitter }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline-block">
                                            <span class="timeline-step badge-primary">
                                                <i class="fab fa-linkedin-in"></i>
                                            </span>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between pt-1">
                                                    <div class="text-sm font-weight-bold">
                                                        <span class="text-muted">{{ __('Linkedin') }} : </span>
                                                        {{ $user->linkedin }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline-block">
                                            <span class="timeline-step badge-primary">

                                            </span>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between pt-1">
                                                    <div class="d-flex justify-content-between pt-1">
                                                        <div class="text-sm font-weight-bold">
                                                            <span class="text-muted">{{ __('Created at') }} : </span>
                                                            {{ $user->created_at ? $user->created_at->diffForHumans() : null }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline-block">
                                            <span class="timeline-step badge-primary">

                                            </span>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between pt-1">
                                                    <div class="d-flex justify-content-between pt-1">
                                                        <div class="text-sm font-weight-bold">
                                                            <span class="text-muted">{{ __('Updated at') }} : </span>
                                                            {{ $user->updated_at ? $user->updated_at->diffForHumans() : null }}
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
                    <div class="card-footer">
                        <a class="btn" href="{{ route('admin.user.index') }}">{{ __('Back') }}</a>
                        <div class="float-right">
                            <a class="btn btn-outline-primary"
                                href="{{ route('admin.user.edit', $user) }}">{{ __('Edit') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
