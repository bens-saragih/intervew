<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home | Aksaraped</title>

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
          <a class="navbar-brand" href="#">
            <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" />
            Aksaraped</a
          >
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-nav-first">
            <li class="active"><a href="{{route('home')}}">Home</a></li>
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

    <!-- HOME -->
    <section id="home">
      <div class="row">
        <div class="owl-carousel owl-theme home-slider">
          <div class="item item-first">
            <div class="caption">
              <div class="container">
                <div class="col-md-6 col-sm-12">
                  <h1 style="color: white;">Marhaban ya Ramadahan, by Lontara Akasara</h1>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="item item-second">
            <div class="caption">
              <div class="container">
                <div class="col-md-6 col-sm-12">

                  <h3>"Perdamaian, persatuan, cinta, dan antikekerasan harus menjadi seruan kita dan katalis untuk perubahan di negara kita." - Tony Evans</h3>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="item item-third">
            <div class="caption">
              <div class="container">
                <div class="col-md-6 col-sm-12">
                  <h1>Menurut sejarah, Aksara Lontara dibuat pertama kali oleh Daeng Pamatte pada abad ke-16.</h1>
                  <h3>sumber gambar : merahputih.com</h3>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <main>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="text-center">
                <h2>Tentang Aksaraped</h2>

                <br />

                <p class="lead">
                  Aksaraped adalah webiste berbahasa Indonesia yang menyajikan informasi seputar Aksara yang ada di negara Indonesia.Kami fokus membahas berbagai hal seputar Aksara,seperti sejarah aksara yang ada di Indonesia,hal unik dari sebuah akasara dan lain sebagainya yang masih berkaitan dengan akasara... <small><i><a href="{{route('about')}}">baca selengkapnya</a></i></small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="section-title text-center">
                <h2>Artikel Unggulan</h2>
              </div>
            </div>
            
          		  @forelse($randomArticles as $random)
                      <div class="col-md-4 col-sm-4">
                        <div class="courses-thumb courses-thumb-secondary">
                          <div class="courses-top">
                            <div class="courses-image">
                              <img src="{{ asset('/storage/uploads-img/'.$random->photo)}}" class="img-responsive" alt="" />
                            </div>
                            <div class="courses-date">
                              <span title="Author"><i class="fa fa-user"></i>Billie Jonathan</span>
                              <span title="Date"><i class="fa fa-calendar"></i>{{$random->created_at}}</span>
                            </div>
                          </div>

                          <div class="courses-detail">
                            <h3><a href="{{route('articleDetail',$random->slug)}}">{{$random->judul}}</a></h3>
                          </div>

                          <div class="courses-info">
                            <a class="section-btn btn btn-primary btn-block" href="{{route('articleDetail',$random->slug)}}">Lanjut baca</a>
                          </div>
                        </div>
                      </div>

                  @empty <p>Blm ada artikel</p>
                  @endforelse

          </div>
        </div>
      </section>
    </main>

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
