
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog | Aksaraped</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="{{asset('css/page/css/bootstrap.min.css' )}}" />
    <link rel="stylesheet" href="{{asset('css/page/css/font-awesome.min.css' )}}" />
    <link rel="stylesheet" href="{{asset('css/page/css/owl.carousel.css' )}}" />
    <link rel="stylesheet" href="{{asset('css/page/css/owl.theme.default.min.css ')}}" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/page/css/style.css' )}}" />
    <link rel="stylesheet" href="{{asset('css/page/css/footer.css' )}}" />
  </head>
  <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <!-- PRE LOADER -->
    <section class="preloader">
      <div class="spinner">
        <span class="spinner-rotate"></span>
      </div>
    </section>

    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
          </button>

          <!-- lOGO TEXT HERE -->
          <a href="#" class="navbar-brand">Aksaraped</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-nav-first">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active"><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('authors')}}">Tim Kami</a></li>
             <li><a href="{{route('contact')}}">Kontak Kami</a></li>
             <li><a href="{{route('privacyPolicy')}}">Kebijakan Privasi</a></li>
             <li><a href="{{route('termsOfService')}}">Ketentuan Layanan</a></li>
              <li><a href="{{route('about')}}">Tentang Kami</a></li>
          </ul>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="text-center">
          <h1>Artikel</h1>

          <br />

          <p class="lead">Aksaraped menyajikan informasi seputar Akasara</p>
        </div>
      </div>
    </section>

    <section class="section-background">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 pull-right col-xs-12">
            <div class="form">
              <form method="get" action="{{url('/blog')}}">
                <div class="form-group">
                  <label class="control-label">Pencarian </label>

                  <div class="input-group">
                    
                    <input type="text" name="cari" class="form-control" placeholder="Cari..." />
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Go!</button>
                    </span>
              
                  </div>
                </div>
              </form>
            </div>
            <?php 
              $what = \Request::get('cari');
             ?>
            @if($what != "")
              @if($count != 0)
                <div class="alert alert-success d-inline-block">
                  <h4>Hasil pencarian <b>{{$cari}}</b></h4>
                </div>
              @else
                  <div class="alert alert-danger d-inline-block">
                      <h4>Data <b>{{$cari}}</b> tidak ditemukan</h4>
                    </div>
              @endif     

            <br />
            @else
            @endif
            <label class="control-label">Artikel Terbaru</label>

            <ul class="list">
              @forelse($latests as $latest)
              <li><a href="{{route('articleDetail',$latest->slug)}}">{{$latest->judul}}</a></li>
              @empty <p>artikel belum ada</p>
              @endforelse
            </ul>
          </div>
           <!-- end if what -->

          <div class="col-lg-9 col-xs-12">
            <div class="row">

              @forelse($articles as $article)
              <div class="col-sm-6">
                <div class="courses-thumb courses-thumb-secondary">
                  <div class="courses-top">
                    <div class="courses-image">
                       <img src="{{ asset('/storage/uploads-img/'.$article->photo)}}" class="img-responsive" alt="" />
                    </div>
                    <div class="courses-date">
                      <span title="Author"><i class="fa fa-user"></i> Billie Jonathan</span>
                      <span title="Date"><i class="fa fa-calendar"></i> {{$article->created_at}}</span>
                     
                    </div>
                  </div>

                  <div class="courses-detail">
                    <h3><a href="{{route('articleDetail',$article->slug)}}">{{$article->judul}}</a></h3>
                  </div>

                  <div class="courses-info">
                    <a href="{{route('articleDetail',$article->slug)}}" class="section-btn btn btn-primary btn-block">Lanjut Baca</a>
                  </div>
                </div>
              </div>
              @empty
              @endforelse
            </div>
          </div>
          
        </div>
      </div>
    </section>

<center>
<div class="row">
<div class="mx-auto mt-3">
{{ $articles->onEachSide(1)->links() }}
</div>
</div>
</center>



<!-- FOOTER -->
    <footer class="footer-07">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 text-center">
            <h2 class="footer-heading"><a href="#" class="logo">Aksaraped</a></h2>
            <p class="menu">
              <a href="{{route('blog')}}">Blog</a>
              <a href="{{route('contact')}}">Kontak</a>
              <a href="{{route('about')}}">Tentang</a>
              <a href="{{route('authors')}}">Tim Kami</a>
            </p>
            <ul class="ftco-footer-social p-0">
              <li class="ftco-animate">
                <a href="{{asset('img/page/images/logo-sponsor.jpeg')}}" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="container">
          <h1>Terima kasih kepada sponsor</h1>
          <div class="img-responsive">
            <div class="item">
              <a href="#"><img src="{{asset('img/page/images/logo-sponsor.jpeg')}}" alt="" /></a>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <p class="copyright">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All rights reserved | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="{{asset('js/page/js/jquery.js')}}"></script>
    <script src="{{asset('js/page/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/page/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/page/js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/page/js/custom.js')}}"></script>
  </body>
</html>
