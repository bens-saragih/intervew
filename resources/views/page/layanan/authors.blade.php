<!DOCTYPE html>
<html lang="en">
<head>

     <title>Tim Kami | Aksaraped</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
                    <a href="#" class="navbar-brand">Akasaraped</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                     <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.html">Home</a></li>
                         <li><a href="blog-posts.html">Blog</a></li>
                         <li class="active"><a href="{{route('authors')}}">Tim Kami</a></li>
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
                    <h1>Tim Akasaraped</h1>

                    <br>

                    <p class="lead">Akasaraped dibangun dan dikelola oleh 3 orang pemuda,mereka adalah :</p>
               </div>
          </div>
     </section>

     <section id="team" class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="{{asset('img/page/images/farell.png')}}" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Farell Octariandy</h3>
                                   <span>Frontend Developer</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="https://www.instagram.com/farellbwzr/" target="_blank" class="fa fa-instagram"></a></li>
                                   <li><a href="mailto:farelloctariandy123@gmail.com" class="fa fa-envelope-o"></a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="{{asset('img/page/images/bento.png')}}" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Bento Sariando Saragih</h3>
                                   <span>Backend Developer</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="https://www.linkedin.com/in/bento-saragih-4434111a6/" class="fa fa-linkedin" target="_blank"></a></li>
                                   <li><a href="mailto:bentodotco@gmail.com" class="fa fa-envelope-o"></a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="{{asset('img/page/images/billie.png')}}" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Bellie Jonathan</h3>
                                   <span>Penulis</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="https://www.instagram.com/billiejonathan_/" class="fa fa-instagram" target="_blank"></a></li>
                                   <li><a href="mailto:billie.jonathan50@gmail.com" class="fa fa-envelope-o"></a></li>
                                   
                              </ul>
                         </div>
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