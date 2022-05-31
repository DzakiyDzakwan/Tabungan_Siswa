<div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/confirmation/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          
          <div class="form-group">
            <label class="px-2" for="saldo">Saldo Konfirmasi</label>
            <input name="saldo" type="number" class="form-control text-primary" id="saldo" placeholder="Saldo" required>
          </div>
          <div class="form-group">
            <label class="px-2" for="transfer_date">Waktu Transfer</label>
            <input name="transfer_date" type="date" class="form-control text-primary" id="transfer_date" placeholder="Full Name" required>
          </div>
          <div class="form-group">
            <label class="px-2" for="jenis">Jenis Transaksi</label>
            <select name="jenis" class="form-control text-primary" id="jenis" required>
              <option class="text-dark" value="bank">Bank</option>
              <option class="text-dark" value="fintech">Fintech</option>
            </select>
          </div>
          <div class="form-group">
            <label class="px-2" for="bukti">Bukti Transaksi</label>
            <input name="bukti" type="file" class="form-control text-primary" id="bukti" placeholder="Jenis Transaksi" required>
          </div>
        </div>

        <div class="modal-footer justify-content-center">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>