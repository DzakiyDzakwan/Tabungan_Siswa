<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
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
              <label class="px-2" for="judul">Judul</label>
              <input name="judul" type="text" class="form-control text-primary"" id="judul" placeholder="Judul" required>
              </div>
  
              <div class="form-group">
              <label class="px-2" for="imgae">Masukkan Gambar</label>
              <input name="image" type="file" class="form-control text-primary" id="image" required>
              </div>
  
              <div class="form-group">
              <label class="px-2" for="isi">Isi</label>
                <form>
                  <textarea name="isi" id="isi"></textarea>
                </form>
              </div>
  
              <div class="form-group">
                <label class="px-2" for="siswa">Author</label>
                <select name="author" class="form-control text-primary" id="author" required>
                  @foreach ($admin as $author)
                  <option  value="{{$author->admin_id}}">{{$author->nama}}</option>
                  @endforeach
                </select>
              </div>
  
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

  {{-- text editor  --}}
  <script src="https://cdn.tiny.cloud/1/qo0dams1mpg6i2thzy40yoeryuj6fdhlf07t6qnwkhjg9nor/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
  <script>
    tinymce.init({
      selector:'#isi'
    });
  </script>
  {{-- end text editor --}}
</body>
</html>
