@extends('layouts.master')
@section('content')
@include('layouts.header')

{{-- set page title --}}
    @section('title', $product->name)

    {{-- @section('content') --}}
    <div class="single-product-area section-padding-100 clearfix">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-50">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Shop</a></li>
                            <li class="breadcrumb-item"><a href="#">Product_detail</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                            
                            <ol class="carousel-indicators">
                                @foreach ($product->product_images as $item)
                                {{-- <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url({{ asset('/'.$item->url) }});">
                                </li> --}}
                                {{-- <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url({{ asset('/'.$item->url) }});"></li> --}}
                                {{-- <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(/);"></li>
                                <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url('/');"></li> --}}
                                @endforeach
                            </ol>
                        
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="gallery_img" href="{{ asset($product->image) }}">
                                        <img class="d-block w-100" src="{{ asset($product->image) }}" alt="First slide">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_product_desc">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">{{ $product->price }}</p>
                            <a href="product-details.html">
                                <h6>{{ $product->name }}</h6>
                            </a>
                            <!-- Ratings & Review -->
                            <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="review">
                                    <a href="#">Write A Review</a>
                                </div>
                            </div>
                            <!-- Avaiable -->
                         
                            <p class="product-comment">
                                <span    class="avaibility"><i class="fa fa-circle"></i> Còn hàng</span>
                                <br>
                                @if ($product->quantity <= 0)
                                    <span class="text-danger">Out of stock</span>
                                @else
                                    <span>Số Lượng: {{ $product->quantity }}</span>
                                @endif
                            </p>
                        </div>

                        <div class="short_overview my-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?</p>
                        </div>

                        <!-- Add to Cart Form -->
                        <form  action="{{ route('cart.addcart',$product->id) }}" method="post" class="cart clearfix">
                            @csrf
                            <div class="cart-btn d-flex mb-50">
                                <p>Qty</p>
                                <div class="quantity" required>
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text invalid    " id="qty" step="1" min="1"   max="{{ $product->quantity }}" value="1"  name="quantity" required  >
                                    {{-- <input type="number" class="qty-text invalid    " name="quantity"value="1" step="1" min="0" max="{{ $product->quantity}}" required="invalid"> --}}
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <button type="submit"  class=" amado-btn">Add to cart</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
 
@endpush

@push('js')
     <script src="https://ajax.googleapis.com/ajax/">
    input.addEventListener('invalid', function(event){
        event.preventDefault();
        if ( ! event.target.validity.valid ) {
            elem.textContent   = 'Username should only contain lowercase letters e.g. john';
            elem.className     = 'error';
            elem.style.display = 'block';

            input.className    = 'invalid animated shake';
        }
    });
    </script>

@endpush
