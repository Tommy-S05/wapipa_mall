@extends('layouts.web')
@section('meta_description', '')

@section('title', 'Home Page')

@section('styles')
@endsection

@section('content')
    <!-- hero slider start -->
    {{--    <div class="hero-slider-area">--}}
    {{--        <div class="slider-wrapper-area3">--}}
    {{--            <div class="hero-slider-active hero__3 slick-dot-style hero-dot">--}}
    {{--                <div class="single-slider d-flex align-items-center"--}}
    {{--                     style="background-image: url(galio/assets/img/slider/slider3_bg1.jpg);">--}}
    {{--                    <div class="container">--}}
    {{--                        <div class="slider-main-content">--}}
    {{--                            <div class="slider-text">--}}
    {{--                                <h2>our new range of</h2>--}}
    {{--                                <h1>woman</h1>--}}
    {{--                                <h5>for less than $199.00</h5>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="single-slider d-flex align-items-center"--}}
    {{--                     style="background-image: url(galio/assets/img/slider/slider3_bg2.jpg);">--}}
    {{--                    <div class="container">--}}
    {{--                        <div class="slider-main-content">--}}
    {{--                            <div class="slider-text">--}}
    {{--                                <h2>shopping bag</h2>--}}
    {{--                                <h4>fashion collection 2018</h4>--}}
    {{--                                <p>for less than $199.00</p>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- hero slider end -->


    <!-- page wrapper start -->
    <div class="main-home-wrapper mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="main-sidebar category-wrapper mb-24 mt-4 mt-md-8 mt-sm-8">
                        <div class="section-title-2 d-flex justify-content-between mb-28">
                            <h3>best seller</h3>
                            <div class="category-append"></div>
                        </div> <!-- section title end -->
                        <div class="category-carousel-active row" data-row="2">
                            {{--                            --}}
                            {{--                            --}}
                            @foreach($bestProducts as $bestProduct)
                                <div class="col">
                                    <div class="category-item">
                                        <div class="category-thumb">
                                            <a href="{{ route('web.product_details', $bestProduct->slug) }}">
                                                <img src="{{ asset($bestProduct->images->pluck('url')[0]) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="category-content">
                                            <h4><a href="galio/product-details.html">{{ $bestProduct->name }}</a></h4>
                                            <div class="price-box">
                                                <div class="regular-price">
                                                    ${{ number_format($bestProduct->sell_price, 2) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end single item -->
                                </div>
                                <!-- end single item column -->
                            @endforeach
                        </div>
                    </div>
                    <!-- bestSeller area end -->
                </div>

                <div class="col-lg-9">
                    <!-- banner statistic start -->
                    {{--                    <div class="banner-statistic pt-6 pb-34">--}}
                    {{--                        <div class="img-container fix img-full">--}}
                    {{--                            <a href="#">--}}
                    {{--                                <img src="{{ asset('galio/assets/img/banner/home3_static5.jpg') }}" alt="">--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <!-- banner statistic end -->
                    <!-- category tab area start -->
                    <div class="category-tab-area mb-30">
                        <div class="category-tab">
                            <ul class="nav">
                                <li>
                                    <i class="fa fa-flask"></i>
                                </li>
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab_one">new</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_two">like new</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_three">used</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content pb-md-20 pb-sm-20">
                        <div class="tab-pane fade show active" id="tab_one">
                            <div class="feature-category-carousel-wrapper">
                                <div class="featured-carousel-active slick-padding slick-arrow-style arrow-space">
                                    <!-- product single item start -->
                                    @foreach($newProducts as $newProduct)
                                        <div class="product-item fix">
                                            <div class="product-thumb">
                                                <a href="{{ route('web.product_details', $newProduct->slug) }}">
                                                    <img src="{{ asset($newProduct->images->pluck('url')[0]) }}"
                                                         class="img-pri"
                                                         alt="{{ $newProduct->name }}">
                                                    @if(isset($newProduct->images->pluck('url')[1]))
                                                        <img src="{{ asset($newProduct->images->pluck('url')[1]) }}"
                                                             class="img-sec"
                                                             alt="{{ $newProduct->name }}">
                                                    @endif
                                                </a>
                                                <div class="product-label">
                                                    <span>{{ $newProduct->state }}</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal"
                                                       data-target="#quick_view{{ $newProduct->id }}"> <span
                                                            data-toggle="tooltip" data-placement="left"
                                                            title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                       title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                       title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4>
                                                    <a href="{{ route('web.product_details', $newProduct->slug) }}">{{ $newProduct->name }}</a>
                                                </h4>
                                                <div class="pricebox">
                                                    <span
                                                        class="regular-price">${{ number_format($newProduct->sell_price, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- product single item end -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab_two">
                            <div class="feature-category-carousel-wrapper">
                                <div class="featured-carousel-active slick-padding slick-arrow-style">
                                    <!-- product single item start -->
                                    @foreach($likeNewProducts as $likeNewProduct)
                                        <div class="product-item fix">
                                            <div class="product-thumb">
                                                <a href="{{ route('web.product_details', $likeNewProduct->slug) }}">
                                                    <img src="{{ asset($likeNewProduct->images->pluck('url')[0]) }}"
                                                         class="img-pri" alt="{{ $likeNewProduct->name }}">
                                                    @if(isset($newProduct->images->pluck('url')[1]))
                                                        <img src="{{ asset($likeNewProduct->images->pluck('url')[1]) }}"
                                                             class="img-sec" alt="{{ $likeNewProduct->name }}">
                                                    @endif
                                                </a>
                                                <div class="product-label">
                                                    <span>{{ $likeNewProduct->state }}</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                            data-toggle="tooltip" data-placement="left"
                                                            title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                       title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                       title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4>
                                                    <a href="{{ route('web.product_details', $likeNewProduct->slug) }}">{{ $likeNewProduct->name }}</a>
                                                </h4>
                                                <div class="pricebox">
                                                    <span
                                                        class="regular-price">${{ number_format($likeNewProduct->sell_price, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- product single item end -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_three">
                            <div class="feature-category-carousel-wrapper">
                                <div class="featured-carousel-active slick-padding slick-arrow-style">
                                    <!-- product single item start -->
                                    @foreach($usedProducts as $usedProduct)
                                        <div class="product-item fix">
                                            <div class="product-thumb">
                                                <a href="{{ route('web.product_details', $usedProduct->slug) }}">
                                                    <img src="{{ asset($usedProduct->images->pluck('url')[0]) }}"
                                                         class="img-pri" alt="{{ $usedProduct->name }}">
                                                    @if(isset($usedProduct->images->pluck('url')[1]))
                                                        <img src="{{ asset($usedProduct->images->pluck('url')[1]) }}"
                                                             class="img-sec" alt="{{ $usedProduct->name }}">
                                                    @endif
                                                </a>
                                                <div class="product-label">
                                                    <span>{{ $usedProduct->state }}</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                            data-toggle="tooltip" data-placement="left"
                                                            title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                       title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left"
                                                       title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4>
                                                    <a href="{{ route('web.product_details', $usedProduct->slug) }}">{{ $usedProduct->name }}</a>
                                                </h4>
                                                <div class="pricebox">
                                                    <span
                                                        class="regular-price">${{ number_format($usedProduct->sell_price, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- product single item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- category tab area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- page wrapper end -->

    <!-- latest product start -->
    <div class="latest-product pt-md-30 pt-lg-30 pt-sm-30">
        <div class="container">
            <div class="section-title mb-30">
                <div class="title-icon">
                    <i class="fa fa-flash"></i>
                </div>
                <h3>latest product</h3>
            </div> <!-- section title end -->
            <!-- featured category start -->
            <div class="latest-product-active slick-padding slick-arrow-style">
                <!-- product single item start -->
                @foreach($latestProducts as $latestProduct)
                    <div class="product-item fix">
                        <div class="product-thumb">
                            <a href="{{ route('web.product_details', $latestProduct->slug) }}">
                                <img src="{{ asset($latestProduct->images->pluck('url')[0]) }}"
                                     class="img-pri" alt="{{ $latestProduct->name }}">
                                @if(isset($latestProduct->images->pluck('url')[1]))
                                    <img src="{{ asset($latestProduct->images->pluck('url')[1]) }}"
                                         class="img-sec" alt="{{ $latestProduct->name }}">
                                @endif
                            </a>
                            <div class="product-label">
                                <span>{{ $latestProduct->state }}</span>
                            </div>
                            <div class="product-action-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick view">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </a>
                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                        class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4>
                                <a href="{{ route('web.product_details', $latestProduct->slug) }}">{{ $latestProduct->name }}</a>
                            </h4>
                            <div class="pricebox">
                                <span class="regular-price">${{ number_format($latestProduct->sell_price, 2) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- product single item end -->
            </div>
            <!-- featured category end -->
        </div>
    </div>
    <!-- latest product end -->
    @include('web._modal_home')
@endsection

@section('scripts')
@endsection
