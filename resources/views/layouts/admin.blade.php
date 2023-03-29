<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--    <title>@yield('title')</title>--}}
    {{--    @vite(['resources/sass/fonts.scss'])--}}
    <!-- plugins:css -->
    {{--    <link rel="stylesheet" href="Melody/vendors/iconfonts/font-awesome/css/all.min.css">--}}
    {{--    {!! Html::style("Melody/vendors/iconfonts/font-awesome/css/all.min.css") !!}--}}

    {{--    <link rel="stylesheet" href="Melody/vendors/css/vendor.bundle.base.css">--}}
    {{--    {!! Html::style("Melody/vendors/css/vendor.bundle.base.css") !!}--}}

    {{--    <link rel="stylesheet" href="Melody/vendors/css/vendor.bundle.addons.css">--}}
    {!! Html::style("Melody/vendors/css/vendor.bundle.addons.css") !!}
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    {{--    <link rel="stylesheet" href="Melody/css/style.css">--}}
    {!! Html::style("Melody/css/style.css") !!}
    @yield('styles')
    <!-- endinject -->
    <link rel="shortcut icon" href="http://www.urbanui.com/"/>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            {{--            <img style="width: 150px; height: 50px;" src="images/1676953447-wapiti_horizontal_positive.png" alt="Logo"/>--}}
            <a class="navbar-brand brand-logo" href="Melody/index-2.html"><img
                    src="{{ asset('Melody/images/logo.svg') }}" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="Melody/index-2.html"><img
                    src="{{ asset('Melody/images/logo-mini.svg') }}"
                    alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="fas fa-bars"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item nav-search d-none d-md-flex">
                    <div class="nav-link">
                        <div class="input-group">
                            <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                @yield('create')
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="{{ asset('Melody/images/faces/face5.jpg') }}" alt="profile"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="fas fa-cog text-primary"></i>
                            Settings
                        </a>
                        {{--                        <a class="dropdown-item" href="{{ route('profile.edit') }}">--}}
                        {{--                            <i class="fas fa-cog text-primary"></i>--}}
                        {{--                            {{ __('Profile') }}--}}
                        {{--                        </a>--}}
                        <div class="dropdown-divider"></div>
                        {{--                        <form method="POST" action="{{ route('logout') }}">--}}
                        {{--                            @csrf--}}
                        {{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
                        {{--                               onclick="event.preventDefault(); this.closest('form').submit();">--}}
                        {{--                                <i class="fas fa-power-off text-primary"></i>--}}
                        {{--                                {{ __('Log Out') }}--}}
                        {{--                            </a>--}}
                        {{--                        </form>--}}
                    </div>
                </li>
                @yield('options')
                {{--                <li class="nav-item nav-settings d-none d-lg-block">--}}
                {{--                    <a class="nav-link" href="#">--}}
                {{--                        <i class="fas fa-ellipsis-h"></i>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="fas fa-bars"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close fa fa-times"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>
                    Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                    Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles primary"></div>
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>

        <!-- partial:partials/_sidebar.html -->
        @include('layouts._nav')
        <!-- partial -->
        <div class="main-panel">
            @yield('content')
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                            class="far fa-heart text-danger"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
{{--<script src="Melody/vendors/js/vendor.bundle.base.js"></script>--}}
{!! Html::script("Melody/vendors/js/vendor.bundle.base.js") !!}

{{--<script src="Melody/vendors/js/vendor.bundle.addons.js"></script>--}}
{!! Html::script("Melody/vendors/js/vendor.bundle.addons.js") !!}
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
{{--<script src="Melody/js/off-canvas.js"></script>--}}
{!! Html::script("Melody/js/off-canvas.js") !!}

{{--<script src="Melody/js/hoverable-collapse.js"></script>--}}
{!! Html::script("Melody/js/hoverable-collapse.js") !!}

{{--<script src="Melody/js/misc.js"></script>--}}
{!! Html::script("Melody/js/misc.js") !!}

{{--<script src="Melody/js/settings.js"></script>--}}
{!! Html::script("Melody/js/settings.js") !!}

{{--<script src="Melody/js/todolist.js"></script>--}}
{!! Html::script("Melody/js/todolist.js") !!}
<!-- endinject -->
<!-- Custom js for this page-->
{{--<script src="Melody/js/dashboard.js"></script>--}}
{!! Html::script("Melody/js/dashboard.js") !!}
<!-- End custom js for this page-->
{{--@vite(['resources/Melody/vendors/js/vendor.bundle.base.js'])--}}
{{--@vite(['resources/Melody/vendors/js/vendor.bundle.addons.js'])--}}
{{--@vite(['resources/Melody/js/off-canvas.js'])--}}
{{--@vite(['resources/Melody/js/hoverable-collapse.js'])--}}
{{--@vite(['resources/Melody/js/misc.js'])--}}
{{--@vite(['resources/Melody/js/settings.js'])--}}
{{--@vite(['resources/Melody/js/todolist.js'])--}}
{{--@vite(['resources/Melody/js/dashboard.js'])--}}
<script src="https://kit.fontawesome.com/da69ce0f95.js" crossorigin="anonymous"></script>
{{--@vite(['src' => 'https://kit.fontawesome.com/da69ce0f95.js', 'crossorigin' => 'anonymous'])--}}
@yield('scripts')
</body>


</html>