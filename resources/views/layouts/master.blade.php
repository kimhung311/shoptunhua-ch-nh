<!DOCTYPE html>
<html lang="en">
<head>

  <title></title>
  <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Tủ Nhựa Đài Loan | Trang Chủ</title>

    <!-- Favicon  -->
    <link rel="icon" href="shop/img/core-img/favicon.ico">
@include('layouts.css')
</head>
<body>
      <div class="main-content-wrapper d-flex clearfix">

      {{-- INCLUDE FILE HEADER --}}
      {{-- END FILE HEADER --}}
  
  
          {{-- <div class="container"> --}}
              @yield('content')
          {{-- </div> --}}
      </div>
  
      {{-- INCLUDE FILE FOOTER --}}
            @include('layouts.footer')
      {{-- END FILE FOOTER --}}
  
  
      {{-- INCLUDE FILE JS --}}
            @include('layouts.js')
      {{-- END FILE JS --}}
  

  

</body>
</html>