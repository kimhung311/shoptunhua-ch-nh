   <!-- Search Wrapper Area Start -->
   <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="{{asset('shop/img/core-img/search.png')}}" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Search Wrapper Area End -->

<!-- ##### Main Content Wrapper Start ##### -->

    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="index.html"><img src="{{ asset('shop/img/core-img/logo.png') }}" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->
        <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('shop/img/core-img/logo.png') }}" alt=""></a>
        </div>
        <!-- Amado Nav -->
        @auth

            <div class="dropdown">
                <button class="dropbtn" ><span class="fa fa-user" style="color:yellow"> &nbsp;{{ Auth::user()->name }}</span></button>
                <div class="dropdown-content">
                    <a style="padding:5px ;color:yellow " type="submit" class="btn btn-info" href="{{ route('index') }}">Thong tin tai khoan</a>
                    <a style="padding:5px ;color:yellow" type="submit" class="btn btn-info"href="#">Doi mat khau</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <a style="padding:5px; color:yellow" type="submit" class="btn btn-info"><i class="fas fa-sign-out-alt"></i><span class="text" >&nbsp; Logout</span></a>

                     </form>
                </div>
            </div>
            <br><br><br>
        @endauth
        @guest
            <div class="login">
                <a href="{{ route('login') }}" class="btn btn-dark" value="Login" style="float: left;">Login</a>&nbsp;&nbsp;
                <a href="" class="btn btn-dark" value="Register" style="float: right;position: absolute;">Register</a>

            </div><br><br>
        @endguest
        
        <nav class="amado-nav">
            <ul>
                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('home.shopcategory',0) }}">Shop</a></li>
                <li><a href="product-details.html">Product</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
            </ul>
        </nav>
        <!-- Button Group -->
        <div class="amado-btn-group mt-30 mb-100">
            <a href="#" class="btn amado-btn mb-15">%Discount%</a>
            <a href="#" class="btn amado-btn active">New this week</a>
        </div>
        <!-- Cart Menu -->
        <div class="cart-fav-search mb-100">
            <a href="cart.html" class="cart-nav"><img src="{{asset('shop/img/core-img/cart.png')}}" alt=""> Cart <span>(0)</span></a>
            <a href="#" class="fav-nav"><img src="{{asset('shop/img/core-img/favorites.png')}}" alt=""> Favourite</a>
            <a href="#" class="search-nav"><img src="{{asset('shop/img/core-img/search.png')}}" alt=""> Search</a>
        </div>
        <!-- Social Button -->
        <div class="social-info d-flex justify-content-between">
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    </header>
    <!-- Header Area End -->
    @push('css')
    <style>
        .dropbtn {
            border-radius:40%;
          background-color: #3b8baa;
          color: white;
          padding: 5px;
          font-size: 16px;
          border: none;
        }
        
        .dropdown {
          /* background-color: #04AA6D; */

          position: relative;
          display: inline-block;
        }
        
        .dropdown-content {
            border-radius: 15%;
            z-index:1000;
            position: absolute;
            display: none;
          position: absolute;
          background-color: #3b8baa;
          min-width: 170px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }
        
        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }
        
        .dropdown-content a:hover {background-color: #ddd;}
        
        .dropdown:hover .dropdown-content {display: block;}
        
        .dropdown:hover .dropbtn {background-color: #3b8baa;}
        </style>
    @endpush
