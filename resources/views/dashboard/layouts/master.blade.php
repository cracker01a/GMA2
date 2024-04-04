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

        <!-- plugin css -->
        <link href="libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

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

    <body>
        <div id="layout-wrapper">
            @include("dashboard.layouts.header")

            @include('dashboard.layouts.left-sidebar')

            <div class="main-content">
                <main>
                    @yield("content")
                </main>

                @include('dashboard.layouts.footer')
            </div>
        </div>

        @include('dashboard.layouts.right-sidebar')


        <!-- JAVASCRIPT -->
        <script src="libs/jquery/jquery.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="libs/metismenu/metisMenu.min.js"></script>
        <script src="libs/simplebar/simplebar.min.js"></script>
        <script src="libs/node-waves/waves.min.js"></script>
        <script src="libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="libs/pace-js/pace.min.js"></script>

        <!-- apexcharts -->
        <script src="libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- dashboard init -->
        <script src="js/pages/dashboard.init.js"></script>

        <script src="js/app.js"></script>

    </body>

</html>
