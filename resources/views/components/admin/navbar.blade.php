<div class="navbar-bg"></div>

<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li>
                <a href="javascript:void(0);" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                    <i data-feather="align-justify"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle" @click="toggleTheme">
                <i x-show="!isDarkMode" data-feather="sun"></i>
                <i x-show="isDarkMode" data-feather="moon"></i>
            </a>
        </li>

        <li class="dropdown">
            <a href="javascript:void(0);" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <span class="d-sm-none d-lg-inline-block pt-1 pr-2">{{ Auth::user()->name }}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title"><em class="user-name">{{ Auth::user()->name }}</em></div>

                <a href="{{ route('admin.profile.index') }}" class="dropdown-item has-icon">
                    <i class="fas fa-user"></i> Profile
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt"></i> {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
