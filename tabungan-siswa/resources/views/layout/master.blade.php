<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @yield('title')
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  @yield('style')
  
  <link rel="stylesheet" href="{{asset('mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  <div class="container-scroller">
    
    @include('components.navbar')
    
    <div class="container-fluid page-body-wrapper">
      
     @include('components.sidebar')

      <!-- Konten -->
      @yield('content')
    
  </div>
  

  <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  @yield('script')
  
</body>

</html>

