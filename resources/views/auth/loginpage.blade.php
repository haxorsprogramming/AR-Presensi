<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login - {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('ladun/lexa/') }}/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('ladun/lexa/') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('ladun/lexa/') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('ladun/lexa/') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="account-pages my-5 pt-sm-5" >
        <div class="container" id="loginApp">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body pt-0">

                            <h3 class="text-center mt-5 mb-4">
                                <a href="{{ url('') }}" class="d-block auth-logo">
                                    <img src="{{ asset('ladun/lexa/') }}/assets/images/logo-dark.png" alt="" height="30" class="auth-logo-dark">
                                    <img src="{{ asset('ladun/lexa/') }}/assets/images/logo-light.png" alt="" height="30" class="auth-logo-light">
                                </a>
                            </h3>

                            <div class="p-3">
                                <h4 class="text-muted font-size-18 mb-1 text-center">Aplikasi Presensi Terintegrasi</h4>
                                <p class="text-muted text-center">Sign in to continue.</p>
                                <div class="form-horizontal mt-4">
                                    <div class="mb-3">
                                        <label for="username">Username</label>
                                        &nbsp;<small class="text-primary" style="font-style: italic;">(Min 5 character)</small>
                                        <input type="text" class="form-control" id="txtUsername" placeholder="Enter username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="userpassword">Password</label>
                                        &nbsp;<small class="text-primary" style="font-style: italic;">(Min 5 character)</small>
                                        <input type="password" class="form-control" id="txtPassword" placeholder="Enter password">
                                    </div>
                                    <div class="mb-3 row mt-4">
                                        <div class="col-6">
                                            
                                        </div>
                                        <div class="col-6 text-end">
                                            <a href="javascript:void(0)" @click="loginAtc" class="btn btn-primary w-md waves-effect waves-light">Log In</a>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-4">
                                            <a href="javascript:void(0)" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Don't have an account ? <a href="javascript:void(0)" class="text-primary"> Signup Now </a></p>
                       {{ env('APP_NAME') }} ©  Aditia Darma Nst <span class="d-none d-sm-inline-block"> - Theme by Themesbrand.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('ladun/lexa/') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('ladun/lexa/') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('ladun/lexa/') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('ladun/lexa/') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('ladun/lexa/') }}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('ladun/lexa/') }}/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- App js -->
    <script src="{{ asset('ladun/lexa/') }}/assets/js/app.js"></script>
    <script>
        const server = "{{ url('') }}/";
    </script>
    <script src="{{ asset('ladun/base/js/') }}/login.js"></script>
</body>

</html>