<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title','Administration')</title>
    <!-- Fav  Icon Link -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend') }}/images/fav.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bootstrap.min.css">
    <!-- themify icons CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/themify-icons.css">
    <!-- Animations CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/animate.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/styles.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/red.css" id="style_theme">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/responsive.css">
    <!-- morris charts -->
    <link rel="stylesheet" href="{{ asset('backend') }}/charts/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/jquery-jvectormap.css">

    <script src="{{ asset('backend') }}/{{ asset('backend') }}/js/modernizr.min.js"></script>
    {{-- @if (!Session::has('adminData'))
        <script type="text/javascript">
        window.location.href="{{url('admin/login')}}";
        </script>
    @endif --}}
</head>

<body>
    <!-- Pre Loader -->
    <div class="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--/Pre Loader -->
    <!-- Color Changer -->
    <div class="theme-settings" id="switcher">
        <span class="theme-click">
            <span class="ti-settings"></span>
        </span>
        <span class="theme-color theme-default" data-color="green"></span>
        <span class="theme-color theme-blue" data-color="blue"></span>
        <span class="theme-color theme-red theme-active" data-color="red"></span>
        <span class="theme-color theme-violet" data-color="violet"></span>
        <span class="theme-color theme-yellow" data-color="yellow"></span>
    </div>
    <!-- /Color Changer -->
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="proclinic-bg">
            <div class="sidebar-header">
                <a href="index-2.html"><img src="{{ asset('backend') }}/images/logo.png" class="logo"
                        alt="logo"></a>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#nav-dashboard">
                        <span class="ti-home"></span> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
                        <span class="ti-wheelchair"></span> Categories
                    </a>
                    <ul class="collapse list-unstyled" id="nav-patients">
                        <li>
                            <a href="{{url('admin/category')}}">View Categories</a>
                        </li>
                        <li>
                            <a href="{{url('admin/category/create')}}">Add Categoriy</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
                        <span class="ti-user"></span> Posts
                    </a>
                    <ul class="collapse list-unstyled" id="nav-doctors">
                        <li>
                            <a href="{{url('admin/post/create')}}">Add Post</a>
                        </li>
                        <li>
                            <a href="{{url('admin/post')}}">All Posts</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
                        <span class="ti-pencil-alt"></span> Appointments
                    </a>
                    <ul class="collapse list-unstyled" id="nav-appointment">
                        <li>
                            <a href="add-appointment.html">Add Appointment</a>
                        </li>
                        <li>
                            <a href="appointments.html">All Appointments</a>
                        </li>
                        <li>
                            <a href="about-appointment.html">Appointment Details</a>
                        </li>
                        <li>
                            <a href="edit-appointment.html">Edit Appointment</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#nav-payment" data-toggle="collapse" aria-expanded="false">
                        <span class="ti-money"></span> Payments
                    </a>
                    <ul class="collapse list-unstyled" id="nav-payment">
                        <li>
                            <a href="add-payment.html">Add Payment</a>
                        </li>
                        <li>
                            <a href="payments.html">All Payments</a>
                        </li>
                        <li>
                            <a href="about-payment.html">Payment Invoice</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/setting')}}">
                        <span class="ti-key"></span> Settings
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /Sidebar -->
        <!-- Page Content -->
        <div id="content">
            <!-- Top Navigation -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="responsive-logo">
                        <a href="index-2.html"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
                    </div>
                    <ul class="nav">
                        <li class="nav-item">
                            <span class="ti-menu" id="sidebarCollapse"></span>
                        </li>
                        <li class="nav-item">
                            <span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="modal" data-target=".proclinic-modal-lg">
                                <span class="ti-search"></span>
                            </a>
                            <div class="modal fade proclinic-modal-lg" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lorvens">
                                    <div class="modal-content proclinic-box-shadow2">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Search Patient/Doctor:</h5>
                                            <span class="ti-close" data-dismiss="modal" aria-label="Close">
                                            </span>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="search-term"
                                                        placeholder="Type text here">
                                                    <button type="button" class="btn btn-lorvens proclinic-bg">
                                                        <span class="ti-location-arrow"></span> Search</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="ti-announcement"></span>
                            </a>
                            <div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
                                <h5>Notifications</h5>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-wheelchair"></span> New Patient Added</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-money"></span> Patient payment done</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-time"></span>Patient Appointment booked</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-wheelchair"></span> New Patient Added</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="ti-user"></span>
                            </a>
                            <div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
                                <h5>John Willing</h5>
                                <a class="dropdown-item" href="{{url('admin/setting')}}">
									<span class="ti-settings"></span> Settings</a>
                                <a class="dropdown-item" href="{{url('admin/logout')}}">
                                    <span class="ti-power-off"></span> Logout</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
            <!-- /Top Navigation -->
            <!-- Breadcrumb -->
            <!-- Page Title -->
            <div class="row no-margin-padding">
                <div class="col-md-6">
                    <h3 class="block-title">Quick Statistics</h3>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index-2.html">
                                <span class="ti-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- /Page Title -->

            <!-- /Breadcrumb -->

            {{-- Breaking for footer --}}
            @yield('content')

        </div>
        <!-- /Page Content -->
    </div>
    <!-- Back to Top -->
    <a id="back-to-top" href="#" class="back-to-top">
        <span class="ti-angle-up"></span>
    </a>
    <!-- /Back to Top -->

    <!-- Jquery Library-->
    <script src="{{ asset('backend') }}/js/jquery-3.2.1.min.js"></script>
    <!-- Popper Library-->
    <script src="{{ asset('backend') }}/js/popper.min.js"></script>
    <!-- Bootstrap Library-->
    <script src="{{ asset('backend') }}/js/bootstrap.min.js"></script>
    <!-- morris charts -->
    <script src="{{ asset('backend') }}/charts/js/raphael-min.js"></script>
    <script src="{{ asset('backend') }}/charts/js/morris.min.js"></script>
    <script src="{{ asset('backend') }}/js/custom-morris.js"></script>

    <!-- Custom Script-->
    <script src="{{ asset('backend') }}/js/custom.js"></script>
</body>



</html>
