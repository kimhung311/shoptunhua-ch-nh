       <!-- HEADER MOBILE-->
  <header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="{{ asset('admin_ite/images/icon/logo.png') }}" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="index.html">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.html">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="index3.html">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Tables</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Forms</a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="button.html">Button</a>
                        </li>
                        <li>
                            <a href="badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->


  <!-------------------------------------------------------------------------------------------------->
     <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('admin_ite/images/icon/logo.png') }}" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-h-square fa-2x" aria-hidden="true"></i>
                            Trang Chủ</a>
                        {{-- <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="index2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="index3.html">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="index4.html">Dashboard 4</a>
                            </li>
                        </ul> --}}
                    </li>
                    <li>
                        <a class="js-arrow" href="{{ route('admin.category.index') }}" >
                            <i class="fa fa-list fa-2x" aria-hidden="true"></i>
                        </i>Danh Mục Sản Phẩm </a><i class="fas fa-arrow-to-bottom"></i>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{  route('admin.category.index') }}">Danh Sách Sản phẩm </a>
                                </li>
                               
                                <li>
                                    <a href="{{ route('admin.category.create') }}">Tạo Mới </a>
                                </li>
                               
                            </ul>    
                       
                    </li>

                    <li>
                        <a class="js-arrow" href="{{ route('admin.product.index') }}" >
                            <i class="fa fa-table fa-2x" aria-hidden="true"></i>
                            Sản Phẩm </a><i class="fas fa-arrow-to-bottom"></i>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('admin.product.index') }}">Danh Sách Sản Phẩm </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.product.create') }}">Tạo Mới </a>
                                </li>
                               
                            </ul>    
                        </a>
                    </li>
                    
                    <li>
                        <a class="js-arrow" href="{{ route('admin.order.index') }}" >
                            <i class="fa fa-balance-scale fa-2x" aria-hidden="true"></i>
                            Đơn Hàng </a><i class="fas fa-arrow-to-bottom"></i>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                   <li>
                                    <a href="{{ route('admin.order.index') }}"> Danh Sách Đơn Hàng </a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('admin.product.create') }}">Tạo Mới </a>
                                </li> --}}

                                
                            </ul>    
                        </a>
                    </li>

                    <li>
                        <a class="js-arrow" href="{{ route('admin.user.index') }}" >
                            <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                            Tài Khoản Admin </a><i class="fas fa-arrow-to-bottom"></i>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('admin.user.index') }}">Danh Sách Tài Khoản Admin </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.user.create') }}">Tạo Mới </a>
                                </li>
                               
                            </ul>    
                        </a>
                    </li>

                    <li>
                        <a class="js-arrow" href="{{ route('admin.customer.index') }}" >
                            <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                            Tài Khoản Người Dùng </a><i class="fas fa-arrow-to-bottom"></i>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('admin.customer.index') }}">Danh Sách Tài Khoản Người Dùng </a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('admin.customer.create') }}">Tạo Mới </a>
                                </li> --}}
                               
                            </ul>    
                        </a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fas fa-table"></i>Tables</a>
                    </li>
                    <li>
                        <a href="form.html">
                            <i class="far fa-check-square"></i>Forms</a>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="fas fa-calendar-alt"></i>Calendar</a>
                    </li>
                    <li>
                        <a href="map.html">
                            <i class="fas fa-map-marker-alt"></i>Maps</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Pages</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>UI Elements</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="button.html">Button</a>
                            </li>
                            <li>
                                <a href="badge.html">Badges</a>
                            </li>
                            <li>
                                <a href="tab.html">Tabs</a>
                            </li>
                            <li>
                                <a href="card.html">Cards</a>
                            </li>
                            <li>
                                <a href="alert.html">Alerts</a>
                            </li>
                            <li>
                                <a href="progress-bar.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="modal.html">Modals</a>
                            </li>
                            <li>
                                <a href="switch.html">Switchs</a>
                            </li>
                            <li>
                                <a href="grid.html">Grids</a>
                            </li>
                            <li>
                                <a href="fontawesome.html">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href="typo.html">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
              
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->
