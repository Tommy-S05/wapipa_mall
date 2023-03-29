<!-- Quick view modal start -->
<div class="modal" id="quick_view{{ $product->id }}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- product details inner end -->
                <div class="product-details-inner">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="product-large-slider slick-arrow-style_2 mb-20">
                                @foreach($product->images as $image)
                                    <div class="pro-large-img">
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
                        <div class="col-lg-7">
                            <div class="product-details-des mt-md-34 mt-sm-34">
                                <h3>
                                    <a href="{{ route('web.product_details', $product->slug) }}">{{ $product->name }}</a>
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
                                    <span class="regular-price">${{ number_format($product->sell_price, 2) }}</span>
                                </div>
                                <p>{{ $product->short_description }}</p>
                                <div class="quantity-cart-box d-flex align-items-center mt-20">
                                    <div class="quantity">
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </div>
                                    <div class="action_link">
                                        <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details inner end -->
            </div>
        </div>
    </div>
</div>
<!-- Quick view modal end -->
