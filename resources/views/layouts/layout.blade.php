<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GoulBAM Enterprises - IT company">
    <meta name="keywords"
        content="goulbam, goulbam enterprises, websites, computer science, informatique cameroun, logiciels, ict, it, it company">

    <!-- ========== Page Title ========== -->
    <title>GoulBAM Enterprises</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/assets/css/animate.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/style.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav on no-full">

            <div class="container">

                <!-- Start Atribute Navigation -->
                @guest
                    <div class="attr-nav button-light" target="_blank">
                        <ul>
                            <li>
                                <a href="{{ url('login') }}">Connexion</a>
                            </li>
                            <li>
                                <a href="{{ url('register') }}" target="_blank">Inscription</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="attr-nav button-light" target="_blank">
                        <ul>
                            <li>
                                <a href="{{ url('/user/dashboard') }}" target="_blank">Mon compte</a>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Se
                                    déconnecter</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                @endguest

                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('frontend') }}/assets/img/logo.png" class="logo logo-scrolled"
                            alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="{{ '/' == request()->path() ? 'active' : '' }}">
                            <a href="{{ url('/') }}" class="smooth-menu">Accueil</a>
                        </li>
                        <li class="{{ 'about' == request()->path() ? 'active' : '' }}">
                            <a class="smooth-menu" href="/about">A propos</a>
                        </li>
                        <li class="{{ 'services' == request()->path() ? 'active' : '' }}">
                            <a class="smooth-menu" href="/services">Services</a>
                        </li>
                        <li class="{{ 'blog' == request()->path() ? 'active' : '' }}">
                            <a class="smooth-menu" href="/blog">Actualités</a>
                        </li>
                        <li class="{{ 'contact' == request()->path() ? 'active' : '' }}">
                            <a class="smooth-menu" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    @yield('content')

    <!-- Start Footer
    ============================================= -->
    <footer class="default-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item">
                            <img src="{{ asset('frontend') }}/assets/img/logo.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke
                                happy for you are out. Fertile how old address.
                            </p>
                            <p>
                                <i>Ecrivez votre e-mail et obtenez nos incroyables mises à jours, nouvelles et
                                    support</i>
                            </p>
                            <div class="newsletter">
                                <form method="post" action="{{url('/newsletter')}}">
                                    @csrf
                                    <div class="input-group stylish-input-group">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Entrer votre e-mail">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                    @if (Session::has('success'))
                                        <i>
                                            <p style="color:green">{{ session('success') }}</p>
                                        </i>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="#">Accueil</a>
                                </li>
                                <li>
                                    <a href="#">A propos</a>
                                </li>
                                <li>
                                    <a href="#">Nos formations</a>
                                </li>
                                <li>
                                    <a href="#">Offres </a>
                                </li>
                                <li>
                                    <a href="#">Actualités</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Community</h4>
                            <ul>
                                <li>
                                    <a href="#">Career</a>
                                </li>
                                <li>
                                    <a href="#">Leadership</a>
                                </li>
                                <li>
                                    <a href="#">Strategy</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">History</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Contact Info</h4>
                            <p>
                                Queenslad Victoria Building. 60 california street california USA, 20, floor
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Site Web:</h5>
                                            <span>www.goulbam.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>contact@goulbam.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Telephone:</h5>
                                            <span>+237 696 89 67 58</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                            <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">GoulBAM Enterprises</a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5 text-right social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('frontend') }}/assets/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/equal-height.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.appear.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.easing.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/modernizr.custom.13711.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.backgroundMove.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/count-to.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootsnav.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

</body>

</html>
