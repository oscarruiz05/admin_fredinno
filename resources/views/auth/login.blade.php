<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Login | Fredinno</title>

        <meta name="description" content="sistema de facturación ">
        <meta name="author" content="Oscar Ruiz">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and Dashmix framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{asset('assets/css/dashmix.min.css')}}">

    </head>
    <body>
        
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="row no-gutters justify-content-center bg-body-dark">
                    <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
                        <!-- Sign In Block -->
                        <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="background-image: url('assets/media/logo/logo.png'); background-size: contain;">
                            <div class="row no-gutters">
                                <div class="col-md-6 order-md-1 bg-white">
                                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                                        <!-- Header -->
                                        <div class="mb-2 text-center">
                                            {{-- <a class="link-fx font-w700 font-size-h1" href="index.html">
                                                <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                                            </a> --}}
                                            <p class="text-uppercase font-w700 font-size-sm text-muted">Inicia Sesión</p>
                                        </div>
                                        <!-- END Header -->

                                        <!-- Sign In Form -->
                                        <form class="js-validation-signin" action="{{route('login')}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-alt" id="login-username" name="identificacion" placeholder="Identificación">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-alt" id="login-password" name="password" placeholder="Contraseña">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-hero-primary">
                                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Iniciar Sesión
                                                </button>
                                            </div>
                                        </form>
                                        <!-- END Sign In Form -->
                                    </div>
                                </div>
                                <div class="col-md-6 order-md-0 bg-primary-dark-op d-flex align-items-center">
                                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                                        <div class="media">
                                            <a class="img-link mr-3" href="javascript:void(0)">
                                                <img class="img-avatar img-avatar-thumb" src="{{asset('assets/media/avatars/avatar12.jpg')}}" alt="">
                                            </a>
                                            <div class="media-body">
                                                <p class="text-white font-w600 mb-1">
                                                    Panel de administración fredinno Rivera!
                                                </p>
                                                <a class="text-white-75 font-w600" href="javascript:void(0)">Oscar Ruiz, Web Developer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Sign In Block -->
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <script src="{{asset('assets/js/dashmix.core.min.js')}}"></script>

        <script src="{{asset('assets/js/dashmix.app.min.js')}}"></script>

        <!-- Page JS Plugins -->
        <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('assets/js/pages/op_auth_signin.min.js')}}"></script>
    </body>
</html>
