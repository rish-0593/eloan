<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="javascript:void(0):">
                <span class="logo-name">{{ config('app_name') }}</span>
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
                    <a href="{{ route('admin.registration.index') }}" class="nav-link">
                        <i data-feather="monitor"></i><span>Registrations</span>
                    </a>
                </li>
            @endcan


            <br><br><br><br><br>
        </ul>
    </aside>
</div>
