@extends('layouts.master')
@section('content')
@include('layouts.header')
<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Shopping Cart</h2>
                </div>

                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th >Quantity</th>
                                <th>Total</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $item)
                                
                            <tr>
                                <td class="cart_product_img">
                                    <a href="#"><img src="{{ $item['image'] }}" alt="Product"></a>
                                </td>
                                <td class="cart_product_desc">
                                    <h5>{{ $item['name'] }}</h5>
                                </td>
                                <td class="price">
                                    <span>{{ $item['price'] }}</span>
                                </td>
                                <td class="qty">
                                    <div class="qty-btn d-flex">
                                        <p>Qty</p>
                                        <div class="quantity">
                                            <span class="qty-minus" onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;" require><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" class="qty-text" id="qty3" step="1" min="1" max="300" name="quantity" value="{{ $item['quantity'] }}">
                                            <span class="qty-plus" onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;" require><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cart-money">
                                        @php
                                            $money = $item['quantity'] * $item['price'];
                                            echo number_format($money) . ' VND';
                                        @endphp
                                    </div>
                                </td>
                                <td>
                                    <a href=""><i class="fa fa-remove fa-2x"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="cart-summary">
                    <h5>Cart Total</h5>
                    <ul class="summary-table">
                        <li><span>subtotal:</span> <span>$140.00</span></li>
                        <li><span>delivery:</span> <span>Free</span></li>
                        <li><span>total:</span> <span>$140.00</span></li>
                    </ul>
                    <div class="cart-btn mt-100">
                        <a href="cart.html" class="btn amado-btn w-100">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
