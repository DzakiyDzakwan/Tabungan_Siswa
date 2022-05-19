<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Daftar</title>
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

            @if (auth()->user()->role === 'siswa')
                

            <div class="auth-form-light text-left py-5 px-4 px-sm-5 shadow rounded">

              {{--  Alerts --}}

              @error('nama')
              <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @enderror
              
              @error('NIS')
              <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @enderror


              <div class="brand-logo text-center">
                <img src="images/logo.png" alt="logo">
              </div>
              <h4 class="text-center fw-black"><strong>Anda Belum Punya Profil</strong></h4>
              <h6 class="font-weight-medium text-center">Isi Dulu Dong</h6>
              <form class="pt-3" action="/daftar" method="POST">
                
                @csrf

                <div class="form-group">
                  <input name="NIS" type="text-disabled" class="form-control form-control-lg" id="NIS" placeholder="NIS" required>
                </div>

                <div class="form-group">
                  <input name="nama" type="text-disabled" class="form-control form-control-lg" id="nama" placeholder="Full Name" required>
                </div>
                
                <div class="form-group">
                  <select name="kelas" class="form-control form-control-lg font-weight-medium" id="kelas" required>
                    @for ($i = 1; $i < 7; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                  </select>
                </div>

                <div class="mt-3">
                  <button type="submit" class="btn btn-lg btn-block btn-primary" type="submit">Daftar</button>
                </div>
              </form>

              <form action="/logout" method="POST">
                @csrf
                <div class="mt-3">
                  <button type="submit" class="btn btn-lg btn-block btn-danger" type="submit">LOG OUT</button>
                </div>
              </form>

            </div>

            @else

            <div class="auth-form-light text-left py-5 px-4 px-sm-5 shadow rounded">

              {{--  Alerts --}}

              @error('nama')
              <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @enderror

              @error('pekerjaan')
              <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @enderror


              <div class="brand-logo text-center">
                <img src="images/logo.png" alt="logo">
              </div>
              <h4 class="text-center fw-black"><strong>Anda Belum Punya Profil</strong></h4>
              <h6 class="font-weight-medium text-center">Isi Dulu Dong</h6>
              <form class="pt-3" action="/daftar" method="POST">
                
                @csrf

                <div class="form-group">

                  <div class="form-group">
                    <input name="nama" type="text-disabled" class="form-control form-control-lg" id="nama" placeholder="Full Name" required>
                  </div>

                  <input name="pekerjaan" type="text-disabled" class="form-control form-control-lg" id="pekerjaan" placeholder="Pekerjaan" required>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-lg btn-block btn-primary" type="submit">SIGN UP</button>
                </div>
              </form>

              <form action="/logout" method="POST">
                @csrf
                <div class="mt-3">
                  <button type="submit" class="btn btn-lg btn-block btn-danger" type="submit">LOG OUT</button>
                </div>
              </form>
            </div>

            @endif
            
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
</body>

</html>
