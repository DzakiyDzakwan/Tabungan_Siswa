@extends('layout.master')

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

    
    @include('components.rupiah')
    @include('components.createConfirmation')

    {{-- CONTENT --}}
        <div class="main-panel">
        <div class="content-wrapper">
            <div class="container-xl">

            {{-- Total SECTION --}}
            <div class="container-fluid  mx-auto" >
                <div class="row">
            
                <div class="col col-lg-12">
                    <div class="card card-dark-blue shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center text-white fs-3">Total Confirmation</h3>
                        <h5 class="card-text text-center font-weight-normal">{{$total}}</h5>
                        <button class="btn btn-success mx-auto my-3 d-block" data-toggle="modal" data-target="#confirmation">Buat Confirmation</button>
                    </div>
                    </div>
                </div>
            
                <div class="col col-4 my-3">
                    <div class="card card-light-blue shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center text-white fs-3">Pending Confirmation</h3>
                        <h5 class="card-text text-center font-weight-normal">{{$pending}}</h5>
                    </div>
                    </div>
                </div>
            
                <div class="col col-4 my-3">
                    <div class="card card-success shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center text-white fs-3">Accepted Confirmation</h3>
                        <h5 class="card-text text-center font-weight-normal">{{$accepted}}</h5>
                    </div>
                    </div>
                </div>
            
                <div class="col col-4 my-3">
                    <div class="card card-light-danger shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center text-white fs-3">Rejected Confirmation</h3>
                        <h5 class="card-text text-center font-weight-normal">{{$rejected}}</h5>
                    </div>
                    </div>
                </div>
            
                </div>
            </div>
            {{-- Total SECTION END --}}
            
            
            <div class="container-fluid  mx-auto" >
                {{-- Table SECTION TRANSACTION--}}
            <div class="container-fluid">
                <div class="table-responsive shadow">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8"><h2><strong>Transaction History</strong></h2></div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                <th>NO</th>
                                <th>TRANSFER DATE</th>
                                <th>SALDO</th>
                                <th>JENIS</th>
                                <th>BUKTI</th>
                                <th>STATUS</th>
                                <th>ADMIN</th>
                                <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($history as $item)
                            @include('components.editConfirmation')
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <?php $time = strtotime($item['transfer_date'])  ?>
                                    <td>{{date('d/M/Y',$time)}}</td>
                                    <td>{{rupiah($item['saldo'])}}</td>
                                    <td>{{$item['jenis_transaksi']}}</td>
                                    <td><a href="{{$item['bukti']}}" class="text-primary" download>Download</a></td>
                                    @if ($item['status'] === 'pending')
                                        <td><span class="badge badge-secondary p-2 text-white">{{$item['status']}}</span></td>
                                    @elseif($item['status'] === 'accepted')
                                        <td><span class="badge badge-success p-2 text-white">{{$item['status']}}</span></td>
                                    @else
                                        <td><span class="badge badge-danger p-2 text-white">{{$item['status']}}</span></td>
                                    @endif

                                    @if ($item['status'] === 'pending')
                                        <td>Waiting for confirmation</td>
                                    @else 
                                        <td>{{$item['nama']}}</td>
                                    @endif
                                    
                                    <td>
                                        <a onclick="event.preventDefault()"  href="" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons" data-toggle="modal" data-target="#editConfirmation{{$loop->iteration}}">&#xE254;</i></a>
                                        <form id="deleteForm" action="/confirmation/delete/{{$item['confirmation_id']}}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <a onclick="document.getElementById('deleteForm').submit();" type="submit"  href="javascript:{}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                        <div class="clearfix">
                            <div class="hint-text">Showing <b>{{$history->firstItem()}}</b> out of <b>{{$history->lastItem()}}</b> entries</div>
                            <ul class="pagination">
            
                                {{ $history->links() }}
                                {{-- <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>  
            </div>
            {{-- Table SECTION END --}}   
            </div>
        </div>
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