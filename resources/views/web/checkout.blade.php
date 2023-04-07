@extends('layouts.web')

@section('meta_description', '')

@section('title', 'CheckOut')

@section('styles')
    {{--    @vite(['resources/css/card.css'])--}}
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
                                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- checkout main wrapper start -->
        <div class="checkout-page-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Checkout Login Coupon Accordion Start -->
                        {{--                        <div class="checkoutaccordion" id="checkOutAccordion">--}}
                        {{--                            <div class="card">--}}
                        {{--                                <h3>Returning Customer? <span data-toggle="collapse" data-target="#logInaccordion">Click Here To Login</span>--}}
                        {{--                                </h3>--}}

                        {{--                                <div id="logInaccordion" class="collapse" data-parent="#checkOutAccordion">--}}
                        {{--                                    <div class="card-body">--}}
                        {{--                                        <p>If you have shopped with us before, please enter your details in the boxes--}}
                        {{--                                            below. If you are a new customer, please proceed to the Billing &amp;--}}
                        {{--                                            Shipping section.</p>--}}
                        {{--                                        <div class="login-reg-form-wrap mt-20">--}}
                        {{--                                            <div class="row">--}}
                        {{--                                                <div class="col-lg-7 m-auto">--}}
                        {{--                                                    <form action="#" method="post">--}}
                        {{--                                                        <div class="row">--}}
                        {{--                                                            <div class="col-md-12">--}}
                        {{--                                                                <div class="single-input-item">--}}
                        {{--                                                                    <input type="email" placeholder="Enter your Email"--}}
                        {{--                                                                           required/>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </div>--}}

                        {{--                                                            <div class="col-md-12">--}}
                        {{--                                                                <div class="single-input-item">--}}
                        {{--                                                                    <input type="password"--}}
                        {{--                                                                           placeholder="Enter your Password" required/>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </div>--}}
                        {{--                                                        </div>--}}

                        {{--                                                        <div class="single-input-item">--}}
                        {{--                                                            <div--}}
                        {{--                                                                class="login-reg-form-meta d-flex align-items-center justify-content-between">--}}
                        {{--                                                                <div class="remember-meta">--}}
                        {{--                                                                    <div class="custom-control custom-checkbox">--}}
                        {{--                                                                        <input type="checkbox"--}}
                        {{--                                                                               class="custom-control-input"--}}
                        {{--                                                                               id="rememberMe" required/>--}}
                        {{--                                                                        <label class="custom-control-label"--}}
                        {{--                                                                               for="rememberMe">Remember Me</label>--}}
                        {{--                                                                    </div>--}}
                        {{--                                                                </div>--}}

                        {{--                                                                <a href="#" class="forget-pwd">Forget Password?</a>--}}
                        {{--                                                            </div>--}}
                        {{--                                                        </div>--}}

                        {{--                                                        <div class="single-input-item">--}}
                        {{--                                                            <button class="check-btn sqr-btn">Login</button>--}}
                        {{--                                                        </div>--}}
                        {{--                                                    </form>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="card">--}}
                        {{--                                <h3>Have A Coupon? <span data-toggle="collapse" data-target="#couponaccordion">Click Here To Enter Your Code</span>--}}
                        {{--                                </h3>--}}
                        {{--                                <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">--}}
                        {{--                                    <div class="card-body">--}}
                        {{--                                        <div class="cart-update-option">--}}
                        {{--                                            <div class="apply-coupon-wrapper">--}}
                        {{--                                                <form action="#" method="post" class=" d-block d-md-flex">--}}
                        {{--                                                    <input type="text" placeholder="Enter Your Coupon Code" required/>--}}
                        {{--                                                    <button class="check-btn sqr-btn">Apply Coupon</button>--}}
                        {{--                                                </form>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <!-- Checkout Login Coupon Accordion End -->
                    </div>
                </div>

                <form action="#">
                    <div class="row">
                        <!-- Checkout Billing Details -->
                        <div class="col-lg-6">
                            <div class="checkout-billing-details-wrap">
                                <h2>Billing Details</h2>
                                <div class="billing-form-wrap">
                                    <div class="single-input-item">
                                        <label for="name" class="required">Full Name</label>
                                        <input type="text" id="name" placeholder="Full Name" required/>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="email" class="required">Email Address</label>
                                        <input type="email" id="email" placeholder="Email Address" required/>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="city" class="required">City</label>
                                        <input type="text" id="city" placeholder="City"
                                               required/>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="street-address" class="required">Street address</label>
                                        <input type="text" id="street-address" placeholder="Street address Line 1"
                                               required/>
                                    </div>

                                    <div class="single-input-item">
                                        <input type="text" placeholder="Street address Line 2 (Optional)"/>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="postcode" class="required">Postcode / ZIP</label>
                                        <input type="text" id="postcode" placeholder="Postcode / ZIP" required/>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="phone">Phone</label>
                                        <input type="text" id="phone" placeholder="Phone"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Order Summary Details -->
                        <div class="col-lg-6">
                            <div class="order-summary-details mt-md-26 mt-sm-26">
                                <h2>Your Order Summary</h2>
                                <div class="order-summary-content mb-sm-4">
                                    <!-- Order Summary Table -->
                                    <div class="order-summary-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Products</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($shopping_cart->getDetails()->items as $item)
                                                <tr>
                                                    <td>
                                                        <a href="single-product.html">{{ $item->title }}
                                                            <strong> ×
                                                                {{ $item->quantity }}
                                                            </strong>
                                                        </a>
                                                    </td>
                                                    <td>${{ number_format($item->total_price, 2) }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td>
                                                    <strong>${{ number_format($shopping_cart->getSubtotal(), 2) }}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount</td>
                                                <td>
                                                    <strong>${{ number_format($shopping_cart->getSubtotal(), 2) }}</strong>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- Order Payment Method -->
                                    <div class="order-payment-method">
                                        <div class="single-payment-method show">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="cashon" name="paymentmethod" value="cash"
                                                           class="custom-control-input" checked/>
                                                    <label class="custom-control-label" for="cashon">Cash On
                                                        Delivery</label>
                                                </div>
                                            </div>
                                            <div class="payment-method-details" data-method="cash">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </div>

                                        <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="paypalpayment" name="paymentmethod"
                                                           value="paypal" class="custom-control-input"/>
                                                    <label class="custom-control-label" for="paypalpayment">Paypal <img
                                                            src="{{ asset('galio/assets/img/paypal-card.jpg') }}"
                                                            class="img-fluid paypal-card"
                                                            alt="Paypal"/></label>
                                                </div>
                                            </div>
                                            <div class="payment-method-details" data-method="paypal">
                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                    PayPal account.</p>
                                            </div>
                                        </div>

                                        <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="checkpayment" name="paymentmethod"
                                                           value="check"
                                                           class="custom-control-input"/>
                                                    <label class="custom-control-label" for="checkpayment">Credit/Debit
                                                        Card <img
                                                            src="{{ asset('galio/assets/img/paypal-card.jpg') }}"
                                                            class="img-fluid paypal-card"
                                                            alt="Paypal"/></label>
                                                </div>
                                            </div>
                                            <div class="payment-method-details" data-method="check">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store
                                                    State
                                                    / County, Store Postcode.</p>
                                            </div>
                                        </div>

                                        <div class="summary-footer-area">
                                            <div class="custom-control custom-checkbox mb-14">
                                                {{--                                                <input type="checkbox" class="custom-control-input" id="terms"--}}
                                                {{--                                                       required/>--}}
                                                {{--                                                <label class="custom-control-label" for="terms">I have read and agree to--}}
                                                {{--                                                    the--}}
                                                {{--                                                    website <a--}}
                                                {{--                                                        href="#">terms and conditions.</a></label>--}}
                                                {{--                                            </div>--}}
                                                @if($shopping_cart->countItems() > 0)
                                                    <button type="submit" class="check-btn sqr-btn">Place Order</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- checkout main wrapper end -->
    </div>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->
@endsection

@section('scripts')
    {{--    @vite(['resources/js/card.js'])--}}
@endsection
