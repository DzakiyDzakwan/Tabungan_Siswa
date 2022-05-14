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
            <h3 class="font-weight-bold">Welcome User</h3>
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
                    <th>#</th>
                    <th>ID Transaction</th>
                    <th>Date</th>
                    <th>Balance</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>123</td>
                    <td>1 Juni 2022</td>
                    <td class="text-success"> 12000 </td>
                    <td><label class="badge badge-success">Completed</label></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>124</td>
                    <td>2 Juni 2022</td>
                    <td class="text-success"> 50000 </td>
                    <td><label class="badge badge-success">Completed</label></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>125</td>
                    <td>3 Juni 2022</td>
                    <td class="text-warning"> 6000 </td>
                    <td><label class="badge badge-warning">In Progress</label></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>126</td>
                    <td>4 Juni 2022</td>
                    <td class="text-warning"> 90000 </td>
                    <td><label class="badge badge-warning">In Progress</label></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>127</td>
                    <td>5 Juni 2022</td>s
                </tbody>
              </table>

              <!-- Pagination-->
              <nav aria-label="Pagination">
                <hr class="mt-5" >
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item"><a class="page-link" href="#">Older</a></li>
                </ul>
              </nav>

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
                    <p class="fs-30 mb-2">Rp 1250000</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                  <div class="card-body text-center">
                    <p class="mb-4">Balance Out</p>
                    <p class="fs-30 mb-2">Rp 500000</p>
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