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
            <li class="dropdown">
                <a href="#" class="nav-link">
                    <i data-feather="monitor"></i><span>Dashboard</span>
                </a>
            </li>

            @can('admin')
                <li class="menu-header">Team</li>
                <li class="dropdown">
                    <a href="{{ route('admin.team.index', ['support']) }}" class="nav-link">
                        <i data-feather="monitor"></i><span>Support Team</span>
                    </a>
                </li>

                <li class="menu-header">Registrations</li>
                <li class="dropdown">
                    <a href="{{ route('admin.registration.index') }}" class="nav-link">
                        <i data-feather="monitor"></i><span>Registrations</span>
                    </a>
                </li>

                <li class="menu-header">Others</li>
                <li class="dropdown">
                    <a href="{{ route('admin.product.index') }}" class="nav-link">
                        <i data-feather="monitor"></i><span>Product</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="{{ route('admin.city.index') }}" class="nav-link">
                        <i data-feather="monitor"></i><span>City</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="{{ route('admin.employment.status.index') }}" class="nav-link">
                        <i data-feather="monitor"></i><span>Employment Status</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="{{ route('admin.gender.index') }}" class="nav-link">
                        <i data-feather="monitor"></i><span>Gender</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="{{ route('admin.marital.status.index') }}" class="nav-link">
                        <i data-feather="monitor"></i><span>Marital Status</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="{{ route('admin.residential.type.index') }}" class="nav-link">
                        <i data-feather="monitor"></i><span>Residential Type</span>
                    </a>
                </li>
            @endcan

            @can('support')
                <li class="dropdown">
                    <a href="{{ route('admin.status.index') }}" class="nav-link">
                        <i data-feather="monitor"></i><span>Status</span>
                    </a>
                </li>

                <li class="menu-header">Registrations</li>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown">
                        <i data-feather="shopping-bag"></i><span>Registrations</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="{{ route('admin.registration.index') }}"><i data-feather="file">
                                </i><span>All</span>
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


            <br><br><br><br><br>
        </ul>
    </aside>
</div>
