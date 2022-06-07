<div class="modal fade" id="editBerita{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="berita/{{$berita['berita_id']}}" method="post">
        @csrf
        @method('PATCH')
        <div class="modal-body">

            <input type="hidden" name="berita_id" value="{{$berita['berita_id']}}">
            <div class="form-group">
            <label class="px-2" for="judul">Judul</label>
            <input name="judul" type="text" class="form-control" id="judul" placeholder="Judul" value="{{$berita['judul']}}" required>
            </div>
            <div class="form-group">
            <label class="px-2" for="image">Ubah Gambar</label>
            <input name="image" type="file" class="form-control" id="image" placeholder="Image" value="{{$berita['image']}}" required>
            </div>
            <div class="form-group">
            <label class="px-2" for="isi">Isi</label>
            <input name="isi" type="text" class="form-control" id="isi" placeholder="Isi" value="{{$berita['isi']}}" required>
            </div>
            {{-- <div class="form-group">
            <input name="category" type="text" class="form-control" id="category" placeholder="Category" value="{{$berita['category']}}" required>
            </div> --}}
        </div>
        <div class="modal-footer justify-content-center">
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
    </div>
    </div>
</div>