<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title', 'GoulBAM - User')</title>

    <meta name="description" content="GoulBAM user dashboard" />
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('userend') }}/vendor/fonts/boxicons.css" />



    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('userend') }}/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('userend') }}/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('userend') }}/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('userend') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="{{ asset('userend') }}/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('userend') }}/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('userend') }}/js/config.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo ">
                    <a href="{{ url('/user/dashboard') }}" class="app-brand-link">
                        <img src="{{ asset('frontend') }}/assets/img/logo.png" width="100%" alt="logo">
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>



                <ul class="menu-inner py-1">

                    <!-- Dashboard -->
                    <li class="menu-item {{ 'user/dashboard' == request()->path() ? 'active' : '' }}">
                        <a href="{{ url('/user/dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Points</span></li>
                    <!-- Cards -->
                    <li class="menu-item {{ 'user/my_points' == request()->path() ? 'active' : '' }}">
                        <a href="{{ url('user/my_points') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="Basic">Mes Points</div>
                        </a>
                    </li>
                    <li class="menu-item {{ 'user/use_points' == request()->path() ? 'active' : '' }}">
                        <a href="{{ url('user/use_points') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Utiliser Mes Points</div>
                        </a>
                    </li>
                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Mon Cash</span></li>
                    <li class="menu-item {{ 'user/my_wallet' == request()->path() ? 'active' : '' }}">
                        <a href="{{ url('user/my_wallet') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-wallet"></i>
                            <div data-i18n="Basic">Mon Portefeuil</div>
                        </a>
                    </li>

                    <!-- Layouts -->

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Compte</span>
                    </li>
                    <li
                        class="menu-item 
                                        {{ 'user/settings/' . auth()->user()->id . '/edit' == request()->path() ? 'active open' : '' }}
                                        {{ 'user/notifications' == request()->path() ? 'active open' : '' }}
                                        {{ 'user/connexions' == request()->path() ? 'active open' : '' }}
                                        ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                            <div data-i18n="Account Settings">Mon compte</div>
                        </a>
                        <ul class="menu-sub">
                            <li
                                class="menu-item {{ 'user/settings/' . auth()->user()->id . '/edit' == request()->path() ? 'active' : '' }}">
                                <a href="{{ url('/user/settings/' . auth()->user()->id . '/edit') }}"
                                    class="menu-link">
                                    <div data-i18n="Account">Mon Profil</div>
                                </a>
                            </li>
                            <li class="menu-item {{ 'user/notifications' == request()->path() ? 'active' : '' }}">
                                <a href="{{ url('/user/notifications') }}" class="menu-link">
                                    <div data-i18n="Notifications">Notifications</div>
                                </a>
                            </li>
                            <li class="menu-item {{ 'user/connexions' == request()->path() ? 'active' : '' }}">
                                <a href="{{ url('/user/connexions') }}" class="menu-link">
                                    <div data-i18n="Connections">Connexions</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Misc -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Autres</span></li>
                    <li class="menu-item">
                        <a href="{{ url('/user/support') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div data-i18n="Support">Signaler un problème</div>
                        </a>
                    </li>
                </ul>

            </aside>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none"
                                    placeholder="Rechercher..." aria-label="Rechercher...">
                            </div>
                        </div>
                        <!-- /Search -->


                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('userend/img/avatars') . '/' . auth()->user()->photo }}"
                                            alt class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('userend/img/avatars') . '/' . auth()->user()->photo }}"
                                                            alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                                    <small class="text-muted">Utilisateur</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ url('/user/settings/' . auth()->user()->id . '/edit') }}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Mon Profil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('user/my_points') }}">
                                            <i class="bx bx-coin me-2"></i>
                                            <span class="align-middle">Points</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('logout') }}"
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Se Déconnecter</span>
                                        </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    @yield('content')
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                <a href="https://goulbam.com/" target="_blank" class="footer-link fw-bolder">GoulBAM
                                    Enterprises</a>
                            </div>
                            <div>

                                <a href="https://goulbam.com/license/" class="footer-link me-4"
                                    target="_blank">License</a>


                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('userend') }}/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('userend') }}/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('userend') }}/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('userend') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ asset('userend') }}/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('userend') }}/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('userend') }}/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('userend') }}/js/dashboards-analytics.js"></script>

    <script src="{{ asset('userend') }}/js/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="{{ asset('userend') }}/js/buttons.js"></script>

</body>



</html>
