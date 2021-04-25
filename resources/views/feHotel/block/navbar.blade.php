<div class="topbar">
    <div class="container">
        <div class="welcome-mssg">
            Welcome to Hotel Himara.
        </div>
        <div class="top-right-menu">
            <ul class="top-menu">
                <li class="d-none d-md-inline">
                    <a href="tel:+18881234567">
                        <i class="fa fa-phone"></i>+1 888 123 4567
                    </a>
                </li>
                <li class="d-none d-md-inline">
                    <a href="https://preview.eagle-themes.com/cdn-cgi/l/email-protection#50333f3e2431332410383f24353c38393d3122317e333f3d">
                        <i class="fa fa-envelope-o "></i><span class="__cf_email__" data-cfemail="74171b1a00151700341c1b0011181c1d191506155a171b19">[email&#160;protected]</span></a>
                </li>
                <li class="language-menu">
                    <a href="#" class="active-language"><img src="images/icons/flags/gb.png" alt="Image">English</a>
                    <ul class="languages">
                        <li class="language">
                            <a href="#"><img src="{{asset('feHotel/images/icons/flags/it.png')}}" alt="Image">Italiano</a>
                        </li>
                        <li class="language">
                            <a href="#"><img src="{{asset('feHotel/images/icons/flags/gr.png')}}" alt="Image">Ελληνικα</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
        <div class="brand">
            <div class="logo">
                <a href="index.html">
                    <img src="{{asset('feHotel/images/logo.svg')}}" alt="Hotel Himara">
                </a>
            </div>
        </div>
        <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>

        <nav id="main-menu" class="main-menu">
            <ul class="menu">
                <li class="menu-item dropdown active">
                    <a href="#">HOME</a>
                    <ul class="submenu">
                        <li class="menu-item">
                            <a href="index.html">Home Version 1</a>
                        </li>
                        <li class="menu-item">
                            <a href="index2.html">Home Version 2</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="{{route('list-room', 'all')}}">PHÒNG</a>
                    <ul class="submenu">
                        <li class="menu-item dropdown">
                            <a href="{{route('list-room', 'single')}}">SINGLE</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="{{route('list-room', 'double')}}">DOUBLE</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="{{route('list-room', 'deluxe')}}">DELUXE</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">DỊCH VỤ</a>
                    <ul class="submenu">
                        @foreach($listservice as $service)
                        <li class="menu-item dropdown">
                            <a href="{{route('service', $service->madichvu)}}">{{$service->tendichvu}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">PAGES</a>
                    <ul class="submenu">
                        <li class="menu-item dropdown">
                            <a href="#">Gallery</a>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a href="gallery.html">Gallery 4 Columns</a>
                                </li>
                                <li class="menu-item">
                                    <a href="gallery-3columns.html">Gallery 3 Columns</a>
                                </li>
                                <li class="menu-item">
                                    <a href="gallery-2columns.html">Gallery 2 Columns</a>
                                </li>
                                <li class="menu-item">
                                    <a href="gallery-without-filters.html">Gallery Without Filters</a>
                                </li>
                                <li class="menu-item">
                                    <a href="gallery-slider.html">Gallery Slider</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">More Pages</a>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a href="places.html">Places</a>
                                </li>
                                <li class="menu-item">
                                    <a href="place-details.html">Place Details</a>
                                </li>
                                <li class="menu-item">
                                    <a href="events.html">Events</a>
                                </li>
                                <li class="menu-item">
                                    <a href="event-details.html">Event Details</a>
                                </li>
                                <li class="menu-item">
                                    <a href="offers.html">Offers</a>
                                </li>
                                <li class="menu-item">
                                    <a href="offer.html">Offer Details</a>
                                </li>
                                <li class="menu-item">
                                    <a href="staff.html">Our Staff</a>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Loading Page</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="loading.html">Loading Page 1</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="loading-style2.html">Loading Page 2</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="loading-style3.html">Loading Page 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Coming Soon</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="coming-soon.html">Coming Soon Image</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="coming-soon-video.html">Coming Soon Video</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="page.html">Right Sidebar Page</a>
                                </li>
                                <li class="menu-item">
                                    <a href="page-left-sidebar.html">Left Sidebar Page</a>
                                </li>
                                <li class="menu-item">
                                    <a href="page-full-width.html">Full Width Page</a>
                                </li>
                                <li class="menu-item">
                                    <a href="404.html">404 Style 1</a>
                                </li>
                                <li class="menu-item">
                                    <a href="404-style2.html">404 Style 2</a>
                                </li>
                                <li class="menu-item">
                                    <a href="testimonials.html">Testimonials</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Contact</a>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a href="contact.html">Contact Style 1</a>
                                </li>
                                <li class="menu-item">
                                    <a href="contact-style2.html">Contact Style 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Shop</a>
                            <ul class="submenu">
                                <li class="menu-item dropdown">
                                    <a href="#">Shop</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="shop.html">Right Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Shop Details</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="shop-details.html">Right Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-details-left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-details-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="restaurant.html">Our Restaurant</a>
                        </li>
                        <li class="menu-item">
                            <a href="spa.html">Our Spa</a>
                        </li>
                        <li class="menu-item">
                            <a href="about-us.html">About Us</a>
                        </li>
                        <li class="menu-item">
                            <a href="location.html">Our Location</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">ELEMENTS</a>
                    <ul class="submenu">
                        <li class="menu-item">
                            <a href="style-guide.html">Style Guide</a>
                        </li>
                        <li class="menu-item">
                            <a href="buttons.html">Buttons</a>
                        </li>
                        <li class="menu-item">
                            <a href="icons.html">Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="{{route('contact')}}">CONTACT US</a>
                </li>
                <li class="menu-item menu-btn">
                    <a href="booking-form.html" class="btn">
                        <i class="fa fa-calendar"></i>BOOK ONLINE
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
