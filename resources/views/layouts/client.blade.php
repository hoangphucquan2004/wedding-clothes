<!doctype html>
<html class="no-js')}}" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kenne</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="Kenne is a stunning html template for an expansion eCommerce site that suitable for any kind of fashion store. It will make your online store look more impressive and attractive to viewers. ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('assets/client/images/image-removebg-preview (9).png') }}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/font-awesome.min.css') }}">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/fontawesome-stars.min.css') }}">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/ion-fonts.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/slick.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/animate.min.css') }}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/jquery-ui.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/nice-select.css') }}">
    <!-- Timecircles -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/timecircles.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">

</head>

<body class="template-color-2">
    <div class="main-wrapper">
        <header class="main-header_area-2">
            <div class="header-middle_area">

                @include('clients.blocks.header')

                <!-- header -->

                @yield('content')

                <style>
                    .star {
                        display: none;
                    }

                    .star-label {
                        display: inline-block;
                        width: 30px;
                        height: 30px;
                        background-image: url({{ asset('assets/client/images/star1.png') }});
                        background-size: cover;
                        cursor: pointer;
                    }

                    .star-input:checked+.star-label {
                        background-image: url('https://www.example.com/star-filled.png');
                        /* Thay thế đường dẫn này bằng đường dẫn đến hình ảnh sao đã được điền của bạn */
                    }
                </style>

                @include('clients.blocks.footer')

                <!-- Kenne's Footer Area End Here -->

                <!-- Scroll To Top Start -->
                <a class="scroll-to-top" href="#"><i class="ion-chevron-up"></i></a>
                <!-- Scroll To Top End -->

            </div>

            <!-- JS
============================================ -->

            <!-- jQuery JS -->
            <script src="{{ asset('assets/client/js/vendor/jquery-3.6.0.min.js') }}"></script>
            <script src="{{ asset('assets/client/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
            <!-- Modernizer JS -->
            <script src="{{ asset('assets/client/js/vendor/modernizr-3.11.2.min.js') }}"></script>
            <!-- Bootstrap JS -->
            <script src="{{ asset('assets/client/js/vendor/bootstrap.bundle.min.js') }}"></script>

            <!-- Slick Slider JS -->
            <script src="{{ asset('assets/client/js/plugins/slick.min.js') }}"></script>
            <!-- Barrating JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery.barrating.min.js') }}"></script>
            <!-- Counterup JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery.counterup.js') }}"></script>
            <!-- Nice Select JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery.nice-select.js') }}"></script>
            <!-- Sticky Sidebar JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery.sticky-sidebar.js') }}"></script>
            <!-- Jquery-ui JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery-ui.min.js') }}"></script>
            <script src="{{ asset('assets/client/js/plugins/jquery.ui.touch-punch.min.js') }}"></script>
            <!-- Theia Sticky Sidebar JS -->
            <script src="{{ asset('assets/client/js/plugins/theia-sticky-sidebar.min.js') }}"></script>
            <!-- Waypoints JS -->
            <script src="{{ asset('assets/client/js/plugins/waypoints.min.js') }}"></script>
            <!-- jQuery Zoom JS -->
            <script src="{{ asset('assets/client/js/plugins/jquery.zoom.min.js') }}"></script>
            <!-- Timecircles JS -->
            <script src="{{ asset('assets/client/js/plugins/timecircles.js') }}"></script>

            <!-- Main JS -->
            <script src="{{ asset('assets/client/js/main.js') }}"></script>

</body>


<!-- Mirrored from htmldemo.net/kenne/kenne/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2024 08:41:32 GMT -->

</html>
