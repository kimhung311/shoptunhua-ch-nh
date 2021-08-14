@extends('layouts.master')
@section('content')
@include('layouts.header')
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
                @foreach ($categories as $item)
                    <!-- Single Catagory -->
                    <div class="single-products-catagory clearfix">
                        <a href="{{ url('home/shop/'.$item->id) }}">
                            <img src="{{$item->thumbnail }}"   alt="">
                            <!-- Hover Content -->
                            <div class="hover-content">
                                <div class="line"></div>
                                <p>From $180</p>
                                <h4>{{ $item->name }}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach 

        </div>
    </div>
@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('shop/css/core-style.css') }}">

@endpush

@push('js')

@endpush
