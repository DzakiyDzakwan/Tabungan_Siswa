<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @yield('title')
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  
  <link rel="stylesheet" href="{{asset('mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  @yield('header-tambahan')
</head>
<body>
  <div class="container-scroller">
    
    @include('components.navbaradmin')
    
    <div class="container-fluid page-body-wrapper">
      
     @include('components.sidebaradmin')

      <!-- Konten -->
      @yield('content')
    
  </div>
  

  <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="js/custom.js"></script>
  @yield('upload')
  
</body>

</html>

