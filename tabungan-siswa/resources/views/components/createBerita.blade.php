<div class="modal fade" id="berita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="pt-3" action="/berita" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            {{-- <input type="hidden" name="berita_id" value="{{$category['berita_id']}}"> --}}
            <div class="form-group">
            <input name="judul" type="text" class="form-control text-primary"" id="judul" placeholder="Judul" required>
            </div>
            <div class="form-group">
            <input name="image" type="file" class="form-control text-primary"" id="image" placeholder="image" required>
            </div>
            <div class="form-group">
            <input name="isi" type="text" class="form-control text-primary"" id="isi" placeholder="Isi" required>
            </div>
            {{-- <div class="form-group">
            <input name="author" type="" class="form-control text-primary"" id="author" placeholder="Author" required>
            </div> --}}
            <div class="form-group">
              <label class="px-2" for="siswa">Category</label>
              <select name="category" class="form-control text-primary" id="category" required>
                @foreach ($categories as $category)
                <option  value="{{$category->category_id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="col-md-start">
            <button type="submit" class="btn btn-primary"  type="submit">ADD DATA</button>
            </div>
        </div>        
    </form>
    </div>
  </div>
</div>