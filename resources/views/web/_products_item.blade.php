<div class="col-lg-4 col-md-4 col-sm-6">
    <!-- product single grid item start -->
    <div class="product-item fix mb-30">
        <div class="product-thumb">
            <a href="{{ route('web.product_details', $product->slug) }}">
                <img src="{{ asset($product->images->pluck('url')[0]) }}"
                     class="img-pri" alt="">
                @if(isset($product->images->pluck('url')[1]))
                    <img src="{{ asset($product->images->pluck('url')[1]) }}"
                         class="img-sec" alt="">
                @endif
            </a>
            <div class="product-action-link">
                <a href="#" data-toggle="modal" data-target="#quick_view{{ $product->id }}"> <span
                        data-toggle="tooltip" data-placement="left"
                        title="Quick view"><i
                            class="fa fa-search"></i></span> </a>
                <a href="#" data-toggle="tooltip" data-placement="left"
                   title="Wishlist"><i
                        class="fa fa-heart-o"></i></a>
                <form id="add_cart_1_{{$product->id}}" action="{{ route('web.add_cart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_slug" value="{{ $product->slug }}">
                    <input type="hidden" name="quantity" value="1">
                </form>
                <a onclick="javascript:document.getElementById(`add_cart_1_{{$product->id}}`).submit(); return false;"
                   href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                        class="fa fa-shopping-cart"></i></a>
            </div>
        </div>
        <div class="product-content">
            <h4><a href="{{ route('web.product_details', $product->slug) }}">{{ $product->name }}</a></h4>
            <div class="pricebox">
                <span class="regular-price">${{ number_format($product->sell_price, 2) }}</span>
            </div>
        </div>
    </div>
    <!-- product single grid item end -->
    <!-- product single list item start -->
    <div class="product-list-item mb-30">
        <div class="product-thumb">
            <a href="{{ route('web.product_details', $product->slug) }}">
                <img src="{{ asset($product->images->pluck('url')[0]) }}"
                     class="img-pri" alt="">
                @if(isset($product->images->pluck('url')[1]))
                    <img src="{{ asset($product->images->pluck('url')[1]) }}"
                         class="img-sec" alt="">
                @endif
            </a>
        </div>
        <div class="product-list-content">
            <h3><a href="{{ route('web.product_details', $product->slug) }}">{{ $product->name }}</a></h3>
            <div class="pricebox">
                <span class="regular-price">${{ number_format($product->sell_price, 2) }}</span>
            </div>
            <p>{{ $product->short_description }}</p>
            <div class="product-list-action-link">
                <form id="add_cart_2_{{$product->id}}" action="{{ route('web.add_cart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_slug" value="{{ $product->slug }}">
                    <input type="hidden" name="quantity" value="1">
                </form>
                <a class="buy-btn"
                   onclick="javascript:document.getElementById(`add_cart_2_{{$product->id}}`).submit(); return false;"
                   href="#" data-toggle="tooltip"
                   data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i>
                </a>

                <a href="#" data-toggle="modal" data-target="#quick_view{{ $product->id }}"> <span
                        data-toggle="tooltip" data-placement="top" title="Quick view"><i
                            class="fa fa-search"></i></span> </a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist">
                    <i class="fa fa-heart-o"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- product single list item start -->
</div> <!-- product single column end -->

@include('web._modal_quick_view')
