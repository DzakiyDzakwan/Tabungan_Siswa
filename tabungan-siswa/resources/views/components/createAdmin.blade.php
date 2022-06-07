<div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="pt-3" action="/admin" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <input name="email" type="email" class="form-control text-primary"" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
            <input name="user_name" type="text" class="form-control text-primary"" id="user_name" placeholder="Username" required>
            </div>
            <div class="form-group">
                <select name="role" class="form-control text-primary"" id="kelas" required>
                    <option value="admin">Admin</option>
                    {{-- <option value="siswa">Siswa</option> --}}
                </select>
            </div>
            <div class="form-group">
            <input name="password" type="password" class="form-control text-primary"" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
            <input name="password_confirmation" type="password" class="form-control text-primary"" id="password_confirmation" placeholder="Confirm Password" required>
            </div>
            <div class="col-md-start">
            <button type="submit" class="btn btn-primary"  type="submit">ADD DATA</button>
            </div>
        </div>        
    </form>
    </div>
  </div>
</div>