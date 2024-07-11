<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>@stack('title') | {{ config('app.name') }}</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta content="{{ csrf_token() }}" name="csrf_token" />
    <meta name="app-url" content="{{ config('app.url') }}">
    <meta name="referrer" content="no-referrer-when-downgrade">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/fontaswesome.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
    <!-- Summernote -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/dist/summernote-lite.min.css') }}">
    <!-- Tagify  -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/tagify/tagify.css') }}">
    <!-- datepicker-autoclose -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datepicker/bootstrap-datepicker.min.css') }}">
    <!-- datepicker range jquery plugin css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datepicker-plugin/daterangepicker.css') }}">

    <!-- fullcalendar css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/fullcalendar/packages/core/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fullcalendar/packages/daygrid/main.css') }}" />

    <!-- ui dropdown search  -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/ui-dropdown-search/semantic.min.css') }}" />

    <!-- FlatIcons Css -->
    <link rel="stylesheet" href="{{ asset('assets/icons/css/all/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/css/bold/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/css/brands/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/css/regular/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/css/solid/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/css/thin/rounded.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/css/thin/straight.css') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"> --}}

    @stack('css')
</head>

<body>


    <!-- Admin Main Top Area Start -->
    <main>
        <!-- Sidebar -->
        @include('admin::sidebar')
        <div class="body-wrapper">
            <!-- Header -->
            @include('admin::navbar')
            <!-- Content -->
            @yield('content')
        </div>
    </main>
    <!-- Admin Main Top Area End -->


    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- select js -->
    <script src="{{ asset('assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
    <!-- apexcharts -->
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <!-- chart-js -->
    <script src="{{ asset('assets/vendors/chart-js/chart.js') }}"></script>
    <!-- clipboard -->
    <script src="{{ asset('assets/vendors/clipboard-js/clipboard.min.js') }}"></script>
    <!-- summernote js -->
    <script src="{{ asset('assets/vendors/dist/summernote-lite.min.js') }}"></script>
    <!-- datepicker-autoclose js-->
    <script src="{{ asset('assets/vendors/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- datepicker range plugin -->
    <script src="{{ asset('assets/vendors/datepicker-plugin/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datepicker-plugin/daterangepicker.js') }}"></script>

    <!-- full calender js -->
    <script src="{{ asset('assets/vendors/fullcalendar/packages/core/main.js') }}"></script>
    <script src="{{ asset('assets/vendors/fullcalendar/packages/interaction/main.js') }}"></script>
    <script src="{{ asset('assets/vendors/fullcalendar/packages/daygrid/main.js') }}"></script>
    <script src="{{ asset('assets/vendors/fullcalendar/packages/timegrid/main.js') }}"></script>
    <script src="{{ asset('assets/vendors/fullcalendar/packages/list/main.js') }}"></script>

    <!-- ui dropdown search  -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/ui-dropdown-search/semantic.min.js') }}" />

    <script src="{{ asset('assets/js/script.js') }}"></script>

    @include('admin::modal')
    @include('admin::toastr')
    @include('admin::custom_js')
    @stack('js')
</body>

</html>
