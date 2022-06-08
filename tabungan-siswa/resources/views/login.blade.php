<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 shadow rounded">

              @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{ session('success') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

              @if (session()->has('loginfail'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{ session('loginfail') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

              @error('user_name')
              <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @enderror

              @error('password')
              <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @enderror

              <div class="brand-logo text-center">
                <img src="images/logo.png" alt="logo">
              </div>
              <h4 class="text-center"><strong>Hello! Selamat Menabung</strong></h4>
              <h6 class="font-weight-light text-center">Masuk untuk melanjutkan</h6>
              <form class="pt-3" action="/login" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" name="user_name" class="form-control form-control-lg" id="user_name" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control form-control-lg" id="password" placeholder="Password" required>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-lg btn-block btn-primary" type="submit">SIGN IN</button>
                </div>
               {{--  <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div> --}}
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account ? <a href="/register" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
  </div>

  @include('sweetalert::alert')
  
  <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
