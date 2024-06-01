<?php
  $connect = mysqli_connect("localhost", "root", "", "cesi");
  if (!$connect) {
      echo "Koneksi Gagal";
      die;
  }

$sum0000 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '0000'");
$sum0000_row = mysqli_fetch_array($sum0000)[0];
$sum0001 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '0001'");
$sum0001_row = mysqli_fetch_array($sum0001)[0];
$sum0010 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '0010'");
$sum0010_row = mysqli_fetch_array($sum0010)[0];
$sum0011 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '0011'");
$sum0011_row = mysqli_fetch_array($sum0011)[0];
$sum0100 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '0100'");
$sum0100_row = mysqli_fetch_array($sum0100)[0];
$sum0101 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '0101'");
$sum0101_row = mysqli_fetch_array($sum0101)[0];
$sum0110 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '0110'");
$sum0110_row = mysqli_fetch_array($sum0110)[0];
$sum0111 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '0111'");
$sum0111_row = mysqli_fetch_array($sum0111)[0];

$sum1000 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '1000'");
$sum1000_row = mysqli_fetch_array($sum1000)[0];
$sum1001 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '1001'");
$sum1001_row = mysqli_fetch_array($sum1001)[0];
$sum1010 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '1010'");
$sum1010_row = mysqli_fetch_array($sum1010)[0];
$sum1011 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '1011'");
$sum1011_row = mysqli_fetch_array($sum1011)[0];
$sum1100 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '1100'");
$sum1100_row = mysqli_fetch_array($sum1100)[0];
$sum1101 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '1101'");
$sum1101_row = mysqli_fetch_array($sum1101)[0];
$sum1110 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '1110'");
$sum1110_row = mysqli_fetch_array($sum1110)[0];
$sum1111 = mysqli_query($connect, "SELECT COUNT(kombinasi_input) FROM analisis WHERE kombinasi_input = '1111'");
$sum1111_row = mysqli_fetch_array($sum1111)[0];

$sum_total_data = mysqli_query($connect, "SELECT COUNT(depresi) FROM analisis");
$sum_total_data_row = mysqli_fetch_array($sum_total_data)[0];
$sum_output_1 = mysqli_query($connect, "SELECT COUNT(depresi) FROM analisis WHERE depresi = 1");
$sum_output_1_row = mysqli_fetch_array($sum_output_1)[0];
$sum_output_0 = mysqli_query($connect, "SELECT COUNT(depresi) FROM analisis WHERE depresi = 0");
$sum_output_0_row = mysqli_fetch_array($sum_output_0)[0];

$jenisk = $_GET['jenisk'];
$umur = $_GET['umur'];
$pendidikan = $_GET['pendidikan'];
$menikah = $_GET['menikah'];
$email = $_GET['email'];
$nama = $_GET['nama'];
$wa = isset($_GET['wa']) && $_GET['wa'] !== '' ? $_GET['wa'] : 'Nomor WhatsApp Tidak Tersedia';
$pesan = isset($_GET['pesan']) && $_GET['pesan'] !== '' ? $_GET['pesan'] : 'Pesan Default';


if ($umur < 30) {
$umur_out = '0';
} else {
$umur_out = '1';
}
if ($pendidikan < 9) {
$pendidikan_out = '0';
} else {
$pendidikan_out = '1';
}

$kombinasi_input = $jenisk . $umur_out . $menikah . $pendidikan_out;

if ($kombinasi_input == "0000") {
    $pA = $sum0000_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '10000'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '00000'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "0001") {
    $pA = $sum0001_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '10001'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '00001'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "0010") {
    $pA = $sum0010_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '10010'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '00010'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "0011") {
    $pA = $sum0011_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '10011'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '00011'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "0100") {
    $pA = $sum0100_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '10100'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '00100'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "0101") {
    $pA = $sum0101_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '10101'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '00101'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "0110") {
    $pA = $sum0110_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '10110'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '00110'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "0111") {
    $pA = $sum0111_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '10111'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '00111'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}

elseif ($kombinasi_input == "1000") {
    $pA = $sum1000_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '11000'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '01000'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "1001") {
    $pA = $sum1001_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '11001'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '01001'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "1010") {
    $pA = $sum1010_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '11010'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '01010'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "1011") {
    $pA = $sum1011_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '11011'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '01011'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "1100") {
    $pA = $sum1100_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '11100'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '01100'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "1101") {
    $pA = $sum1101_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '11101'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '01101'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "1110") {
    $pA = $sum1110_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '11110'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '01110'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}elseif ($kombinasi_input == "1111") {
    $pA = $sum1111_row / $sum_total_data_row;
    $query_b1 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '11111'");
    $pB1 = (int) mysqli_fetch_row($query_b1)[0] / $sum_output_1_row;
    $query_b0 = mysqli_query($connect, "SELECT COUNT(kombinasi_inout) FROM analisis WHERE kombinasi_inout = '01111'");
    $pB0 = (int) mysqli_fetch_row($query_b0)[0] / $sum_output_0_row;
    $pengali = $pA * $pB1;
    $pembagi = $pA * $pB0;
    $hasil = $pengali / ($pengali + $pembagi);
}

if ($hasil >= 0 && $hasil < 0.2) {
  $result = mysqli_query($connect, "SELECT teks1, teks2 FROM teks WHERE no_teks = '1'");
}elseif ($hasil >= 0.2 && $hasil < 0.4) {
  $result = mysqli_query($connect, "SELECT teks1, teks2 FROM teks WHERE no_teks = '2'");
}elseif ($hasil >= 0.4 && $hasil < 0.6) {
  $result = mysqli_query($connect, "SELECT teks1, teks2 FROM teks WHERE no_teks = '3'");
}elseif ($hasil >= 0.6 && $hasil < 0.8) {
  $result = mysqli_query($connect, "SELECT teks1, teks2 FROM teks WHERE no_teks = '4'");
}elseif ($hasil >= 0.8 && $hasil < 1) {
  $result = mysqli_query($connect, "SELECT teks1, teks2 FROM teks WHERE no_teks = '5'");
}

function fuzzyLogic($value, $low, $high) {
  $membership = 0;

  if ($value <= $low) {
      $membership = 1;
  } elseif ($value > $low && $value < $high) {
      $membership = ($high - $value) / ($high - $low);
  } elseif ($value >= $high) {
      $membership = 0;
  }

  return $membership;
}

// $teksCategory = 0;

$membershipLow = fuzzyLogic($hasil, 0.15, 0.2);
$membershipMediumLow = fuzzyLogic($hasil, 0.2, 0.4);
$membershipMedium = fuzzyLogic($hasil, 0.4, 0.6);
$membershipMediumHigh = fuzzyLogic($hasil, 0.6, 0.8);
$membershipHigh = fuzzyLogic($hasil, 0.8, 1);

// // Menentukan kategori berdasarkan membership tertinggi
$maxMembership = max($membershipLow, $membershipMediumLow, $membershipMedium, $membershipMediumHigh, $membershipHigh);

// if ($maxMembership == $membershipLow) {
//   $teksCategory = 1;
// } elseif ($maxMembership == $membershipMediumLow) {
//   $teksCategory = 2;
// } elseif ($maxMembership == $membershipMedium) {
//   $teksCategory = 3;
// } elseif ($maxMembership == $membershipMediumHigh) {
//   $teksCategory = 4;
// } elseif ($maxMembership == $membershipHigh) {
//   $teksCategory = 5;
// }

// $result = mysqli_query($connect, "SELECT teks1, teks2 FROM teks WHERE no_teks = '$teksCategory'");

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $teks1 = $row['teks1'];
  $teks2 = $row['teks2'];
  // Gunakan $teks1 dan $teks2 sesuai kebutuhan
} else {
  "teks tidak ada";
}

// echo "Membership Low: $membershipLow<br>";
// echo "Membership MediumLow: $membershipMediumLow<br>";
// echo "Membership Medium: $membershipMedium<br>";
// echo "Membership MediumHigh: $membershipMediumHigh<br>";
// echo "Membership High: $membershipHigh<br>";


mysqli_query($connect, "INSERT INTO hasil (jenisk, umur, pendidikan, menikah, hasil, nama, wa, email, pesan) VALUES 
($jenisk, $umur, $pendidikan, $menikah, '$hasil', '$nama', '$wa', '$email', '$pesan')");
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
        <div class="container"><a class="navbar-brand" href="index.php"><img src="assets/img/gallery/logo.png" width="118" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          </div>
        </div>
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/gallery/main 4.png" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">Hallo <strong> <?php echo $nama; ?> </strong>.</h1>
              <p class="fs-1 mb-5">
                <?php echo $teks1; ?>
                </p>
              <!-- <a class="btn btn-lg btn-primary rounded-pill" href="#!" role="button">Make an Appointment</a> -->
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
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/saran.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">SARAN</h1>
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
            <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="assets/img/gallery/main 5.png" alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
              <h2 class="fw-bold mb-4">Saran Kami kepada Kamu</h2>
              <p>
              <?php echo $teks2; ?>
              <br>
              <br>
              <p>Jika Anda membutuhkan bantuan profesional atau ingin berbicara dengan seorang ahli psikologi, kami siap membantu. 
                Silakan klik tombol di bawah ini:</p>
              </p>
              <div class="py-3">
                <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Nomor Kontak </button>
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