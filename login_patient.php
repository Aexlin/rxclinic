<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Rx Clinic</title><!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex"><!-- Simplebar -->
    <link type="text/css" href="assets/vendor/simplebar.min.css" rel="stylesheet"><!-- App CSS -->
    <link type="text/css" href="assets/css/applogin.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet"><!-- Material Design Icons -->
    <link type="text/css" href="assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-material-icons.rtl.css" rel="stylesheet">
    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet"><!-- ion Range Slider -->
    <link type="text/css" href="assets/css/vendor-ion-rangeslider.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet">
</head>

<body class="layout-login-centered-boxed">
    <div class="layout-login-centered-boxed__form">
        <br><br><br>
        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-2 navbar-light"><a
                href="#" class="navbar-brand text-center mb-2 mr-0" style="min-width: 0"><img
                    class="navbar-brand-icon" src="assets/images/pupqclogowithname3.png" width="320" alt="Flat"><span></span></a>
        </div>
        <div class="card card-body">
            <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-2 navbar-light"><a
                href="#" class="navbar-brand text-center mb-2 mr-0" style="min-width: 0"><span>LOGIN</span></a>
            </div>
            <div class="page-separator">
                <div class="page-separator__text">with</div>
            </div>
            <a href="" class="btn btn-light btn-block"><span class="mr-2"><svg version="1.1"
                        xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 48 48"
                        class="abcRioButtonSvg">
                        <g>
                            <path fill="#EA4335"
                                d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                            </path>
                            <path fill="#4285F4"
                                d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                            </path>
                            <path fill="#FBBC05"
                                d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                            </path>
                            <path fill="#34A853"
                                d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                            </path>
                            <path fill="none" d="M0 0h48v48H0z"></path>
                        </g>
                    </svg></span>Google </a>
            <div class="page-separator">
                <div class="page-separator__text">or</div>
            </div>
            <form action="about_patient.php" novalidate>
                <div class="form-group"><label class="text-label" for="email_2">Email Address:</label>
                    <div class="input-group input-group-merge"><input id="email_2" type="email" required=""
                            class="form-control form-control-prepended" placeholder="name@gmail.com">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="far fa-envelope"></span></div>
                        </div>
                    </div>
                </div>
                <div class="form-group"><label class="text-label" for="password_2">Password:</label>
                    <div class="input-group input-group-merge"><input id="password_2" type="password" required=""
                            class="form-control form-control-prepended" placeholder="Enter your password">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><span class="fa fa-key"></span></div>
                        </div>
                    </div>
                </div>
                <div class="form-group"><button class="btn btn-block btn-primary" type="submit">Login</button></div>
                <div class="form-group text-center">
                    <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input"
                            checked="" id="remember"><label class="custom-control-label" for="remember">Remember me<menu></menu></label></div>
                </div>
                <div class="form-group text-center"><a href="forgotpassword.php">Forgot password?</a><br>Don't have an account? <a
                        class="text-body text-underline" href="register_patient.php">Register Here!</a></div>
            </form>
        </div>
    </div><!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script><!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script><!-- Simplebar -->
    <script src="assets/vendor/simplebar.min.js"></script><!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script><!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script><!-- Range Slider -->
    <script src="assets/vendor/ion.rangeSlider.min.js"></script>
    <script src="assets/js/ion-rangeslider.js"></script><!-- App -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar-mini.js"></script>
    <script src="assets/js/app.js"></script><!-- App Settings(safe to remove) -->
    <script src="assets/js/app-settings.js"></script>
</body>

</html>