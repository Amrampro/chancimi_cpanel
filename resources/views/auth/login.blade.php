<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chancimi - Login</title>
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

        <div class="edu-about-area about-style-3 edu-section-gap bg-image">
            <div class="container eduvibe-animated-shape">

                <div class="login-register-page-wrapper edu-section-gap">
                    <div class="container checkout-page-style">
                        <div class="row g-5" style="display: grid; place-items: center;">
                            <div class="col-lg-6">
                                <div class="login-form-box bg-color-white">
                                    <h3 class="mb-30">Se Connecter</h3>
                                    <form class="login-form" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="input-box mb--30">
                                            <input id="email" class="@error('email') is-invalid @enderror"
                                                placeholder="Email*" type="email" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="input-box mb--30">
                                            <input id="password" type="password" placeholder="Password*"
                                                class="@error('password') is-invalid @enderror" name="password" required
                                                autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="input-box">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" style="font-size: 15px; float: right"
                                                    href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                                            @endif
                                        </div>
                                        <div class="comment-form-consent input-box mb--30">
                                            <input id="checkbox-1" type="checkbox" />
                                            <label for="checkbox-1">Remember Me</label>
                                        </div>
                                        <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                            <span>Connexion</span>
                                        </button>
                                        <div class="input-box">
                                            <a class="btn btn-link" style="font-size: 15px"
                                                href="{{ url('/register') }}">Créer un compte</a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-21.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-13-04.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-03-05.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="{{ asset('frontend') }}/assets/images/shapes/shape-15-02.png" alt="Shape Thumb" />
                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> --}}

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
</body>

</html>
