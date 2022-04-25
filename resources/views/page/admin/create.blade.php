<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
  <title>Halaman Index
  </title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">CI App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="#">Home
            <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Mahasiswa</a>
          <a class="nav-item nav-link" href="#">About</a>
        </div>
      </div>
    </div>
  </nav> 
<div class="container">
    <div class="row justify-content-center" style="width:1200px ;">
        <div class="col-md-8">
             <form action="{{ route('YWRtaW5rYWg.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul')}}">
                  @error('judul')
                  <small class="form-text text-danger">{{$message}}</small>
                  @enderror
                </div>
                 <div class="mb-3">
                  <label for="photo" class="form-label">Gambar</label>
                  <input type="file" class="form-control" id="photo" name="photo" value="{{ old('photo')}}">
                  @error('photo')
                  <small class="form-text text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="isi" class="form-label">Isi</label>
                  <textarea name="isi" class="my-editor form-control" id="my-editor" cols="50" rows="20" value="{{ old('judul')}}"></textarea>
                   @error('isi')
                  <small class="form-text text-danger">{{$message}}</small>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div> 

<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<!-- <script>
    CKEDITOR.replace('my-editor');
    </script> -->

<!--  <script type="text/javascript">
     $(function() {
    $('#my-editor').ckeditor({
        toolbar: 'Full',
        enterMode : CKEDITOR.ENTER_BR,
        shiftEnterMode: CKEDITOR.ENTER_P
    });
});
 </script> -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{asset('js/admin/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('js/admin/myscript.js')}}"></script>

  </body>
</html>