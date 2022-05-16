@extends('layout.master')

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
                            <h4 class="card-title">Setting</h4>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="nis" placeholder="NIS (Nomor Induk Siswa)" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="nama" placeholder="Nama Siswa" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-lg" id="kelas" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password" placeholder="Confirm Password" required>
                                </div>

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