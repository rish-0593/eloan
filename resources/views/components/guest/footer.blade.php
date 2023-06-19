<footer id="site-footer" class="site-footer bg-second">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget-inner">
                        <div id="custom_html-4" class="widget_text widget widget_custom_html">
                            <h4 class="widget-title">About Us</h4>
                            <div class="textwidget custom-html-widget">
                                <p>Welcome to Money Housing, your trusted partner in achieving your dream of
                                    owning a home in the bustling region of Delhi NCR.</p>
                                <p>We understand that finding the perfect home loan solution can be a daunting
                                    task, but fret not! We are here to guide you every step of the way.</p>
                            </div>
                        </div>
                        <div id="custom_html-5" class="widget_text widget widget_custom_html">
                            <h4 class="widget-title">Follow us</h4>
                            <div class="textwidget custom-html-widget">
                                <ul class="foo_socail_sets">
                                    @foreach ($socials ?? [] as $social)
                                        <li><a href="{{ $social->link }}" target="_blank"><i class="{{ $social->icon }}" aria-hidden="true"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget-inner">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h4 class="widget-title">Our Service</h4>
                            <div class="menu-service-menu-container">
                                <ul id="menu-service-menu" class="menu">
                                    <li id="menu-item-2307"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2307">
                                        Home Loan
                                    </li>
                                    <li id="menu-item-2306"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2306">
                                        Loan Against Property
                                    </li>
                                    <li id="menu-item-2387"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2387">
                                        Business Loan
                                    </li>
                                    <li id="menu-item-2430"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2430">
                                        Personal Loan
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget-inner">
                        <div id="nav_menu-3" class="widget widget_nav_menu">
                            <h4 class="widget-title">Quick Links</h4>
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="menu">
                                    <li id="menu-item-2309"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1530 current_page_item menu-item-2309">
                                        <a href="{{ route('index') }}" aria-current="page">Home</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget-inner">
                        <div id="custom_html-6" class="widget_text widget widget_custom_html">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="textwidget custom-html-widget">
                                <div class="foo_sets">
                                    <span class="fooicons">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </span>
                                    <span>
                                        <h4>Address:</h4>
                                        <p>Office No. 1112A, 11th Floor, Kirti Shikhar Building, District
                                            Center, Janakpuri, Delhi 110058</p>
                                    </span>
                                </div>

                                <div class="foo_sets">
                                    <span class="fooicons">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </span>
                                    <span>
                                        <h4>Mobile:</h4>
                                        <p>+919891845151</p>
                                    </span>
                                </div>

                                <div class="foo_sets">
                                    <span class="fooicons">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                    <span>
                                        <h4>Email:</h4>
                                        <p>info@moneyhousing.in</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="custom_html-8" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <a class="waicon"
                                    href="https://wa.me/919891845151?text=I'm%20have%20a%20query.%20Please%20reply%20me">
                                    <img style="width:45px"
                                        src="{{ asset('guest/img/whatsapp.png') }}"
                                        alt="whatsapp" title />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-copyright">
                        All copyright Reserved By Money Housing | Site Design by <a target="new" href="https://www.nexteraindia.com/">Nextera Business Solutions</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-nav text-right mobile-center">
                        <ul id="footer-menu" class="none-style">
                            <li id="menu-item-2313"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1530 current_page_item menu-item-2313">
                                <a href="{{ route('index') }}" aria-current="page">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a id="back-to-top" href="javascript:void(0);" class="show"></a>
</footer>
