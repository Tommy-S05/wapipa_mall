@extends('layouts.web')

@section('meta_description', '')

@section('title', 'Blog Details')

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
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">checkout</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- wishlist main wrapper start -->
        <div class="wishlist-main-wrapper">
            <div class="container">
                <!-- Wishlist Page Content Start -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Wishlist Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Stock Status</th>
                                    <th class="pro-subtotal">Add to Cart</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                                               src="{{ asset('galio/assets/img/product/product-img7.jpg') }}"
                                                                               alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">element snowboard</a></td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                    <td class="pro-subtotal"><a href="cart.html" class="sqr-btn text-white">Add to
                                            Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                                               src="{{ asset('galio/assets/img/product/product-img8.jpg') }}"
                                                                               alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">raygun snowboard</a></td>
                                    <td class="pro-price"><span>$275.00</span></td>
                                    <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                    <td class="pro-subtotal"><a href="cart.html" class="sqr-btn text-white">Add to
                                            Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                                               src="{{ asset('galio/assets/img/product/product-img9.jpg') }}"
                                                                               alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">berzerker snoeboard</a></td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-quantity"><span class="text-danger">Stock Out</span></td>
                                    <td class="pro-subtotal"><a href="cart.html" class="sqr-btn text-white disabled">Add
                                            to Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                                               src="{{ asset('galio/assets/img/product/product-img10.jpg') }}"
                                                                               alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">turbo snowboard</a></td>
                                    <td class="pro-price"><span>$110.00</span></td>
                                    <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                    <td class="pro-subtotal"><a href="cart.html" class="sqr-btn text-white">Add to
                                            Cart</a></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Wishlist Page Content End -->
            </div>
        </div>
        <!-- wishlist main wrapper end -->
    </div>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->
@endsection

@section('scripts')
@endsection
