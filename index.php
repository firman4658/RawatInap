<?php
  error_reporting(0);
  include 'config/koneksi.php';
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PELAYANAN RAWAT INAP - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="#">kelompok11@gmail.com</a>
        <i class="icofont-google-map"></i> STIKES PANAKUKANG
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php"> <img src="admin/build/images/logonobg.png" style="margin-left: 4px;" sizes="50px"> P. Rawat Inap</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#services">Pelayanan</a></li>
          <li><a href="#Info">Informasi Penyakit</a></li>
          <li><a href="#doctors">Dokter</a></li>
          <li><a href="#alamat">Alamat</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="admin/index.php" class="appointment-btn scrollto">Login </a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>P.Rawat Inap</h1>
      <h2>Sistem Pelayanan Rawat Inap Berbasis Web php & mysql</h2>
  
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Pelayanan Rawat Inap?</h3>
              <p>
                Pelayanan Rawat Inap ini dibuat oelh kelompok 1. dengan menggunakan sistem berbasis web php dan mysql. Aplikasi yang digunakan adalah Visual code sebagai tempat codingannya dan xampp sebgai server. 
              </p>
              <div class="text-center">
               
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Info Menarik </h4>
                    <p>Terdapat Beberapa Informasi menarik</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>cepat aman dan bersih</h4>
                    <p>Dokter yang terpercaya, aman dan berkualitas</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>bekerja dengan 3S</h4>
                    <p>menerapkan 3S : Salam, Senyum dan Sapa</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up"> <?php
                $data2 = mysqli_query($konek, "SELECT * FROM dokter");
                $jmlh_dokter = mysqli_num_rows($data2);
                echo $jmlh_dokter; ?></span>
              <p>DOKTER</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
              <span data-toggle="counter-up"> <?php
                $data3 = mysqli_query($konek, "SELECT * FROM kamar");
                $jmlh_kamar = mysqli_num_rows($data3);
                echo $jmlh_kamar; ?></span>
              <p>KAMAR</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-laboratory"></i>
              <span data-toggle="counter-up"> <?php
                $data2 = mysqli_query($konek, "SELECT * FROM pasien");
                $jmlh_pasien = mysqli_num_rows($data2);
                echo $jmlh_pasien; ?></span>
              <p>PASIEN</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up"> <?php
                $data2 = mysqli_query($konek, "SELECT * FROM pembayaran");
                $jmlh_pem = mysqli_num_rows($data2);
                echo $jmlh_pem  ; ?></span>
              <p>TRANSAKSI</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Pelayanan</h2>
          <p>Rumah Sakit Rawat Inap, melayani beberapa hal sebagai berikut : </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="icofont-heart-beat"></i></div>
              <h4><a href="">Kesehatan</a></h4>
              <p>Memberikan pengetahuan tentang kesehatan dan memberikan tips-tips</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="icofont-heartbeat"></i></div>
              <h4><a href="">Diagnosa</a></h4>
              <p>Mendiagnosa penyakit pasien yang diderita. Kemudian melakukan Rawat Inap.</p>
            </div>
          </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="icofont-disabled"></i></div>
              <h4><a href="">Sehat</a></h4>
              <p>Pasien diberikan pelayanan terbaik, hingga sembuh.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Departments Section ======= -->
    <section id="Info" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Informasi Penyakit</h2>
          <p>Terdapat beberapa penyakit yang sangat mematikan didunia ini, diantaranya yaitu:</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Covid-19</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Jantung</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Kanker Otak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Diabetes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Tipes</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Covid-19</h3>
                    <p class="font-italic">Coronavirus atau virus corona merupakan keluarga besar virus yang menyebabkan infeksi saluran pernapasan atas ringan hingga sedang, seperti penyakit flu.</p>
                    <p>Namun, rata-rata gejala yang timbul setelah 2-14 hari setelah virus pertama masuk ke dalam tubuh. Di samping itu, metode transmisi COVID-19 juga belum diketahui dengan pasti.</p>
                    <a href="https://www.klikdokter.com/penyakit/coronavirus"> <i>lanjut baca</i></a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/co.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Penyakit Jantung</h3>
                    <p class="font-italic">Penyakit jantung adalah kondisi ketika jantung mengalami gangguan. Bentuk gangguan itu sendiri bisa bermacam-macam.</p>
                    <p>Istilah penyakit jantung meliputi beragam gangguan pada jantung, <b>Penyakit arteri koroner</b> <b>Aritmia</b>, <b>Penyakit jantung bawaan</b>, <b> Kardiomiopati, Infeksi jantung, Penyakit katup jantung.</b></p>
                    <a href="https://www.beritabersatu.com/2020/02/18/kenali-gejala-dan-cara-pencegahan-penyakit-jantung/"> <i>lanjut baca</i></a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/jan.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Kanker Otak</h3>
                    <p class="font-italic">Kanker otak atau keganasan pada otak dapat tumbuh secara cepat dan menyebar ke bagian lain dari otak dan tulang belakang.</p>
                    <p>Secara umum, tumor otak diklasifikasikan berdasarkan berbagai hal, termasuk kecepatan pertumbuhannya dan kemungkinan untuk tumbuh kembali setelah penanganan.</p>
                    <a href="https://www.klikdokter.com/penyakit/kanker-otak"> <i>lanjut baca</i></a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/otak.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Diabetes</h3>
                    <p class="font-italic">Diabetes adalah penyakit kronis yang ditandai dengan ciri-ciri berupa tingginya kadar gula (glukosa) darah.</p>
                    <p>Glukosa yang menumpuk di dalam darah akibat tidak diserap sel tubuh dengan baik dapat menimbulkan berbagai gangguan organ tubuh. Jika diabetes tidak dikontrol dengan baik, dapat timbul berbagai komplikasi yang membahayakan nyawa penderita.</p>
                    <a href="https://www.alodokter.com/diabetes"> <i>lanjut baca</i></a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/dia.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tipes</h3>
                    <p class="font-italic">Tifus (tipes) atau demam tifoid adalah penyakit yang terjadi karena infeksi bakteri Salmonella typhi yang menyebar melalui makanan dan minuman yang telah terontaminasi.</p>
                    <p> Penyakit yang banyak terjadi di negara-negara berkembang dan dialami oleh anak-anak ini dapat membahayakan nyawa jika tidak ditangani dengan baik dan secepatnya.</p>
                    <a href="https://www.halodoc.com/kesehatan/tifus"> <i>lanjut baca</i></a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/ti.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Dokter</h2>
          <p>Nama Dokter Spesialis di Rumah Sakit Rawat Inap</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="admin/build/images/dokter/chairunnisa.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Chairunnisa</h4>
                <span>Spesialis Gigi</span>
                <p>Contact Person :</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="admin/build/images/dokter/chesa.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>chesa</h4>
                <span>Spesialis hati wanita</span>
                <p>Contact Person :</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="admin/build/images/dokter/fatimah.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>fatimah</h4>
                <span>Spesialis jantung</span>
                <p>Contact Person :</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="admin/build/images/dokter/indrawati.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Indrawati</h4>
                <span>Spesialis THT</span>
                <p>Contact Person :</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="admin/build/images/dokter/whidy.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Whidy</h4>
                <span>Spesialis Hati</span>
                <p>Contact Person :</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

  
    <!-- ======= Contact Section ======= -->
    <section id="alamat" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Alamat Rumah Sakit Rawat Inap</h2>
          <p>Berikut Alamat Rumah Sakit Rawat Inap di Google Maps </p>
        </div>
      </div>

      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.636320398558!2d119.44252461430074!3d-5.1620720535854865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2c22fbf433f%3A0xb083649770779417!2sSTIKES%20Panakkukang%20Makasar!5e0!3m2!1sid!2sid!4v1617514564144!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Rawat Inap</span></strong>. All Rights Reserved 2021
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://aswar12.github.io/">Aswar Sumarlin</a>  & <a href="https://www.instagram.com/firmann_fir/">Firmansyah</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>