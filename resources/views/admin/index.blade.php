<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.bootstrapdash.com/breeze-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Apr 2024 15:24:37 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
        @yield('title')
    </title>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="container-scroller">

        @include('admin.layout.sidenavbar')
        <div class="container-fluid page-body-wrapper">

            @include('admin.layout.topnavbar')
            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    <div class="mb-4">
                        <div class="row">
                            <h3 class="mb-0 col-md-6"> Hi, welcome to @yield('title')!</h3>

                            <span class="col-md-5">
                                @if (session()->has('message'))
                                    <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible"
                                        id="sessionAlert">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger d-flex align-items-center alert-dismissible"
                                        id="errorAlert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="text-capitalize mt-3">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </span>
                        </div>

                    </div>

                    <!-- this is the main part  start -->

                    @yield('main')

                    <!-- this is the main part end -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('backend/assets/vendors/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.categories.js') }}"></script>
        <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
        <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('backend/assets/vendors/flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('backend/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('backend/assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('backend/assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('backend/assets/js/misc.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>
        <!-- End custom js for this page -->
        
        {{-- custom aleart for admin  --}}
        <script>
            function submitAction() {
                if (confirm("Are you sure you want to Submit this?")) {

                    return true; // Proceed with form submission
                } else {
                    return false; // Cancel form submission
                }
            }
            function updateAction() {
                if (confirm("Are you sure you want to Update this?")) {

                    return true; // Proceed with form submission
                } else {
                    return false; // Cancel form submission
                }
            }
            function deleteAction() {
                if (confirm("Are you sure you want to Delete this?")) {

                    return true; // Proceed with form submission
                } else {
                    return false; // Cancel form submission
                }
            }
            // Hide alerts after 5 seconds
            setTimeout(() => {
                const sessionAlert = document.getElementById('sessionAlert');
                if (sessionAlert) {
                    sessionAlert.style.display = 'none';
                }

                const errorAlert = document.getElementById('errorAlert');
                if (errorAlert) {
                    errorAlert.style.display = 'none';
                }
            }, 5000);
        </script>
</body>

<!-- Mirrored from demo.bootstrapdash.com/breeze-free/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Apr 2024 15:24:53 GMT -->

</html>
