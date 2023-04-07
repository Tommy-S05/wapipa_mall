@extends('layouts.web')

@section('meta_description', '')

@section('title', 'Cart')

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
                                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($shopping_cart->getDetails()->items as $item)
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                                                   src="{{ asset($item->extra_info->url) }}"
                                                                                   alt="{{ $item->title }}"/></a></td>
                                        <td class="pro-title"><a href="#">{{ $item->title }}</a></td>
                                        <td class="pro-price"><span>${{ number_format($item->price, 2) }}</span></td>
                                        <form id="upadate_cart_{{$item->hash}}" action="{{ route('web.update_cart') }}"
                                              method="POST">
                                            @csrf
                                            @method('PUT')
                                            <td class="pro-quantity">
                                                <input type="hidden" name="hash" value="{{ $item->hash }}">
                                                <div class="pro-qty"><input type="text" name="quantity"
                                                                            value="{{ $item->quantity }}">
                                                </div>
                                            </td>
                                        </form>

                                        <td class="pro-subtotal">
                                            <span>${{ number_format($item->total_price, 2) }}</span></td>
                                        <td class="pro-remove">
                                            <div class="cart-update mt-sm-16 mb-3">
                                                <a onclick="javascript:document.getElementById(`upadate_cart_{{$item->hash}}`).submit(); return false;"
                                                   href="#" class="sqr-btn" style="color: white">Update</a>
                                            </div>
                                            <div class="cart-update mt-sm-16 mb-3">
                                                <form id="delete_cart_{{$item->hash}}"
                                                      action="{{ route('web.delete_cart') }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="hash" value="{{ $item->hash }}">
                                                </form>
                                                <a onclick="javascript:document.getElementById(`delete_cart_{{$item->hash}}`).submit(); return false;"
                                                   href="#" class="sqr-btn" style="color: white">Delete</a>
                                            </div>
                                            {{--                                            <a href="#"><i class="fa fa-trash-o"></i>--}}
                                            {{--                                            </a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Cart Update Option -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">
                                {{--                                <form action="#" method="post" class=" d-block d-md-flex">--}}
                                {{--                                    <input type="text" placeholder="Enter Your Coupon Code" required/>--}}
                                {{--                                    <button class="sqr-btn">Apply Coupon</button>--}}
                                {{--                                </form>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h3>Cart Totals</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>${{ number_format($shopping_cart->getSubtotal(), 2) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>Free</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">
                                                ${{ number_format($shopping_cart->getSubtotal(), 2) }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="{{ route('web.checkout') }}" class="sqr-btn d-block">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
    </div>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->
@endsection

@section('scripts')
@endsection
