@extends('layout.admin')
@section('style')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: 'Roboto', sans-serif;
    }

    .content-wrapper {
        background: #f5f5f5
    }
</style>

@endsection
@section('title')
    <title>Confimation</title>
@endsection

@section('content')

    
    <div class="main-panel">
        <div class="content-wrapper">
            
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h2 class="font-weight-bold">Confimation</h2>
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
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Class</th>
                                            <th>Date</th>
                                            <th>Incoming Balance</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>123001</td>
                                            <td>Budi Budiman</td>
                                            <td>6</td>
                                            <td>12-12-2022</td>
                                            <td class="text-success">Rp 50000</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-success btn-fw">Confirm</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-danger btn-fw">Reject</button>
                                            </td>
                                        </tr>
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