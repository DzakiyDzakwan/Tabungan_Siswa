@extends('layout.master')

@section('title')
    <title>Transaction</title>
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Transaction</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Transaction History -->
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Transaction History</h4>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID Transaction</th>
                    <th>Date</th>
                    <th>Balance</th>
                    <th>keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($historySaldo as $history)
                  <tr>
                    <td>{{$history['transaction_id']}}</td>
                    <td>{{$history['transaction_date']}}</td>
                    @if ($history['keterangan'] === 'in')
                      <td class="text-success"> {{$history['saldo']}} </td>
                      <td><label class="badge badge-success">saldo masuk</label></td>
                    @else
                    <td class="text-danger"> {{$history['saldo']}} </td>
                    <td><label class="badge badge-danger">saldo keluar</label></td>
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>

              <!-- Pagination-->
              <nav aria-label="Pagination my-3">
                {{$historySaldo->links()}}
              </nav>

              {{-- <hr class="mt-5" >
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item"><a class="page-link" href="#">Older</a></li>
                </ul>
               --}}

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Balance</h4>
            <div class="row">
              <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                  <div class="card-body text-center">
                    <p class="mb-4">Balance Total</p>
                    <p class="fs-30 mb-2">Rp {{$saldoTotal}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                  <div class="card-body text-center">
                    <p class="mb-4">Balance Out</p>
                    <p class="fs-30 mb-2">Rp {{$saldoKeluar}}</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
</div>
@endsection