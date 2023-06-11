<header class="main-header">
    <div class="topbar">
        <div class="container">
            <div class="topbar__left">
                <div class="topbar__social">
                    <a href="javascript:void(0);" class="fab fa-facebook-square"></a>
                    <a href="javascript:void(0);" class="fab fa-instagram"></a>
                    <a href="javascript:void(0);" class="fab fa-twitter"></a>
                    <a href="javascript:void(0);" class="fab fa-linkedin"></a>
                    <a href="javascript:void(0);" class="fab fa-youtube"></a>
                </div>
            </div>
            <div class="topbar__right">
                <a href="javascript:void(0);">
                    Opening Hours : Monday to Saturday - 8am to 9pm
                </a>
            </div>
        </div>
    </div>

    <nav class="main-menu">
        <div class="container">
            <div class="logo-box">
                <a href="{{ route('index') }}" aria-label="logo image">
                    <img src="{{ asset('images/frontend/logo-dark.png') }}" width="155" alt>
                </a>
                <span class="fa fa-bars mobile-nav__toggler"></span>
            </div>
            <ul class="main-menu__list">
                <li class="dropdown">
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li></li>
            </ul>

            <div class="main-header__info">
                <div class="main-header__info-phone">
                    <i class="fa fa-phone"></i>
                    <div class="main-header__info-phone-content">
                        <span>Free call:</span>
                        <h3><a href="tel:+919891845151">+91 989 184 5151</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>
