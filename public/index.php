<?php
  $connect = mysqli_connect("localhost", "root", "", "cesi");
  if (!$connect) {
      echo "Koneksi Gagal";
      die;
  }

  if(isset($_POST["kirim"])){
    $daftar = mysqli_query($connect, "INSERT INTO user (nama,wa,email,jenisk,umur,pendidikan,menikah) 
                                    VALUES ('$_POST[nama]',
                                            '$_POST[wa]',
                                            '$_POST[email]',
                                            '$_POST[jenisk]',
                                            '$_POST[umur]',
                                            '$_POST[pendidikan]',
                                            '$_POST[menikah]')
                                            ");

    if($daftar){
        echo"<script>
                alert('Simpan Sukses');
                document.location='hasil.php';
            </script>";
    }else{
        echo"<script>
                alert('Simpan Gagal');
                document.location='index.php';
            </script>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Cesi | Cek Depresi</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff"> -->
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->
    


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/gallery/logo.png" width="118" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#fitur">Fitur</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#informasi">Informasi</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#analisis">Analisis</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#cobacek">Coba Cek </a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#findUs">Kontak Kami</a></li>
            <!-- </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="#!">Sign In</a> -->
          </div>
        </div>
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/gallery/main 3.png" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">We're <strong>determined </strong>for<br />your&nbsp;<strong>better life.</strong></h1>
              <p class="fs-1 mb-5">
                Kesehatan mental memegang peranan krusial dalam kehidupan kita. 
                Cesi hadir sebagai solusi untuk membantu Anda memahami dan mengatasi depresi. 
                Kami menyediakan solusi yang disesuaikan dengan tingkat depresi Anda, 
                membantu Anda melangkah menuju kesejahteraan mental yang lebih baik.
                </p>
              <!-- <a class="btn btn-lg btn-primary rounded-pill" href="#!" role="button">Make an Appointment</a> -->
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="fitur">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/fitur.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">FITUR</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="bg-secondary">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6"><img class="img-fluid" src="assets/img/gallery/main 1.png" alt="..." /></div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
              <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Apasih yang ada dalam website ini ??</h2>
              <p class="text-light">Website ini dirancang khusus untuk memberikan pengalaman pribadi 
                dan bermanfaat kepada setiap pengguna. Fitur-fitur canggih di website ini memberikan insight yang mendalam terkait kesehatan mental Anda. 
                Dengan menganalisis faktor-faktor seperti gender, usia, status pernikahan, jumlah anak, dan jenjang pendidikan terakhir, 
                kami dapat menyajikan informasi yang lebih terarah dan solusi yang lebih tepat sesuai dengan kebutuhan unik Anda.<br class="d-none d-sm-block" /><br class="d-none d-sm-block" /></p>
              <!-- <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="#!" role="button">Learn more </a></div> -->
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" id="analisis">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/analisis.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">ANALISIS</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/about-bg.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="assets/img/gallery/main 2.png" alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
              <h2 class="fw-bold mb-4">Alasan Website Dibuat dan Metode Analisis yang Digunakan</h2>
              <p>Website ini lahir dari keinginan kami untuk memberikan kontribusi positif dalam upaya pencegahan bunuh diri di Indonesia. 
                Kami memilih metode analisis Naive Bayes karena keefektifannya dalam menangani kumpulan data besar dan kompleks. 
                Metode ini memungkinkan kami untuk mengeksplorasi hubungan antara faktor-faktor tertentu dan kondisi kesehatan mental 
                dengan pendekatan yang lebih sistematis. Dengan demikian, kami dapat menyajikan informasi statistik yang tidak hanya informatif 
                tetapi juga dapat digunakan untuk mengembangkan strategi pencegahan yang lebih efektif.</p>
              <div class="py-3">
                <!-- <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Learn more </button> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="informasi">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/informasi.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">INFORMASI</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-8">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center offset-sm-1">
            <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100">
                    <div class="col-sm-12 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Kenali Gejala Depresi</h2>
                      <p>Mengidentifikasi gejala depresi adalah langkah pertama yang krusial. Gejala dapat bervariasi dari perubahan mood, kehilangan minat pada aktivitas yang biasanya dinikmati, hingga gangguan tidur dan nafsu makan. Dengan mengenali gejala, Anda dapat lebih cepat mencari bantuan dan memulai perjalanan pemulihan.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="row h-100">
                    <div class="col-sm-12 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Bicarakan dengan Orang Terdekat</h2>
                      <p>Mengatasi depresi bukan perjalanan yang harus dihadapi sendirian. Berbicara dengan teman, keluarga, atau orang terpercaya dapat memberikan dukungan yang sangat dibutuhkan. Komunikasi terbuka dapat membantu mengurangi isolasi dan membangun jaringan sosial yang mendukung.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100">
                    <div class="col-sm-12 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Temukan Aktivitas Pemulihan</h2>
                      <p>Identifikasi kegiatan yang dapat memberikan ketenangan dan kegembiraan. Olahraga teratur, seni, atau kegiatan relaksasi dapat membantu mengurangi tingkat stres dan meningkatkan kesejahteraan emosional. Temukan apa yang cocok untuk Anda dan lakukan secara konsisten.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100">
                    <div class="col-sm-12 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Konsultasi Profesional</h2>
                      <p>Jangan ragu untuk mencari bantuan dari profesional kesehatan mental. Terapis atau psikiater dapat memberikan dukungan ahli dan merancang rencana perawatan yang sesuai dengan kebutuhan individu Anda. Kombinasi terapi bicara dan, jika diperlukan, pengobatan dapat membantu mengatasi depresi.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100">
                    <div class="col-sm-12 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Jaga Keseimbangan Hidup</h2>
                      <p>Aspek-aspek seperti tidur yang cukup, pola makan sehat, dan manajemen stres berperan penting dalam kesehatan mental. Kami menyediakan saran praktis untuk membantu Anda menjaga keseimbangan ini, menciptakan fondasi yang kuat untuk perjalanan pemulihan Anda.
                      </p>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="position-relative z-index-2 mt-5">
                  <ol class="carousel-indicators">
                    <li class="active" data-bs-target="#carouselPeople" data-bs-slide-to="0"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="2"> </li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="3"> </li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="4"> </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="cobacek">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/cobacek.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">COBA CEK</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-8">
        <div class="container">
          <div class="row">
            <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:bottom right;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="col-lg-6 z-index-2 mb-5"><img class="w-100" src="assets/img/gallery/appointment.png" alt="..." /></div>
            <div class="col-lg-6 z-index-2">
              <form class="row g-3" action="hasil.php" method="get" id="form">
                <div class="col-md-6">
                  <label class="visually-hidden" for="nama">Nama</label>
                  <input class="form-control form-livedoc-control" id="nama" type="text" placeholder="Nama" required="required" name="nama"/>
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="wa">Nomor WhatsApp</label>
                  <input class="form-control form-livedoc-control" id="wa" type="text" placeholder="Nomor WhatsApp" name="wa"/>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="email">Email</label>
                  <input class="form-control form-livedoc-control" id="email" type="email" placeholder="Email" required="required" name="email"/>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="jenisk" >Jenis Kelamin</label>
                  <select class="form-select" id="jenisk" required="required" name="jenisk">
                    <option disabled selected value="">Jenis Kelamin</option>
                    <option value="0">Laki-laki</option>
                    <option value="1">Perempuan</option>
                  </select>                  
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="umur">Umur</label>
                  <input class="form-control form-livedoc-control" id="umur" type="text" placeholder="Umur" required="required" name="umur"/>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="pendidikan">Pendidikan Terakhir</label>
                  <select class="form-select" id="pendidikan" required="required" name="pendidikan">
                    <option disabled selected value="">Pendidikan Terakhir</option>
                    <option value="0"> Tidak bersekolah</option>
                    <option value="1"> Taman kanak-kanak</option>
                    <option value="7"> SD sederajat</option>
                    <option value="10"> SMP sederajat</option>
                    <option value="13"> SMA sederajat</option>
                    <option value="16"> S1 sederajat</option>
                    <option value="20"> S2 sederajat</option>
                  </select>
                  
                </div>
                <!-- <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputEmail">Jumlah Anak</label>
                  <input class="form-control form-livedoc-control" id="inputAnak" type="text" placeholder="Jumlah Anak" required="required"/>
                </div> -->
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="menikah">Sudah Menikah</label>
                  <select class="form-select" id="menikah" required="required" name="menikah">
                    <option disabled selected value="">Sudah Menikah</option>
                    <option value="1"> Sudah</option>
                    <option value="0"> Belum</option>
                  </select>
                </div>
                <!-- <div class="col-md-12">
                  <label class="form-label visually-hidden" for="pesan">Pesan</label>
                  <textarea class="form-control form-livedoc-control" id="pesan" placeholder="Pesan" style="height: 250px;" id="pesan"></textarea>
                </div> -->
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary rounded-pill" type="submit" name="kirim">Kirim</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-primary">

          <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-4">
              <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Pemrograman Deklaratif, 2023</p>
              </div>
              <div class="col-12 col-sm-8 col-md-6">
                <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                  <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                  </svg>&nbsp;by&nbsp;<a class="fw-bold text-info" href="https://themewagon.com/" target="_blank">Kelompok 7 </a>
                </p>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  </body>

</html>