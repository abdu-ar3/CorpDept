<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

        <style>
            .spinner-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(255, 255, 255, 0.7);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 9999; /* Pastikan lebih tinggi dari elemen lain */
            }

            .spinner {
                width: 4rem;
                height: 4rem;
            }
        </style>

    @yield('style')

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Prasetia @yield("title")</title>  
    
    <link rel="apple-touch-icon" href="{{asset('visit-assets/images/ico/prasetia.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('visit-assets/images/ico/prasetia.png')}}
">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <!-- END: Vendor CSS-->

    <!-- CSS Status -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/status.css')}}">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/pages/chat-application.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/icon/simple-line-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('visit-assets/css/pages/dashboard-analytics.css')}}">
    <!-- END: Page CSS-->

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
    <!-- Tambahkan spinner di sini -->
        <div class="spinner-overlay">
            <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden"></span>
            </div>
        </div>

    <!-- BEGIN: Header-->
    <!-- fixed-top-->
    @include('layouts.users.sidebar')


    <!-- BEGIN: Main Menu-->
    @include('layouts.users.navbar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        @yield('content')
        
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Footer-->
    @include('layouts.users.footer')
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('visit-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script type="text/javascript" src="{{asset('visit-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
    <script src="{{asset('visit-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
    <script src=" {{asset('visit-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('visit-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('visit-assets/js/core/app.js')}}" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('visit-assets/js/scripts/pages/dashboard-analytics.js')}}" type="text/javascript"></script>
    <!-- END: Page JS-->
    <script type="text/javascript" src="{{asset('visit-assets/vendors/charts/chart.js')}}"></script>

    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>

    <script>
        document.onreadystatechange = function () {
            if (document.readyState === "complete") {
                // Sembunyikan spinner saat halaman selesai dimuat
                document.querySelector(".spinner-overlay").style.display = "none";
            }
        };
    </script>


    @yield('script')


</body>
<!-- END: Body-->

</html>