<!DOCTYPE html>
<html class="no-js" lang="es">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Wapipa Mall')">

    <!-- Site title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="galio/assets/img/favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap CSS -->
    {{--    <link href="galio/assets/css/bootstrap.min.css" rel="stylesheet">--}}
    {!! Html::style("galio/assets/css/bootstrap.min.css") !!}
    <!-- Font-Awesome CSS -->
    {{--    <link href="galio/assets/css/font-awesome.min.css" rel="stylesheet">--}}
    {!! Html::style("galio/assets/css/font-awesome.min.css") !!}
    <!-- helper class css -->
    {{--    <link href="galio/assets/css/helper.min.css" rel="stylesheet">--}}
    {!! Html::style("galio/assets/css/helper.min.css") !!}
    <!-- Plugins CSS -->
    {{--    <link href="galio/assets/css/plugins.css" rel="stylesheet">--}}
    {!! Html::style("galio/assets/css/plugins.css") !!}
    <!-- Main Style CSS -->
    {{--    <link href="galio/assets/css/style.css" rel="stylesheet">--}}
    {!! Html::style("galio/assets/css/style.css") !!}
    {{--    <link href="galio/assets/css/skin-default.css" rel="stylesheet" id="galio-skin">--}}
    {!! Html::style("galio/assets/css/skin-default.css") !!}
    @yield('styles')
</head>

<body>

<!-- color switcher start -->
{{--<div class="color-switcher">--}}
{{--    <div class="color-switcher-inner">--}}
{{--        <div class="switcher-icon">--}}
{{--            <i class="fa fa-cog fa-spin"></i>--}}
{{--        </div>--}}

{{--        <div class="switcher-panel-item">--}}
{{--            <h3>Color Schemes</h3>--}}
{{--            <ul class="nav flex-wrap colors">--}}
{{--                <li class="default active" data-color="default" data-toggle="tooltip" data-placement="top"--}}
{{--                    title="Red"></li>--}}
{{--                <li class="green" data-color="green" data-toggle="tooltip" data-placement="top" title="Green"></li>--}}
{{--                <li class="soft-green" data-color="soft-green" data-toggle="tooltip" data-placement="top"--}}
{{--                    title="Soft-Green"></li>--}}
{{--                <li class="sky-blue" data-color="sky-blue" data-toggle="tooltip" data-placement="top"--}}
{{--                    title="Sky-Blue"></li>--}}
{{--                <li class="orange" data-color="orange" data-toggle="tooltip" data-placement="top" title="Orange"></li>--}}
{{--                <li class="violet" data-color="violet" data-toggle="tooltip" data-placement="top" title="Violet"></li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <div class="switcher-panel-item">--}}
{{--            <h3>Layout Style</h3>--}}
{{--            <ul class="nav layout-changer">--}}
{{--                <li>--}}
{{--                    <button class="btn-layout-changer active" data-layout="wide">Wide</button>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <button class="btn-layout-changer" data-layout="boxed">Boxed</button>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <div class="switcher-panel-item bg">--}}
{{--            <h3>Background Pattern</h3>--}}
{{--            <ul class="nav flex-wrap bgbody-style bg-pattern">--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-pettern/1.png') }}" alt="Pettern"></li>--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-pettern/2.png') }}" alt="Pettern"></li>--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-pettern/3.png') }}" alt="Pettern"></li>--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-pettern/4.png') }}" alt="Pettern"></li>--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-pettern/5.png') }}" alt="Pettern"></li>--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-pettern/6.png') }}" alt="Pettern"></li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <div class="switcher-panel-item bg">--}}
{{--            <h3>Background Image</h3>--}}
{{--            <ul class="nav flex-wrap bgbody-style bg-img">--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-img/01.jpg') }}" alt="Images"></li>--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-img/02.jpg') }}" alt="Images"></li>--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-img/03.jpg') }}" alt="Images"></li>--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-img/04.jpg') }}" alt="Images"></li>--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-img/05.jpg') }}" alt="Images"></li>--}}
{{--                <li><img src="{{ asset('galio/assets/img/bg-panel/bg-img/06.jpg') }}" alt="Images"></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- color switcher end -->

<div class="wrapper box-layout">

    <!-- header area start -->
    <header>

        <!-- header top start -->
        <div class="header-top-area bg-gray text-center text-md-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="header-call-action">
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                info@wapipa.com
                            </a>
                            <a href="#">
                                <i class="fa fa-phone"></i>
                                +1 (809) 852-2693
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="header-top-right float-md-right float-none">
                            <nav>
                                <ul>
                                    @if(Auth::user())
                                        <li>
                                            <div class="dropdown header-top-dropdown">
                                                <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    my account
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="myaccount">

                                                    <a class="dropdown-item" href="{{ route('web.my_account') }}">
                                                        My Account
                                                    </a>
                                                    <form id="form_logout" action="{{ route('web.logout') }}"
                                                          method="POST">
                                                        @csrf
                                                    </form>
                                                    <a onclick="javascript:document.getElementById(`form_logout`).submit(); return false;"
                                                       class="dropdown-item" href="#">
                                                        Logout
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li>
                                            <div class="dropdown header-top-dropdown">
                                                <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    my account
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="myaccount">

                                                    <a class="dropdown-item" href="{{ route('web.login') }}">
                                                        login
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('web.login') }}">
                                                        register
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    @endif

                                    <li>
                                        <a href="{{ route('web.wishlist') }}">my wishlist</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('web.shopping_cart') }}">my cart</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('web.checkout') }}">checkout</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- header middle start -->
        <div class="header-middle-area pt-20 pb-20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="brand-logo">
                            <a href="{{ route('web.home') }}">
                                {{--                                <img src="{{ asset('galio/assets/img/logo/logo.png') }}" alt="brand logo">--}}
                                <img src="{{ asset('images/logo_wapipa_mall_2.png') }}" alt="brand logo">
                            </a>
                        </div>
                    </div> <!-- end logo area -->
                    <div class="col-lg-9">
                        <div class="header-middle-right">

                            <div class="header-middle-block">
                                <div class="header-middle-searchbox">
                                    <input type="text" placeholder="Search...">
                                    <button class="search-btn"><i class="fa fa-search"></i></button>
                                </div>
                                @include('layouts._mini_cart')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header middle end -->

        <!-- main menu area start -->
        <div class="main-header-wrapper bdr-bottom1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-header-inner">
                            <div class="category-toggle-wrap">
                                <div class="category-toggle">
                                    category
                                    <div class="cat-icon">
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                                <nav class="category-menu category-style-2">
                                    <ul>
                                        @foreach($categories as $category)
                                            <li>
                                                <a href="{{ route('web.products_category', $category->slug) }}">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </nav>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="{{ route('web.home') }}"><i
                                                    class="fa fa-home"></i>Home</a>
                                        </li>
                                        <li><a href="#">shop <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="{{ route('web.products') }}">Products</a>
                                                </li>
                                                <li><a href="#">Category <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        @foreach($categories as $category)
                                                            <li>
                                                                <a href="{{ route('web.products_category', $category->slug) }}">
                                                                    {{ $category->name }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('web.contact_us') }}">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main menu area end -->

    </header>
    <!-- header area end -->

    @yield('content')

    <!-- footer area start -->
    <footer>
        <!-- footer top start -->
        <div class="footer-top bg-black pt-14 pb-14 mt-5">
            <div class="container">
                <div class="footer-top-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-26">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4 style="color: white">
                                        <a style="color: white" href="{{ route('web.contact_us') }}">
                                            contact us
                                        </a>
                                    </h4>
                                </div>
                                <div class="widget-body">
                                    <ul class="location">
                                        <li style="color: white"><i class="fa fa-envelope"></i>support@wapipa.com</li>
                                        <li style="color: white"><i class="fa fa-phone"></i>+1 (809) 852-2693</li>
                                        <li style="color: white"><i class="fa fa-map-marker"></i>Address: Ensanche
                                            Paraiso, Calle 6 #21, Torre Europa, Santo Domingo
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-26">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4 style="color: white">my account</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        @if(Auth::user())
                                            <li><a style="color: white" href="{{ route('web.my_account') }}">my
                                                    account</a></li>
                                            <li><a style="color: white" href="{{ route('web.shopping_cart') }}">my
                                                    cart</a></li>
                                            <li><a style="color: white" href="{{ route('web.checkout') }}">checkout</a>
                                            </li>
                                            <li><a style="color: white" href="{{ route('web.wishlist') }}">my
                                                    wishlist</a></li>
                                        @else
                                            <li><a style="color: white" href="{{ route('web.login') }}">login</a></li>
                                            <li><a style="color: white" href="{{ route('web.shopping_cart') }}">my
                                                    cart</a></li>
                                            <li><a style="color: white" href="{{ route('web.checkout') }}">checkout</a>
                                            </li>
                                            <li><a style="color: white" href="{{ route('web.wishlist') }}">my
                                                    wishlist</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-26">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4 style="color: white">product categories</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        @foreach($categories as $category)
                                            <li>
                                                <a style="color: white"
                                                   href="{{ route('web.products_category', $category->slug) }}">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- footer top end -->

        <!-- footer main start -->
        {{--        <div class="footer-widget-area pt-40 pb-38 pb-sm-4 pt-sm-30">--}}
        {{--            <div class="container">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-md-3 col-sm-6">--}}
        {{--                        <div class="footer-widget mb-sm-26">--}}
        {{--                            <div class="widget-title mb-10 mb-sm-6">--}}
        {{--                                <h4>contact us</h4>--}}
        {{--                            </div>--}}
        {{--                            <div class="widget-body">--}}
        {{--                                <ul class="location">--}}
        {{--                                    <li><i class="fa fa-envelope"></i>support@wapipa.com</li>--}}
        {{--                                    <li><i class="fa fa-phone"></i>+1 (809) 852-2693</li>--}}
        {{--                                    <li><i class="fa fa-map-marker"></i>Address: 1234 - Ensanche Paraiso, Calle 6 #21,--}}
        {{--                                        Torre Europa, Santo Domingo--}}
        {{--                                    </li>--}}
        {{--                                </ul>--}}
        {{--                                --}}{{--                                <a class="map-btn" href="galio/contact-us.html">open in google map</a>--}}
        {{--                            </div>--}}
        {{--                        </div> <!-- single widget end -->--}}
        {{--                    </div> <!-- single widget column end -->--}}
        {{--                    <div class="col-md-3 col-sm-6">--}}
        {{--                        <div class="footer-widget mb-sm-26">--}}
        {{--                            <div class="widget-title mb-10 mb-sm-6">--}}
        {{--                                <h4>my account</h4>--}}
        {{--                            </div>--}}
        {{--                            <div class="widget-body">--}}
        {{--                                <ul>--}}
        {{--                                    @if(Auth::user())--}}
        {{--                                        <li><a href="{{ route('web.my_account') }}">my account</a></li>--}}
        {{--                                        <li><a href="{{ route('web.shopping_cart') }}">my cart</a></li>--}}
        {{--                                        <li><a href="{{ route('web.checkout') }}">checkout</a></li>--}}
        {{--                                        <li><a href="{{ route('web.wishlist') }}">my wishlist</a></li>--}}
        {{--                                    @else--}}
        {{--                                        <li><a href="{{ route('web.login') }}">login</a></li>--}}
        {{--                                        <li><a href="{{ route('web.shopping_cart') }}">my cart</a></li>--}}
        {{--                                        <li><a href="{{ route('web.checkout') }}">checkout</a></li>--}}
        {{--                                        <li><a href="{{ route('web.wishlist') }}">my wishlist</a></li>--}}
        {{--                                    @endif--}}
        {{--                                </ul>--}}
        {{--                            </div>--}}
        {{--                        </div> <!-- single widget end -->--}}
        {{--                    </div> <!-- single widget column end -->--}}
        {{--                    <div class="col-md-3 col-sm-6">--}}
        {{--                        <div class="footer-widget mb-sm-26">--}}
        {{--                            <div class="widget-title mb-10 mb-sm-6">--}}
        {{--                                <h4>product categories</h4>--}}
        {{--                            </div>--}}
        {{--                            <div class="widget-body">--}}
        {{--                                <ul>--}}
        {{--                                    @foreach($categories as $category)--}}
        {{--                                        <li>--}}
        {{--                                            <a href="{{ route('web.products_category', $category->slug) }}">--}}
        {{--                                                {{ $category->name }}--}}
        {{--                                            </a>--}}
        {{--                                        </li>--}}
        {{--                                    @endforeach--}}
        {{--                                </ul>--}}
        {{--                            </div>--}}
        {{--                        </div> <!-- single widget end -->--}}
        {{--                    </div> <!-- single widget column end -->--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <!-- footer main end -->
    </footer>
    <!-- footer area end -->

</div>


<!-- Quick view modal start -->
{{--@include('web._modal_quick_view')--}}
<!-- Quick view modal end -->

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->


<!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
{{--<script src="galio/assets/js/vendor/modernizr-3.6.0.min.js"></script>--}}
{!! Html::script("galio/assets/js/vendor/modernizr-3.6.0.min.js") !!}
<!-- Jquery Min Js -->
{{--<script src="galio/assets/js/vendor/jquery-3.3.1.min.js"></script>--}}
{!! Html::script("galio/assets/js/vendor/jquery-3.3.1.min.js") !!}
<!-- Popper Min Js -->
{{--<script src="galio/assets/js/vendor/popper.min.js"></script>--}}
{!! Html::script("galio/assets/js/vendor/popper.min.js") !!}
<!-- Bootstrap Min Js -->
{{--<script src="galio/assets/js/vendor/bootstrap.min.js"></script>--}}
{!! Html::script("galio/assets/js/vendor/bootstrap.min.js") !!}
<!-- Plugins Js-->
{{--<script src="galio/assets/js/plugins.js"></script>--}}
{!! Html::script("galio/assets/js/plugins.js") !!}
<!-- Ajax Mail Js -->
{{--<script src="galio/assets/js/ajax-mail.js"></script>--}}
{!! Html::script("galio/assets/js/ajax-mail.js") !!}
<!-- Active Js -->
{{--<script src="galio/assets/js/main.js"></script>--}}
{!! Html::script("galio/assets/js/main.js") !!}
<!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
{{--<script src="galio/assets/js/switcher.js"></script>--}}
{!! Html::script("galio/assets/js/switcher.js") !!}
@yield('scripts')
</body>


</html>
