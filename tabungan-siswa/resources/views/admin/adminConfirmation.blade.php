@extends('layout.admin')


@section('title')
    <title>Confimation</title>
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
    table.table td a.confirm {
        color: #115304;
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
    
    <div class="main-panel">
        <div class="content-wrapper">
            
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h2 class="font-weight-bold">Confirmation</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="mt-3 mb-5">Student Balance Confimation</h3>
                            <div class="table-responsive">

                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TRANSFER DATE</th>
                                            <th>SISWA</th>
                                            <th>SALDO</th>
                                            <th>JENIS</th>
                                            <th>BUKTI</th>
                                            <th>STATUS</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($history as $item)
                                            @if ($item['status'] === 'pending')
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <?php $time = strtotime($item['transfer_date'])  ?>
                                                    <td>{{date('d/M/Y',$time)}}</td>
                                                    <td>{{$item['nama']}} {{$item['NIS']}}</td>
                                                    <td>{{rupiah($item['saldo'])}}</td>
                                                    <td>{{$item['jenis_transaksi']}}</td>
                                                    <td><a href="{{$item['bukti']}}" class="text-primary" download>Download</a></td>
                                                    <td><span class="badge badge-secondary p-1">Pending</span></td>
                                                    <td>
                                                        <form id="reject" action="/confirmation/reject/{{$item['confirmation_id']}}" method="post" class="d-inline">
                                                            @csrf
                                                            @method('PATCH')
                                                            <a onclick="document.getElementById('reject').submit();" type="submit"  href="javascript:{}" class="delete" title="Reject" data-toggle="tooltip"><i class="material-icons">clear</i></a>
                                                        </form>

                                                        <form id="accept" action="/confirmation/accept/{{$item['confirmation_id']}}" method="post" class="d-inline">
                                                            @csrf
                                                            @method('PATCH')
                                                            <a onclick="document.getElementById('accept').submit();" type="submit"  href="javascript:{}" class="confirm" title="Confirm" data-toggle="tooltip"><i class="material-icons">check</i></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

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