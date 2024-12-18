<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Sistem Informasi Pendidikan dan Pelatihan Tenaga Kerja RS Bhayangkara')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/template/assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin/template/assets/images/favicon.png') }}" />
</head>
<body>
<div class="container-scroller">
    <!-- Sidebar -->
    @include('layout.sidebar')
    <!-- End of Sidebar -->

    <!-- Main content -->
    <div class="container-fluid page-body-wrapper">
        <!-- Navbar -->
        @include('layout.navbar')
        <!-- End of Navbar -->
        
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('layout.footer')
            <!-- End of Footer -->
        </div>
    </div>
</div>

<!-- plugins:js -->
<script src="{{ asset('admin/template/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- Plugin js for this page -->
<script src="{{ asset('admin/template/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/template/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('admin/template/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('admin/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<!-- inject:js -->
<script src="{{ asset('admin/template/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/template/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin/template/assets/js/misc.js') }}"></script>
<script src="{{ asset('admin/template/assets/js/settings.js') }}"></script>
<script src="{{ asset('admin/template/assets/js/todolist.js') }}"></script>
<!-- End custom js for this page -->

<!-- Custom Chart Scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

