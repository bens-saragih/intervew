<!DOCTYPE html>
<html lang="en">
<head>

     <title>Ketentuan Layanan | Akasaraped</title>

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
                         <li><a href="{{route('authors')}}">Tim Kami</a></li>
                            <li><a href="{{route('contact')}}">Kontak Kami</a></li>
                            <li><a href="{{route('privacyPolicy')}}">Kebijakan Privasi</a></li>
                            <li class="active"><a href="{{route('termsOfService')}}">Ketentuan Layanan</a></li>
                             <li><a href="{{route('about')}}">Tentang Kami</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Ketentuan Layanan</h1>

                    <br>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-1 col-md-4 col-xs-12 pull-right">
                         <img src="{{asset('img/page/images/terms.png')}}" class="img-responsive img-circle" alt="">
                    </div>
                    <br>
                    <div class="col-md-7 col-xs-12">
                         <div class="about-info">
                              

                              <figure>
                                   <figcaption>
                                        <p>Selamat datang di halaman kebijakan layanan Akasaraped, silakan membaca ketentuan layanan ini sebaik baiknya. Dengan mengakses situs ini berarti anda telah setuju dan terikat untuk mematuhi persyaratan dan ketentuan layanan website ini.Dengan ketentuan sebagai berikut: </p>
                                        <ul>
                                             <li>Artikel pada situs ini memiliki copyright yang di kelola oleh tim Akasaraped, anda dilarang untuk mengklaim tulisan ini sebagai milik anda.</li>
                                             <li>Konten pada situs ini merupakan informasi yang umum dan bisa diubah oleh tim Akasaraped sewaktu waktu tanpa pemberitahuan.</li>
                                             <li>Kamu diperbolehkan untuk menc-copy sebagain materi yang ada di situs ini untuk kepentingan pribadi, non-komersial, diposting ulang di blog, dengan harus menyertakan url ke halaman artikel situs ini</li>
                                             <li>Anda setuju bahwa artikel dari situs ini tidak memberikan jaminan keakuratan dan ketepatan.Jika anda mendapatkan kesalahan dari situs ini dan mengetahui kebenaran yang lebih akurat, silakan hubungi kami melalui halaman <b><a href="{{route('contact')}}">Kontak Kami</a></b> untuk memberikan masukan agar tim Akasaraped mengedit atau mengupdate artikel tersebut.</li>
                                             <li>Sebagain isi konten di situs ini mungkin menggunakan gambar dan atribut seperti video,teks,dan suara/music dari berbagai sumber.Copyright gambar dan atribut lainnya dimiliki oleh pemegang copyright.Jika anda pemilik copyright tersebut dan tidak ingin digunakan di situs ini, silakan menghubungi kami melalui halaman <b><a href="{{route('contact')}}">Kontak Kami</a></b> untuk meminta penghapusan gambar atau atribut tersebut dari situs ini.</li>
                                             <li>Segala sesuatu informasi disitus sepenuhnya menjadi resiko anda, dan bukan menjadi tanggung jawab tim Akasaraped.</li>
                                        </ul>
                                       
                                        <p>Terima kasih pengertiannya, jika ada pertanyaan silakan hubungi kami di halaman <b><a href="{{route('contact')}}">Kontak Kami</a></b></p>
                                   </figcaption>
                              </figure>
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