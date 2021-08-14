<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>ADMIN|QUẢN LÝ SẢN PHẨM</title>
    <!-- Favicon icon -->
    <link href="admin_ite/css/theme.css" rel="stylesheet" media="all">
    @include('admin.layouts.css')
</head>

<body>
      <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <div class="page-wrapper">
        
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            @include('admin.layouts.header')
         </header>
         <!-- HEADER DESKTOP-->

      <!-- Left Sidebar - style you can find in sidebar.scss  -->
          @include('admin.layouts.sidebar')
          <!-- endsidebar -->
       <!-- Page wrapper  -->
          <!-- ============================================================== -->
        <div class="page-container">
          @yield('content')
        </div>
        
              <!-- ============================================================== -->
              <!-- Bread crumb and right sidebar toggle -->    
          {{-- @include('admin.layouts.footer') --}}
          @include('admin.layouts.js')
    </div>
</body>

</html>