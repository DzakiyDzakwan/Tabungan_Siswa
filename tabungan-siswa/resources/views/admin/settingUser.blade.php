@extends('layout.admin')

@section('title')
    <title>Setting User</title>
@endsection

@section('content')

    <!-- Konten -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Setting User</h3>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Setting User</h4>
                            <form action="/siswa/update-user" class="forms-sample" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input name="user_name" type="text" class="form-control form-control-lg" id="user_name" placeholder="{{auth()->user()->user_name}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control form-control-lg" id="user_name" placeholder="{{auth()->user()->email}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input name="password" type="password" class="form-control form-control-lg" id="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Password Confirm</label>
                                    <input name="password_confirmation" type="password" class="form-control form-control-lg" id="password_confirmation  " placeholder="Confirm Password" required>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit Edit</button>
                                <button type="reset" class="btn btn-danger light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Profil --}}
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Setting Profil</h4>
                          <form action="update-profil" class="forms-sample" method="POST">
                              @csrf
                              @method('PATCH')
                              <div class="form-group">
                                  <label for="nama">Nama Admin</label>
                                  <input name="nama" type="text" class="form-control form-control-lg" id="nama" placeholder="Nama Admin" required value="{{$profil['nama']}}">
                              </div>
                              <div class="form-group">
                                  <label for="pekerjaan">Pekerjaan</label>
                                  <input name="pekerjaan" type="text" class="form-control form-control-lg" id="pekerjaan" placeholder="Pekerjaan" value="{{$profil['pekerjaan']}}">
                              </div>
                              {{-- <div class="form-group">
                                  <label for="kelas">Kelas</label>
                                  <select name="kelas" class="form-control form-control-lg" id="kelas" required>
                                      @for ($i = 1; $i < 7; $i++)
                                          <option class="text-dark" value="{{$i}}">{{$i}}</option>
                                      @endfor
                                  </select>
                              </div> --}}

                              <button type="submit" class="btn btn-primary mr-2">Submit Edit</button>
                              <button type="reset" class="btn btn-danger light">Cancel</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
            
               

        </div>
    </div>

@endsection