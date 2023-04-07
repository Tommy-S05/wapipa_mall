<div class="header-mini-cart">
    <div class="mini-cart-btn">
        <i class="fa fa-shopping-cart"></i>
        <span class="cart-notification">{{ $shopping_cart->countItems() }}</span>
    </div>
    <div class="cart-total-price">
        <span>subtotal</span>
        ${{ number_format($shopping_cart->getSubtotal(), 2) }}
    </div>
    <ul class="cart-list">
        @foreach($shopping_cart->getDetails()->items as $item)
            <li>
                <div class="cart-img">
                    <a href="#">
                        <img src="{{ asset($item->extra_info->url) }}" alt="{{ $item->title }}">
                    </a>
                </div>
                <div class="cart-info">
                    <h4><a href="#">{{ $item->title }}</a></h4>
                    <span>${{ number_format($item->total_price, 2) }}</span>
                </div>
                <div class="del-icon">
                    <form id="delete_cart_mini_{{$item->hash}}"
                          action="{{ route('web.delete_cart') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="hash" value="{{ $item->hash }}">
                    </form>
                    <a onclick="javascript:document.getElementById(`delete_cart_mini_{{$item->hash}}`).submit(); return false;"
                       href="#" style="color: black"><i class="fa fa-times"></i></a>
                </div>
            </li>
        @endforeach
        {{--        <li>--}}
        {{--            <div class="cart-img">--}}
        {{--                <a href="galio/product-details.html"><img--}}
        {{--                        src="{{ asset('galio/assets/img/cart/cart-1.jpg') }}"--}}
        {{--                        alt=""></a>--}}
        {{--            </div>--}}
        {{--            <div class="cart-info">--}}
        {{--                <h4><a href="galio/product-details.html">Nombre</a></h4>--}}
        {{--                <span>$60.00</span>--}}
        {{--            </div>--}}
        {{--            <div class="del-icon">--}}
        {{--                <i class="fa fa-times"></i>--}}
        {{--            </div>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <div class="cart-img">--}}
        {{--                <a href="galio/product-details.html"><img--}}
        {{--                        src="{{ asset('galio/assets/img/cart/cart-2.jpg') }}"--}}
        {{--                        alt=""></a>--}}
        {{--            </div>--}}
        {{--            <div class="cart-info">--}}
        {{--                <h4><a href="galio/product-details.html">virtual product 10</a></h4>--}}
        {{--                <span>$50.00</span>--}}
        {{--            </div>--}}
        {{--            <div class="del-icon">--}}
        {{--                <i class="fa fa-times"></i>--}}
        {{--            </div>--}}
        {{--        </li>--}}
        <li class="mini-cart-price">
            <span class="subtotal">subtotal : </span>
            <span class="subtotal-price">${{ number_format($shopping_cart->getSubtotal(), 2) }}</span>
        </li>
        <li class="checkout-btn">
            <a href="{{ route('web.checkout') }}">checkout</a>
        </li>
    </ul>
</div>
