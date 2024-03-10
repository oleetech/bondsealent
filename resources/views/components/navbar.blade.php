<div class="header__area homepage_header__area header__sticky">
    <div class="container custom__container">
        <div class="header__area-menubar">
            <div class="header__area-menubar-left">
                <div class="header__area-menubar-left-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/Logo.gif') }}" alt="BOND SEALANT LOGO"></a>
                </div>
            </div>
            <div class="header__area-menubar-center ml-auto">
                <div class="header__area-menubar-center-menu menu-responsive">
                    <ul id="mobilemenu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('products') }}">Products</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('weather') }}">Weather Silicone Sealant</a></li>
                                <li><a href="{{ route('structural') }}">Structural Silicone Sealant</a></li>
                                <li><a href="{{ route('neutral') }}">Neutral Silicone Sealant</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('whereToApply') }}">Where to Apply</a></li>
                        <li><a href="{{ route('locations') }}">Locations</a></li>
                        <li><a href="{{ route('certifications') }}">Certifications</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="header__area-menubar-right">
                <div class="header__area-menubar-right-box">
                    <div class="header__area-menubar-right-sidebar">
                        <div class="header__area-menubar-right-sidebar-popup-icon"><span></span><span></span><span></span></div>
                    </div>
                    <!-- sidebar Menu Start -->
                    <div class="header__area-menubar-right-sidebar-popup">
                        <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                        <div class="header__area-menubar-right-sidebar-popup-logo">
                            <a href="{{ route('home') }}"> <img src="{{ asset('assets/images/Logo.gif') }}" alt="BOND SEALANT LOGO"> </a>
                        </div>
                        <p>Our goal is to provide re-engineered quality sealants which would keep our BOND stronger then ever!</p>
                        <div class="header__area-menubar-right-box-sidebar-popup-image">
                            <img src="{{ asset('assets/images/bar.jpg') }}" alt="">
                        </div>
                        <div class="header__area-menubar-right-box-sidebar-popup-contact">
                            <h4 class="mb-30">Contact Info</h4>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Call Now</span>
                                    <h6><a href="tel:+301 377 3777">+301 377 3777</a></h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Quick Email</span>
                                    <h6><a href="mailto:bondsealent@gmail.com">bondsealent@gmail.com</a></h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Office Address</span>
                                    <h6><a href="#">PO box 1661, Greenbelt, MD 20770, USA</a></h6>
                                </div>
                            </div>
                        </div>
                        {{--  <div class="header__area-menubar-right-box-sidebar-popup-social">
                            <ul>
                                <li><a href="#" target="__blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="__blank"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#" target="__blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="__blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>  --}}
                    </div>
                    <div class="sidebar-overlay"></div>
                    <!-- sidebar Menu Start -->
                </div>
                <div class="responsive-menu"></div>
            </div>
        </div>
    </div>
</div>
