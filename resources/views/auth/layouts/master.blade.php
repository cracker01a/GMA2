<!doctype html>
<html lang="en">

    <head>
        <base href="{!! asset('dashboard').'/' !!}">
        <meta charset="utf-8" />
        <title>
            @yield("title")
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- preloader css -->
        <link rel="stylesheet" href="css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">

                    <main>
                        @yield("content")
                    </main>

                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="libs/jquery/jquery.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="libs/metismenu/metisMenu.min.js"></script>
        <script src="libs/simplebar/simplebar.min.js"></script>
        <script src="libs/node-waves/waves.min.js"></script>
        <script src="libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="libs/pace-js/pace.min.js"></script>

        <!-- validation init -->
        <script src="js/pages/validation.init.js"></script>

    </body>

</html>