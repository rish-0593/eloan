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

            <li class="dropdown">
                <a href="{{ route('admin.registration.index') }}" class="nav-link">
                    <i data-feather="monitor"></i><span>Registrations</span>
                </a>
            </li>

            <br><br><br><br><br>
        </ul>
    </aside>
</div>
