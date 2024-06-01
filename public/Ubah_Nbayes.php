<?php 
$connect = mysqli_connect("localhost", "root", "", "cesi");
if (!$connect) {
    echo "Koneksi Gagal";
    die;
}

for ($j = 1; $j <= 1429; $j++) {
    $result = mysqli_query($connect, "SELECT djenisk, dumur, dmenikah, dpendidikan, ddepresi FROM dataset WHERE id = $j");
    ini_set('max_execution_time', 600);
    $row = mysqli_fetch_assoc($result);
    $kolom1 = $row['djenisk'];
    $kolom2 = $row['dumur'];
    $kolom3 = $row['dmenikah'];
    $kolom4 = $row['dpendidikan'];
    $kolom5 = $row['ddepresi'];

    if ($kolom2 < 30) {
        $out1 = 0;
    } else {
        $out1 = 1;
    }

    if ($kolom4 < 9) {
        $out2 = 0;
    } else {
        $out2 = 1;
    }

    $kombinasi1 = $kolom1 . $out1 . $kolom3 . $out2;
    $kombinasi2 = $kolom5 . $kolom1 . $out1 . $kolom3 . $out2;

    mysqli_query($connect, "UPDATE analisis SET depresi = $kolom5, jenisk = $kolom1, umur = $out1, menikah = $kolom3, pendidikan = $out2, kombinasi_input = '$kombinasi1', kombinasi_inout = '$kombinasi2' WHERE id = $j");
}
?>