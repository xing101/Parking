<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}>
    <link href={{ asset('backend/assets/vendor/fonts/circular-std/style.css') }} rel="stylesheet">
    <link rel="stylesheet" href={{ asset('backend/assets/libs/css/style.css') }}>
    <link rel="stylesheet" href={{ asset('backend/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}>
    <link rel="stylesheet" href={{ asset('backend/assets/vendor/charts/chartist-bundle/chartist.css') }}>
    <link rel="stylesheet" href={{ asset('backend/assets/vendor/charts/morris-bundle/morris.css') }}>
    <link rel="stylesheet"
        href={{ asset('backend/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}>
    <link rel="stylesheet" href={{ asset('backend/assets/vendor/charts/c3charts/c3.css') }}>
    <link rel="stylesheet" href={{ asset('backend/assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}>
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src={{ asset('backend//assets/images/logo.png')}} alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
   <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src={{ asset('backend/assets/vendor/jquery/jquery-3.3.1.min.js') }}></script>
    <!-- bootstap bundle js -->
    <script src={{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}></script>
    <!-- slimscroll js -->
    <script src={{ asset('backend/assets/vendor/slimscroll/jquery.slimscroll.js') }}></script>
    <!-- main js -->
    <script src={{ asset('backend/assets/libs/js/main-js.js') }}></script>
    <!-- chart chartist js -->
    <script src={{ asset('backend/assets/vendor/charts/chartist-bundle/chartist.min.js') }}></script>
    <!-- sparkline js -->
    <script src={{ asset('backend/assets/vendor/charts/sparkline/jquery.sparkline.js') }}></script>
    <!-- morris js -->
    <script src={{ asset('backend/assets/vendor/charts/morris-bundle/raphael.min.js') }}></script>
    <script src={{ asset('backend/assets/vendor/charts/morris-bundle/morris.js') }}></script>
    <!-- chart c3 js -->
    <script src={{ asset('backend/assets/vendor/charts/c3charts/c3.min.js') }}></script>
    <script src={{ asset('backend/assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}></script>
    <script src={{ asset('backend/assets/vendor/charts/c3charts/C3chartjs.js') }}></script>
    <script src={{ asset('backend/assets/libs/js/dashboard-ecommerce.js') }}></script>
</body>
 
</html>