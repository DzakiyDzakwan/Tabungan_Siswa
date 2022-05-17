<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 shadow rounded">
              <div class="brand-logo text-center">
                <img src="images/logo.png" alt="logo">
              </div>
              <h4 class="text-center fw-black"><strong>Mau Nabung Online ?</strong></h4>
              <h6 class="font-weight-light text-center">Daftar Dulu Dong</h6>
              <form class="pt-3">
                <div class="form-group">
                  <input name="nama" type="text-disabled" class="form-control form-control-lg" id="nama" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                  <input name="username" type="text" class="form-control form-control-lg" id="username" placeholder="Username" required>
                </div>
                {{-- <div class="form-group">
                  <select class="form-control form-control-lg" id="kelas" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div> --}}
                <div class="form-group">
                  <input name="password" type="password" class="form-control form-control-lg" id="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <input name="confirmpassword" type="password" class="form-control form-control-lg" id="password" placeholder="Confirm Password" required>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-lg btn-block btn-primary" type="submit">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="/" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  
</body>

</html>
