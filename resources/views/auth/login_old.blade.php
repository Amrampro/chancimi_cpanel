<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login">

    <!-- ========== Page Title ========== -->
    <title>GoulBAM - Login</title>

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


    <!-- Start User Login
    ============================================= -->
    <div class="login-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="login-items">
                        <div class="login-box">
                            <div class="login-content">
                                <div class="col-md-6 info">
                                    <img src="{{ asset('frontend') }}/assets/img/logo.png" alt="Login">
                                    <h2>Bienvenu(e) !</h2>
                                    <p>
                                        <b>GoulBAM,</b> votre univers numérique où le dynamisme, le service
                                        qualité/prix et la satisfaction du client sont primordiaux.
                                    </p>
                                </div>
                                <div class="col-md-6 content">
                                    <h4>Se connecter</h4>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input id="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        placeholder="Email*" type="email" name="email"
                                                        value="{{ old('email') }}" required autocomplete="email"
                                                        autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input id="password" type="password" placeholder="Password*"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{-- {{ __('Forgot Your Password?') }} --}}
                                                    Mot de passe oublié ?
                                                </a>
                                            @endif
                                        </div>
                                        {{-- <div class="row mb-3">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Valider') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="sign-up">
                                        <p>
                                            Pas encore de compte ? <a href="/register">Créer un compte</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End User Login -->

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
