<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chancimi Sarl - Travel</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/favicon.png">

    <!-- CSS
     ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/eduvibe-font.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/magnifypopup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/odometer.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/lightbox.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/animation.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/jqueru-ui-min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">

        <header
            class="edu-header  header-sticky {{ '/' == request()->path() ? 'header-transparent header-style-2 header-default' : 'disable-transparent' }}">
            <div class="{{ '/' == request()->path() ? '' : 'container' }}">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-xl-3 col-md-6 col-6">
                        <div class="logo">
                            <a href="index.html">
                                <img class="logo-light" src="{{ asset('frontend') }}/assets/images/logo/logo.png"
                                    alt="Site Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-xl-block">
                        <nav class="mainmenu-nav d-none d-lg-block">
                            <ul class="mainmenu">
                                <li><a href="{{ url('/') }}">Accueil</a></li>
                                <li><a href="about-us-1.html">A propos</a></li>
                                <li class="has-droupdown"><a href="#">Services</a>
                                    <ul class="submenu">
                                        {{-- <li><a href="course-style-1.html">Nos services</a></li> --}}
                                        <li><a href="course-style-2.html">Cours</a></li>
                                        <li><a href="course-style-3.html">Epreuves</a></li>
                                        <li><a href="shop.html">Boutique</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/blog') }}">Actualités</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-8 col-xl-3 col-md-6 col-6">
                        <div class="header-right d-flex justify-content-end">
                            <div class="{{ '/' == request()->path() ? 'header-menu-bar' : 'header-quote' }}">
                                <div class="quote-icon quote-search">
                                    <button class="white-box-icon search-trigger header-search"><i
                                            class="ri-search-line"></i></button>
                                </div>
                                <div class="quote-icon quote-user d-none d-md-block ml--15 ml_sm--5">
                                    @guest
                                        <a class="edu-btn btn-medium left-icon header-button" href="{{ url('/login') }}">
                                            <i class="ri-user-line"></i>Connexion</a>
                                    @else
                                        <a class="edu-btn btn-medium left-icon header-button" href="{{ url('/user/dashboard') }}">
                                            <i class="ri-user-line"></i>Mon Compte</a>
                                    @endguest

                                </div>
                                <div class="quote-icon quote-user d-block d-md-none ml--15 ml_sm--5">
                                    <a class="white-box-icon" href="login-register.html"><i
                                            class="ri-user-line"></i></a>
                                </div>
                            </div>

                            <div class="mobile-menu-bar ml--15 ml_sm--5 d-block d-xl-none">
                                <div class="hamberger">
                                    <button class="white-box-icon hamberger-button header-menu">
                                        <i class="ri-menu-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('frontend') }}/assets/images/logo/logo.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li class="has-droupdown"><a href="#">Home</a>
                        <ul class="submenu">
                            <li><a href="index-one.html">Home 1</a></li>
                            <li><a href="index-two.html">Home 2</a></li>
                            <li><a href="index-three.html">Home 3</a></li>
                            <li><a href="index-four.html">Home 4</a></li>
                            <li><a href="index-five.html">Home 5</a></li>
                            <li><a href="index.html">Landing Demo</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown"><a href="#">About</a>
                        <ul class="submenu">
                            <li><a href="about-us-1.html">About Us 1</a></li>
                            <li><a href="about-us-2.html">About Us 2</a></li>
                            <li><a href="about-us-3.html">About Us 3</a></li>
                        </ul>
                    </li>

                    <li class="has-droupdown"><a href="#">Courses</a>
                        <ul class="submenu">
                            <li><a href="course-style-1.html">Course Style 1</a></li>
                            <li><a href="course-style-2.html">Course Style 2</a></li>
                            <li><a href="course-style-3.html">Course Style 3</a></li>
                            <li><a href="course-style-4.html">Course Style 4</a></li>
                            <li><a href="course-style-5.html">Course Style 5</a></li>
                            <li><a href="course-filter.html">Course Filter</a></li>
                            <li><a href="course-carousel.html">Course Carousel</a></li>
                            <li><a href="course-sidebar.html">Course With Sidebar</a></li>
                            <li><a href="course-details.html">Course Details 1</a></li>
                            <li><a href="course-details-2.html">Course Details 2</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown"><a href="#">Pages</a>
                        <ul class="submenu">
                            <li class="has-droupdown"><a href="#">Event</a>
                                <ul class="submenu">
                                    <li><a href="event-grid.html">Event Grid</a></li>
                                    <li><a href="event-list.html">Event List</a></li>
                                    <li><a href="event-carousel.html">Event Carousel</a></li>
                                    <li><a href="event-details.html">Event Details</a></li>
                                </ul>
                            </li>

                            <li class="has-droupdown"><a href="#">Gallery</a>
                                <ul class="submenu">
                                    <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                    <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                </ul>
                            </li>

                            <li class="has-droupdown"><a href="#">Instructor</a>
                                <ul class="submenu">
                                    <li><a href="instructor-one.html">Instructor 1</a></li>
                                    <li><a href="instructor-two.html">Instructor 2</a></li>
                                    <li><a href="instructor-three.html">Instructor 3</a></li>
                                    <li><a href="instructor-profile.html">Instructor Profile</a></li>
                                </ul>
                            </li>

                            <li class="has-droupdown"><a href="#">Contact</a>
                                <ul class="submenu">
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="contact-me.html">Contact Me</a></li>
                                </ul>
                            </li>

                            <li><a href="faq.html">FAQ Page</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="purchase-guide.html">Purchase Guide</a></li>
                            <li><a href="testimonial.html">Testimonial</a></li>
                            <li><a href="coming-soon.html">Comming Soon</a></li>
                            <li><a href="login-register.html">Login/Register</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown"><a href="#">Blog</a>
                        <ul class="submenu">
                            <li class="has-droupdown"><a href="#">Blog</a>
                                <ul class="submenu">
                                    <li><a href="blog-grid-1.html">Blog Grid 1</a></li>
                                    <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                    <li><a href="blog-grid-3.html">Blog Grid 3</a></li>
                                    <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                                    <li><a href="blog-standard.html">Blog Standard</a></li>
                                    <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown"><a href="#">Blog Details</a>
                                <ul class="submenu">
                                    <li><a href="blog-details-left-sidebar.html">Blog Details 1</a></li>
                                    <li><a href="blog-details-right-sidebar.html">Blog Details 2</a></li>
                                    <li><a href="blog-details.html">Blog Details 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown"><a href="#">Shop</a>
                        <ul class="submenu">
                            <li><a href="shop.html">Shop Page</a></li>
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="cart.html">Cart Page</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Start Search Popup  -->
        <div class="edu-search-popup">
            <div class="close-button">
                <button class="close-trigger"><i class="ri-close-line"></i></button>
            </div>
            <div class="inner">
                <form class="search-form" action="#">
                    <input type="text" class="eduvibe-search-popup-field" placeholder="Search Here...">
                    <button class="submit-button"><i class="icon-search-line"></i></button>
                </form>
            </div>
        </div>
        <!-- End Search Popup  -->



        @yield('content')

        <!-- Start Footer Area  -->
        <footer class="eduvibe-footer-one edu-footer footer-style-default">
            <div class="footer-top">
                <div class="container eduvibe-animated-shape">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="edu-footer-widget">
                                <div class="logo">
                                    <a href="index.html">
                                        <img class="logo-light"
                                            src="{{ asset('frontend') }}/assets/images/logo/logo-white.png"
                                            alt="Site Logo">
                                    </a>
                                </div>
                                <p class="description">It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout. The point of using
                                    Lorem Ipsum.</p>
                                <ul class="social-share">
                                    <li><a href="#"><i class="icon-Fb"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-Pinterest"></i></a></li>
                                    <li><a href="#"><i class="icon-Twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="edu-footer-widget explore-widget">
                                <h5 class="widget-title">Explore</h5>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="about-us-1.html"><i class="icon-Double-arrow"></i>About Us</a>
                                        </li>
                                        <li><a href="event-list.html"><i class="icon-Double-arrow"></i>Upcoming
                                                Events</a></li>
                                        <li><a href="blog-standard.html"><i class="icon-Double-arrow"></i>Blog &
                                                News</a></li>
                                        <li><a href="faq.html"><i class="icon-Double-arrow"></i>FAQ Question</a>
                                        </li>
                                        <li><a href="testimonial.html"><i
                                                    class="icon-Double-arrow"></i>Testimonial</a></li>
                                        <li><a href="privacy-policy.html"><i class="icon-Double-arrow"></i>Privacy
                                                Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="edu-footer-widget quick-link-widget">
                                <h5 class="widget-title">Useful Links</h5>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="contact-us.html"><i class="icon-Double-arrow"></i>Contact
                                                Us</a></li>
                                        <li><a href="pricing.html"><i class="icon-Double-arrow"></i>Pricing Plan</a>
                                        </li>
                                        <li><a href="instructor-profile.html"><i
                                                    class="icon-Double-arrow"></i>Instructor Profile</a></li>
                                        <li><a href="faq.html"><i class="icon-Double-arrow"></i>FAQ</a></li>
                                        <li><a href="course-style-3.html"><i class="icon-Double-arrow"></i>Popular
                                                Courses</a></li>
                                        <li><a href="purchase-guide.html"><i class="icon-Double-arrow"></i>Terms &
                                                Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="edu-footer-widget">
                                <h5 class="widget-title">Contact Info</h5>
                                <div class="inner">
                                    <div class="widget-information">
                                        <ul class="information-list">
                                            <li><i class="icon-map-pin-line"></i>275 Quadra Street Victoria Road, New
                                                York
                                            </li>
                                            <li><i class="icon-phone-fill"></i><a href="tel:+1(237)382-2839">+ 1
                                                    (237) 382-2839</a></li>
                                            <li><i class="icon-phone-fill"></i><a href="tel:+1(237)382-2840">+ 1
                                                    (237) 382-2840</a></li>
                                            <li><i class="icon-mail-line-2"></i><a target="_blank"
                                                    href="mailto:yourmailaddress@example.com">yourmailaddress@example.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shape-dot-wrapper shape-wrapper d-md-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="{{ asset('frontend') }}/assets/images/shapes/shape-21-01.png"
                                alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-2">
                            <img src="{{ asset('frontend') }}/assets/images/shapes/shape-35.png" alt="Shape Thumb" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area copyright-default">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner text-center">
                                <p>Copyright 2023 <a href="#">EduVibe</a> Designed By <a
                                        href="https://themeforest.net/user/devsvibe">DevsVibe</a>. All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area  -->
    </div>
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/sal.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/backtotop.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/magnifypopup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/slick.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/countdown.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-appear.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/odometer.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/isotop.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/imageloaded.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/lightbox.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/wow.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/paralax.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/paralax-scroll.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-ui.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/tilt.jquery.min.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

    {{-- Reload page after 5 secs --}}
    {{-- <script>
        setTimeout(function() {
            window.location.reload();
        }, 5000);
    </script> --}}
    {{-- End reload page --}}
</body>



</html>
