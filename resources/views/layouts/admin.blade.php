<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/images/logo-mini.svg') }}">

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
</head>

<body>

    <div class="container-scroller">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" style="z-index: 1111" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" style="z-index: 1111" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('content')

        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.cookie.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin/assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    
    <!-- End custom js for this page -->
</body>

</html>
