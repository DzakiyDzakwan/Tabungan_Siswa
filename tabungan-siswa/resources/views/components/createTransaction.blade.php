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