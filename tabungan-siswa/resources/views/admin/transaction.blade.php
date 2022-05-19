@extends('layout.admin')

@section('title')
    <title>Transaction</title>
@endsection

@section('style')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
      color: #566787;
      background: #f5f5f5;
      font-family: 'Roboto', sans-serif;
  }
  .table-responsive {
      margin: 30px 0;
  }
  .table-wrapper {
      min-width: 1000px;
      background: #fff;
      padding: 20px;
      box-shadow: 0 1px 1px rgba(0,0,0,.05);
  }
  .table-title {
      padding-bottom: 10px;
      margin: 0 0 10px;
      min-width: 100%;
  }
  .table-title h2 {
      margin: 8px 0 0;
      font-size: 22px;
  }
  .search-box {
      position: relative;        
      float: right;
  }
  .search-box input {
      height: 34px;
      border-radius: 20px;
      padding-left: 35px;
      border-color: #ddd;
      box-shadow: none;
  }
  .search-box input:focus {
      border-color: #3FBAE4;
  }
  .search-box i {
      color: #a0a5b1;
      position: absolute;
      font-size: 19px;
      top: 8px;
      left: 10px;
  }
  table.table tr th, table.table tr td {
      border-color: #e9e9e9;
  }
  table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
  }
  table.table-striped.table-hover tbody tr:hover {
      background: #f5f5f5;
  }
  table.table th i {
      font-size: 13px;
      margin: 0 5px;
      cursor: pointer;
  }
  table.table td:last-child {
      width: 130px;
  }
  table.table td a {
      color: #a0a5b1;
      display: inline-block;
      margin: 0 5px;
  }
  table.table td a.view {
      color: #03A9F4;
  }
  table.table td a.edit {
      color: #FFC107;
  }
  table.table td a.delete {
      color: #E34724;
  }
  table.table td i {
      font-size: 19px;
  }    
  .pagination {
      float: right;
      margin: 0 0 5px;
  }
  .pagination li a {
      border: none;
      font-size: 95%;
      width: 30px;
      height: 30px;
      color: #999;
      margin: 0 2px;
      line-height: 30px;
      border-radius: 30px !important;
      text-align: center;
      padding: 0;
  }
  .pagination li a:hover {
      color: #666;
  }	
  .pagination li.active a {
      background: #03A9F4;
  }
  .pagination li.active a:hover {        
      background: #0397d6;
  }
  .pagination li.disabled i {
      color: #ccc;
  }
  .pagination li i {
      font-size: 16px;
      padding-top: 6px
  }
  .hint-text {
      float: left;
      margin-top: 6px;
      font-size: 95%;
  }    
</style>
@endsection
@section('content')

<!-- Modal -->

{{-- Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Transaction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{{-- Edit Modal End --}}

{{-- Transaction Modal --}}
<div class="modal fade" id="transaction" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Transaction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/transaction/create" method="post">
        @csrf
        <div class="modal-body">
          
          <div class="form-group">
            <input name="saldo" type="number" class="form-control" id="saldo" placeholder="saldo" required>
          </div>
          <div class="form-group">
            <input name="transaction_date" type="date" class="form-control" id="transaction_date" placeholder="Full Name" required>
          </div>
          <div class="form-group">
            <select name="keterangan" class="form-control text-primary" id="kelas" required>
              <option class="text-success" value="in">Masuk</option>
              <option class="text-danger" value="out">Keluar</option>
            </select>
          </div>
          <div class="form-group">
            <select name="siswa" class="form-control text-dark" id="kelas" required>
              @foreach ($siswa as $murid)
              <option  value="{{$murid['NIS']}}">{{$murid['nama']}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- Transaction End --}}

{{-- CONTENT --}}

<div class="container-xl">

  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  {{-- BALANCE SECTION --}}
  <div class="container-fluid  mx-auto p-3" >
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title text-center">Balance</h5>
        <h4 class="card-text text-center font-weight-normal">Rp. {{$saldoTotal}}</h4>
        <button class="btn btn-success mx-auto my-3 d-block" data-toggle="modal" data-target="#transaction">Lakukan Transaksi</button>
      </div>
    </div>
  </div>
  {{-- BALANCE SECTION END --}}
  
  {{-- Table SECTION TRANSACTION--}}
  <div class="container-fluid">
      <div class="table-responsive shadow">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-8"><h2><strong>Transaction History</strong></h2></div>
                      <div class="col-sm-4">
                          <div class="search-box">
                              <i class="material-icons">&#xE8B6;</i>
                              <input type="text" class="form-control" placeholder="Search&hellip;">
                          </div>
                      </div>
                  </div>
              </div>
              <table class="table table-striped table-hover table-bordered">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>TANGGAL</th>
                          <th>NAMA</th>
                          <th>SALDO</th>
                          <th>ADMIN</th>
                          <th>KETERANGAN</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($historySaldo as $history)
                      <tr>
                        <td>1</td>
                        <td>{{$history['transaction_date']}}</td>
                        <td>{{$history['nama']}}</td>
                        <td>Rp.1000.000</td>
                        <td>Admin Satu</td>
                        <td><span class="badge badge-success">masuk</span></td>
                        <td>
                            <a onclick="event.preventDefault()"  href="" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons" data-toggle="modal" data-target="#editModal">&#xE254;</i></a>
                            <form action="/siswa/delete/id" method="post" class="d-inline">
                              <a onclick="event.preventDefault()"  href="" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </form>
                        </td>
                      </tr>
                    @endforeach
                      
                  </tbody>
              </table>
              <div class="clearfix">
                  <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                  <ul class="pagination">
                      <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                      <li class="page-item active"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">4</a></li>
                      <li class="page-item"><a href="#" class="page-link">5</a></li>
                      <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>  
  </div>
  {{-- Table SECTION END --}}   

</div>
{{-- CONTENT END --}}

@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });
  </script>
@endsection