<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="javascript:void(0):">
                <span class="logo-name">
                    <img src="{{ asset('images/frontend/logo-dark.png') }}" alt="logo" style="width: 50%; margin: 5%;">
                </span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="fas fa-desktop"></i><span>Dashboard</span>
                </a>
            </li>

            @can('admin')
                <li class="menu-header">Team</li>
                <li class="dropdown {{ Route::is('admin.team.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.team.index', ['support']) }}" class="nav-link">
                        <i class="fas fa-users"></i><span>Support Team</span>
                    </a>
                </li>

                <li class="menu-header">Registrations</li>
                <li class="dropdown {{ Route::is('admin.registration.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.registration.index') }}" class="nav-link">
                        <i class="fas fa-th"></i><span>Registrations</span>
                    </a>
                </li>

                <li class="menu-header">Others</li>
                <li class="dropdown {{ Route::is('admin.product.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.product.index') }}" class="nav-link">
                        <i class="fas fa-money-bill"></i><span>Product</span>
                    </a>
                </li>

                <li class="dropdown {{ Route::is('admin.city.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.city.index') }}" class="nav-link">
                        <i class="fas fa-building"></i><span>City</span>
                    </a>
                </li>

                <li class="dropdown {{ Route::is('admin.employment.status.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.employment.status.index') }}" class="nav-link">
                        <i class="fas fa-user-tie"></i><span>Employment Status</span>
                    </a>
                </li>

                <li class="dropdown {{ Route::is('admin.gender.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.gender.index') }}" class="nav-link">
                        <i class="fas fa-mars"></i><span>Gender</span>
                    </a>
                </li>

                <li class="dropdown {{ Route::is('admin.marital.status.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.marital.status.index') }}" class="nav-link">
                        <i class="fas fa-mars-double"></i><span>Marital Status</span>
                    </a>
                </li>

                <li class="dropdown {{ Route::is('admin.residential.type.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.residential.type.index') }}" class="nav-link">
                        <i class="fas fa-home"></i><span>Residential Type</span>
                    </a>
                </li>
            @endcan

            @can('support')
                <li class="dropdown {{ Route::is('admin.status.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.status.index') }}" class="nav-link">
                        <i class="fas fa-tasks"></i><span>Status</span>
                    </a>
                </li>

                <li class="menu-header">Registrations</li>
                <li class="dropdown {{ Str::startsWith(request()->route()->uri(), 'admin/registration') ? 'active' : '' }}">
                    <a href="#" class="menu-toggle nav-link has-dropdown">
                        <i class="fas fa-th"></i><span>Registrations</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ Route::is('admin.registration.index') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.registration.index') }}">
                                <span>All</span>
                            </a>
                        </li>
                        @foreach ($usersStatus ?? [] as $usersStatusValue)
                            <li class="">
                                <a class="nav-link" style="height: 38px;" href="{{ route('admin.registration.status', ['status' => Crypt::encrypt($usersStatusValue->id)]) }}">
                                    <span style="line-height: 13px;">{{ $usersStatusValue->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endcan

            <br><br><br><br>
        </ul>
    </aside>
</div>
