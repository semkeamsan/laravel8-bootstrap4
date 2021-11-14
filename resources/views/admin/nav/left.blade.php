<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  d-flex  align-items-center">
            <a class="navbar-brand" href="#" target="_blank">
                <img src="{{ asset('images/logo.png') }}" class="navbar-brand-img">
            </a>
            <div class=" ml-auto ">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ strpos(Route::currentRouteName(), 'admin.index') === 0 || strpos(Route::currentRouteName(), 'admin.dashboard') === 0 ? 'active' : null }}"
                            href="{{ route('admin.dashboard') }}">
                            <i
                                class="fal fa-tv {{ strpos(Route::currentRouteName(), 'admin.index') === 0 || strpos(Route::currentRouteName(), 'admin.dashboard') === 0 ? 'text-primary' : null }}"></i>
                            <span class="nav-link-text">{{ __('Dashboard') }}</span>
                        </a>
                    </li>
                </ul>
                <hr class="my-3">
                @foreach (auth()->user()->role->permissions as $permission)
                    @if (Route::has('admin.' . $permission->slug . '.index') && $permission->routes->contains('index') && $permission->navbar)
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ config('page.slug') == $permission->slug ? 'active' : null }}"
                                    href="{{ route('admin.' . $permission->slug . '.index') }}">
                                    <i
                                        class="{{ $permission->icon }} {{ config('page.slug') == $permission->slug ? 'text-primary' : null }}"></i>
                                    <span class="nav-link-text">{{ $permission->{app()->getLocale()} }}</span>
                                </a>
                            </li>
                        </ul>
                        @if ($permission->underline)
                            <hr class="my-3">
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</nav>
