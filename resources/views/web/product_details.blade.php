@extends('layouts.web')

@section('meta_description', '')

@section('title', 'Product Details')

@section('styles')
@endsection

@section('content')

    <div class="wrapper box-layout">

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('web.products') }}">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">product details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- product details wrapper start -->
        <div class="product-details-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-large-slider mb-20 slick-arrow-style_2">
                                        @foreach($product->images as $image)
                                            <div class="pro-large-img img-zoom" id="img1">
                                                <img src="{{ asset($image->url) }}" alt=""/>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="pro-nav slick-padding2 slick-arrow-style_2">
                                        @foreach($product->images as $image)
                                            <div class="pro-nav-thumb">
                                                <img src="{{ asset($image->url) }}" alt=""/>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-details-des mt-md-34 mt-sm-34">
                                        <h3>
                                            <a href="{{ route('web.product_details', $product->id) }}">{{ $product->name }}</a>
                                        </h3>
                                        @if($product->stock > 0)
                                            <div class="availability mt-10">
                                                <h5>Availability:</h5>
                                                <span>{{ $product->stock }} in stock</span>
                                            </div>
                                        @else
                                            <div class="availability mt-10">
                                                <h5>Availability:</h5>
                                                <span style="color: red">0 in stock</span>
                                            </div>
                                        @endif
                                        <div class="pricebox">
                                            <span
                                                class="regular-price">${{ number_format($product->sell_price, 2) }}</span>
                                        </div>
                                        <p>{{ $product->short_description }}</p>
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </div>
                                            <div class="action_link">
                                                <a class="buy-btn" href="#">add to cart<i
                                                        class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="useful-links mt-20">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i>wishlist</a>
                                        </div>
                                        <div class="share-icon mt-20">
                                            {{--                                            <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>--}}
                                            {{--                                            <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>--}}
                                            {{--                                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>--}}
                                            {{--                                            <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
                        <div class="product-details-reviews mt-34">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                            </li>
                                            {{--                                            <li>--}}
                                            {{--                                                <a data-toggle="tab" href="#tab_two">information</a>--}}
                                            {{--                                            </li>--}}
                                            {{--                                            <li>--}}
                                            {{--                                                <a data-toggle="tab" href="#tab_three">reviews</a>--}}
                                            {{--                                            </li>--}}
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                                <div class="tab-one">
                                                    <p>{{ $product->short_description }}</p>
                                                    <br>
                                                    <p>{{ $product->long_description }}</p>
                                                    {{--           <div class="review-description">--}}
                                                    {{--           <div class="tab-thumb">--}}
                                                    {{--           <img--}}
                                                    {{--         src="{{ asset('galio/assets/img/about/services.jpg') }}"--}}
                                                    {{--         alt="">--}}
                                                    {{--          </div>--}}
                                                    {{--           <div class="tab-des mt-sm-24">--}}
                                                    {{--           <h3>Product Information :</h3>--}}
                                                    {{--           <ul>--}}
                                                    {{--           <li>Donec non est at libero vulputate rutrum.</li>--}}
                                                    {{--           <li>Morbi ornare lectus quis justo gravida semper.</li>--}}
                                                    {{--           <li>Pellentesque aliquet, sem eget laoreet ultrices</li>--}}
                                                    {{--           <li>Nulla tellus mi, vulputate adipiscing cursus eu,--}}
                                                    {{--    suscipit id nulla--}}
                                                    {{--          </li>--}}
                                                    {{--           <li>Donec a neque libero.</li>--}}
                                                    {{--           <li>Pellentesque aliquet, sem eget laoreet ultrices</li>--}}
                                                    {{--           <li>Morbi ornare lectus quis justo gravida semper.</li>--}}
                                                    {{--          </ul>--}}
                                                    {{--          </div>--}}
                                                    {{--          </div>--}}
                                                    {{--           <p>Cras neque metus, consequat et blandit et, luctus a nunc. Etiam--}}
                                                    {{--     gravida vehicula tellus, in imperdiet ligula euismod eget.--}}
                                                    {{--Pellentesque habitant morbi tristique senectus et netus et--}}
                                                    {{--   malesuada--}}
                                                    {{--       fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin--}}
                                                    {{--     rhoncus, ultricies posuere erat. Duis convallis, arcu nec--}}
                                                    {{--     aliquam--}}
                                                    {{--   consequat, purus felis vehicula felis, a dapibus enim lorem nec--}}
                                                    {{--       augue. Nunc facilisis sagittis ullamcorper.</p>--}}
                                                    {{--           <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut--}}
                                                    {{--      lectus.--}}
                                                    {{--         Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci--}}
                                                    {{--      luctus et ultrices posuere cubilia Curae; Aenean eleifend--}}
                                                    {{--     laoreet--}}
                                                    {{--      congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla--}}
                                                    {{--      luctus malesuada tincidunt.</p>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details reviews end -->

                    </div>

                    <!-- sidebar start -->
                    <div class="col-lg-3">
                        <div class="shop-sidebar-wrap fix mt-md-22 mt-sm-22">
                            <!-- featured category start -->
                            <div class="sidebar-widget mb-22">
                                <div class="section-title-2 d-flex justify-content-between mb-28">
                                    <h3>Best Seller</h3>
                                    <div class="category-append"></div>
                                </div> <!-- section title end -->
                                <div class="category-carousel-active row" data-row="4">
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="galio/product-details.html">
                                                    <img src="{{ asset('galio/assets/img/product/product-img1.jpg') }}"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="galio/product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="galio/product-details.html">
                                                    <img src="{{ asset('galio/assets/img/product/product-img2.jpg') }}"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="galio/product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="galio/product-details.html">
                                                    <img src="{{ asset('galio/assets/img/product/product-img3.jpg') }}"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="galio/product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="galio/product-details.html">
                                                    <img src="{{ asset('galio/assets/img/product/product-img4.jpg') }}"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="galio/product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="galio/product-details.html">
                                                    <img src="{{ asset('galio/assets/img/product/product-img5.jpg') }}"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="galio/product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="galio/product-details.html">
                                                    <img src="{{ asset('galio/assets/img/product/product-img6.jpg') }}"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="galio/product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="galio/product-details.html">
                                                    <img src="{{ asset('galio/assets/img/product/product-img10.jpg') }}"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="galio/product-details.html">simple Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="galio/product-details.html">
                                                    <img src="{{ asset('galio/assets/img/product/product-img12.jpg') }}"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="galio/product-details.html">external Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $140.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$160.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                </div>
                            </div>
                            <!-- featured category end -->

                            <!-- product tag start -->
                            {{--                            <div class="sidebar-widget mb-22">--}}
                            {{--                                <div class="sidebar-title mb-20">--}}
                            {{--                                    <h3>tag</h3>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="sidebar-widget-body">--}}
                            {{--                                    <div class="product-tag">--}}
                            {{--                                        <a href="#">camera</a>--}}
                            {{--                                        <a href="#">computer</a>--}}
                            {{--                                        <a href="#">tablet</a>--}}
                            {{--                                        <a href="#">watch</a>--}}
                            {{--                                        <a href="#">smart phones</a>--}}
                            {{--                                        <a href="#">handbag</a>--}}
                            {{--                                        <a href="#">shoe</a>--}}
                            {{--                                        <a href="#">men</a>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <!-- product tag end -->
                        </div>
                    </div>
                    <!-- sidebar end -->
                </div>
            </div>
        </div>
        <!-- product details wrapper end -->
    </div>

    <!-- Quick view modal start -->
    {{--    <div class="modal" id="quick_view">--}}
    {{--        <div class="modal-dialog modal-lg modal-dialog-centered">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header">--}}
    {{--                    <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    <!-- product details inner end -->--}}
    {{--                    <div class="product-details-inner">--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-lg-5">--}}
    {{--                                <div class="product-large-slider slick-arrow-style_2 mb-20">--}}
    {{--                                    <div class="pro-large-img">--}}
    {{--                                        <img src="{{ asset('galio/assets/img/product/product-details-img1.jpg') }}"--}}
    {{--                                             alt=""/>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-large-img">--}}
    {{--                                        <img src="{{ asset('galio/assets/img/product/product-details-img2.jpg') }}"--}}
    {{--                                             alt=""/>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-large-img">--}}
    {{--                                        <img src="{{ asset('galio/assets/img/product/product-details-img3.jpg') }}"--}}
    {{--                                             alt=""/>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-large-img">--}}
    {{--                                        <img src="{{ asset('galio/assets/img/product/product-details-img4.jpg') }}"--}}
    {{--                                             alt=""/>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-large-img">--}}
    {{--                                        <img src="{{ asset('galio/assets/img/product/product-details-img5.jpg') }}"--}}
    {{--                                             alt=""/>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="pro-nav slick-padding2 slick-arrow-style_2">--}}
    {{--                                    <div class="pro-nav-thumb"><img--}}
    {{--                                            src="{{ asset('galio/assets/img/product/product-details-img1.jpg') }}"--}}
    {{--                                            alt=""/></div>--}}
    {{--                                    <div class="pro-nav-thumb"><img--}}
    {{--                                            src="{{ asset('galio/assets/img/product/product-details-img2.jpg') }}"--}}
    {{--                                            alt=""/></div>--}}
    {{--                                    <div class="pro-nav-thumb"><img--}}
    {{--                                            src="{{ asset('galio/assets/img/product/product-details-img3.jpg') }}"--}}
    {{--                                            alt=""/></div>--}}
    {{--                                    <div class="pro-nav-thumb"><img--}}
    {{--                                            src="{{ asset('galio/assets/img/product/product-details-img4.jpg') }}"--}}
    {{--                                            alt=""/></div>--}}
    {{--                                    <div class="pro-nav-thumb"><img--}}
    {{--                                            src="{{ asset('galio/assets/img/product/product-details-img5.jpg') }}"--}}
    {{--                                            alt=""/></div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-lg-7">--}}
    {{--                                <div class="product-details-des mt-md-34 mt-sm-34">--}}
    {{--                                    <h3><a href="galio/product-details.html">external product 12</a></h3>--}}
    {{--                                    <div class="ratings">--}}
    {{--                                        <span class="good"><i class="fa fa-star"></i></span>--}}
    {{--                                        <span class="good"><i class="fa fa-star"></i></span>--}}
    {{--                                        <span class="good"><i class="fa fa-star"></i></span>--}}
    {{--                                        <span class="good"><i class="fa fa-star"></i></span>--}}
    {{--                                        <span><i class="fa fa-star"></i></span>--}}
    {{--                                        <div class="pro-review">--}}
    {{--                                            <span>1 review(s)</span>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="availability mt-10">--}}
    {{--                                        <h5>Availability:</h5>--}}
    {{--                                        <span>1 in stock</span>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pricebox">--}}
    {{--                                        <span class="regular-price">$160.00</span>--}}
    {{--                                    </div>--}}
    {{--                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod--}}
    {{--                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>--}}
    {{--                                        Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea--}}
    {{--                                        dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris--}}
    {{--                                        consequat nisi ut mauris efficitur lacinia.</p>--}}
    {{--                                    <div class="quantity-cart-box d-flex align-items-center mt-20">--}}
    {{--                                        <div class="quantity">--}}
    {{--                                            <div class="pro-qty"><input type="text" value="1"></div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="action_link">--}}
    {{--                                            <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i>--}}
    {{--                                            </a>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- product details inner end -->--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Quick view modal end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->
@endsection

@section('scripts')
@endsection
