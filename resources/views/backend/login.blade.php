<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - login</title>
    <!-- Fav  Icon Link -->
    <link rel="shortcut icon" type="image/png" href="images/fav.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bootstrap.min.css">
    <!-- themify icons CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/themify-icons.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/styles.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/red.css" id="style_theme">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/responsive.css">

    <script src="{{ asset('backend') }}/js/modernizr.min.js"></script>
</head>

<body class="auth-bg">
    <!-- Pre Loader -->
    <div class="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--/Pre Loader -->
    <div class="wrapper">
        <!-- Page Content  -->
        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 auth-box">
                        <div class="proclinic-box-shadow">
                            <h3 class="widget-title">Login</h3>
                            @if ($errors)
                                @foreach ($errors->all() as $error)
                                    <span style="color:red">{{ $error }}</span>
                                @endforeach
                            @endif
                            @if (Session::has('error'))
                                <span style="color:red">{{ session('error') }}</span>
                            @endif
                            <form class="widget-form" method="post" action="{{ url('admin/login') }}">
                                @csrf
                                <!-- form-group -->
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input name="username" placeholder="Username" class="form-control" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <!-- form-group -->
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="password" placeholder="Password" name="password"
                                            class="form-control" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <!-- Check Box -->
                                <div class="form-check row">
                                    <div class="col-sm-12 text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                            <label class="custom-control-label" for="ex-check-2">Remember Me</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Check Box -->
                                <!-- Login Button -->
                                <div class="button-btn-block">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                </div>
                                <!-- /Login Button -->
                                <!-- Links -->
                                <div class="auth-footer-text">
                                    <small>New User,
                                        <a href="sign-up.html">Sign Up</a> Here</small>
                                </div>
                                <!-- /Links -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content  -->
    </div>
    <!-- Jquery Library-->
    <script src="{{ asset('backend') }}/js/jquery-3.2.1.min.js"></script>
    <!-- Popper Library-->
    <script src="{{ asset('backend') }}/js/popper.min.js"></script>
    <!-- Bootstrap Library-->
    <script src="{{ asset('backend') }}/js/bootstrap.min.js"></script>
    <!-- Custom Script-->
    <script src="{{ asset('backend') }}/js/custom.js"></script>
</body>



</html>
