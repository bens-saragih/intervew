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
      <a class="navbar-brand" href="#">Aksaraped Manage Articles</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="{{route('home')}}">Home Web
            <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="{{route('logout')}}">Logout</a>
        </div>
      </div>
    </div>
  </nav> 
<div class="container">


    <div class="row mt-3">
        <div class="col-md-6">
            <a href="{{ route('YWRtaW5rYWg.create') }}" class="btn btn-primary">Tambah
                Artikel Baru</a>
        </div>
    </div>

@if(session()->has('pesan'))
<div class="alert alert-success">
{{ session()->get('pesan') }}
</div>
@endif

<!--     <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari artikel .." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Artikel</h3>
            @forelse($articles as $article)
                @empty<div class="alert alert-danger" role="alert">
                Tidak ada artikel
                </div>
            @endforelse

            <ul class="list-group">
                @forelse($articles as $article)
                <li class="list-group-item">
                    <a href="{{route('articleDetail',$article->slug)}}">
                    {{$article->judul}}
                    </a>
                   <form action="{{route('YWRtaW5rYWg.destroy',$article->slug)}}"
                    method="POST" id="my-form">
                    @method('DELETE')
                    @csrf
                    <button type="submit">hapus</button>
                    </form>
                
                    <a href="{{route('YWRtaW5rYWg.edit',$article->slug)}}"
                        class="badge badge-success float-right" >ubah</a>
                    
                </li>
                @empty
                @endforelse
            </ul>
        </div>
    </div>

</div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{asset('js/admin/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('js/admin/myscript.js')}}"></script>
  </body>
</html>