<?php
$connect = mysqli_connect("localhost", "root", "", "cesi");
if (!$connect) {
    echo "Koneksi Gagal";
    die;
}

for ($j = 1; $j <= 1429; $j++) {
    // ini_set('max_execution_time', 900);

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

    $result = mysqli_query($connect, "SELECT jenisk, umur, menikah, pendidikan FROM testing WHERE id = $j");
    $row = mysqli_fetch_assoc($result);
    $jenisk = $row['jenisk'];
    $umur = $row['umur'];
    $menikah = $row['menikah'];
    $pendidikan = $row['pendidikan'];

            
        $kombinasi_input = $jenisk . $umur . $menikah . $pendidikan;

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

    if ($hasil < 0.5) {
        $hout = 0;
    } else {
        $hout = 1;
    }

    mysqli_query($connect, "UPDATE testing SET nbayes = '$hout' WHERE id = $j");
    mysqli_query($connect, "UPDATE testing SET kombinasi = '$kombinasi_input' WHERE id = $j");     
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css1/bootstrap.css">
    <title>Data Testing</title>
</head>
<body>
<div class="container pt-4">
    <div class="card">
        <div class="card-header text-bg-primary text-white">Data Testing</div>
        <div class="m-3">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Menikah</th>
                        <th>Pendidikan</th>
                        <th>depresi</th>
                        <th>Naive Bayes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($connect, "SELECT * FROM testing");
                    while($row = mysqli_fetch_assoc($data)):
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['jenisk'] ?></td>
                        <td><?= $row['umur'] ?></td>
                        <td><?= $row['menikah'] ?></td>
                        <td><?= $row['pendidikan'] ?></td>
                        <td><?= $row['depresi'] ?></td>
                        <td><?= $row['nbayes'] ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<br>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="./akurasi.php" class="btn btn-primary" role="button">Cek Akurasi</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>

</body>
</html>