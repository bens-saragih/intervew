
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Detail | Aksaraped</title>

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/page/css/style.css' )}}" />
    <link rel="stylesheet" href="{{asset('css/page/css/footer.css' )}}" />
    
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
            <li><a href="{{route('blog')}}">Blog</a></li>
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
        <h2>{{$detail[0]->judul}}</h2>

        <p class="lead"><i class="fa fa-user"></i> Billie Jonathan &nbsp;&nbsp;&nbsp; <i class="fa fa-calendar"></i> {{$detail[0]->created_at}} &nbsp;&nbsp;</p>

        <img src="{{ asset('/storage/uploads-img/'.$detail[0]->photo) }}" class="img-responsive" alt="" />

        <br />

        <p>
         {{$detail[0]->isi}}
        </p>

        <br />
        <br />

        <div class="row">
          <div class="col-md-4 col-xs-12 pull-right">
            <h4>Share</h4>

            <p>
              <a href="#" target="_blank">{!! Share::page(url('https://google.com'))->facebook() !!}</i></a> 
              <a href="#" target="_blank">{!! Share::page(url('https://google.com'))->twitter() !!}</i></a>
              <a href="#" target="_blank">{!! Share::page(url('https://google.com'))->telegram() !!}</i></a>
              <a href="#" target="_blank">{!! Share::page(url('https://google.com'))->whatsapp() !!}</i></a>
            </p>

            <br />

            <h4>Artikel Terbaru</h4>

            <ul class="list">
              @forelse($latestArticle as $latest)
              <li><a href="{{route('articleDetail',$latest->slug)}}">{{$latest->judul}}</a></li>
              @empty <p>artikel belum ada</p>
              @endforelse
            </ul>
          </div>

          <div class="col-md-8 col-xs-12">
            <h4>Komentar</h4>
<!-- 
            <p>No comments found.</p>
            <p>No comments found.</p> -->

            @forelse($komentars as $komentar)
              <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-body text-primary">
                  <h5 class="card-title"><i>@</i>{{$komentar->namaKomentator}}</h5>
                  <p class="card-text"><b>Pesan: </b>{{$komentar->pesanKomentar}}</p>
                </div>
              </div>
              <hr>
              @empty <p>Tidak ada komentar</p>
              @endforelse

            <br />

            <h4>Beri Komentar</h4>

            <form method="post" class="form" action="{{route ('articleDetail',$detail[0]->slug) }}">
              @csrf
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label class="control-label">Nama</label>

                    <input type="text" name="nama" class="form-control" />
                  </div>
                </div>

                <div class="col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label class="control-label">Email</label>

                    <input type="email" name="email" class="form-control" />
                  </div>
                </div>
              </div>
              <input type="hidden" name="article_id" value="{{$detail[0]->id}}">
              <div class="form-group">
                <label class="control-label">Pesan</label>

                <textarea name="pesan" class="form-control" rows="10" autocomplete="off"></textarea>
              </div>

              <button type="submit" class="section-btn btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>

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
