<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />

    <!-- darkmode js -->
    <script src="assets/js/vendors/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />


    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">

    <link rel="canonical" href="index.html" />

    <link rel="stylesheet" href="assets/libs/tiny-slider/dist/tiny-slider.css" />
    <title>{{ config('app.name') }} | @yield('title') </title>

    <style>
        /* these styles will animate bootstrap alerts. */
        .removable-alert {
            z-index: 2000 !important;
            top: 60px;
            right: 18px;
            max-width: 50%;
            position: fixed;
            animation: slide 0.5s forwards;
        }

        @keyframes slide {
            100% {
                top: 30px;
            }
        }

        @media screen and (max-width: 668px) {
            .removable-alert {
                /* center the alert on small screens */
                left: 10px;
                right: 10px;
                min-width: 30%;
                max-width: 100%;
            }
        }

    </style>

</head>
