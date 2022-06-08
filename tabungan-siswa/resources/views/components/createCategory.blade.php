<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <div class="modal fade" id="editCategory{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="/createcategory" method="post">
            @csrf
            <div class="modal-body">
    
                <div class="form-group">
                    <label class="px-2" for="image">Id Category</label>
                    <input name="idkategori" type="text" class="form-control" id="image" placeholder="C00x" value="" required>
                </div>

                <div class="form-group">
                    <label class="px-2" for="image">Nama Category</label>
                    <input name="namakategori" type="text" class="form-control" id="image" placeholder="cth: Sport" value="" required>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-primary">Save changes</button>
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
