<script href="assets/js/bootstrap.js"></script>

<?php 

$connect = mysqli_connect("localhost", "root", "", "cesi");

if (!$connect) {
    echo "Koneksi Gagal";
    die;
}

$TP = 0;
$TN = 0;
$FP = 0;
$FN = 0;

for ($j = 1; $j <= 1429; $j++) {
    ini_set('max_execution_time', 600);

    $result = mysqli_query($connect, "SELECT depresi, nbayes FROM testing WHERE id = $j");
    $row = mysqli_fetch_assoc($result);
    $depresi = $row['depresi'];
    $nbayes = $row['nbayes'];
    
    if ($depresi == 1 && $nbayes == 1) {
        $TP++;
    } else if ($depresi == 0 && $nbayes == 0) {
        $TN++;
    } else if ($depresi == 1 && $nbayes == 0) {
        $FN++;
    } else if ($depresi == 0 && $nbayes == 1) {
        $FP++;
    }
}

$total_nbayes = $TP + $TN + $FP + $FN;
if ($total_nbayes > 0) {
    $average_nbayes = (($TP + $TN) / $total_nbayes) * 100;
    $presisi_nbayes = $TP / ($TP + $FP);
    $recall_nbayes = $TP / ($TP + $FN);
    $Pnbayes = ($TP + $TN) / ($TP + $TN + $FP + $FN);
    mysqli_query($connect, "UPDATE akurasi SET TP = $TP, TN = $TN, FP = $FP, FN = $FN, akurasi = $Pnbayes, presisi = $presisi_nbayes, recall = $recall_nbayes WHERE id = 1");
} else {
    echo "Tidak ada akurasi nbayes";
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
    <title>Akurasi | Presisi | Recall</title>
</head>
<body>
<div class="container pt-4">
    <div class="card">
        <div class="card-header text-bg-primary text-white">Akurasi | Presisi | Recall</div>
        <div class="m-3">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>True Positive</th>
                        <th>True Negative</th>
                        <th>False Positive</th>
                        <th>False Negative</th>
                        <th>Akurasi</th>
                        <th>Presisi</th>
                        <th>Recall</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($connect, "SELECT * FROM akurasi");
                    while($row = mysqli_fetch_assoc($data)):
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['TP'] ?></td>
                        <td><?= $row['TN'] ?></td>
                        <td><?= $row['FP'] ?></td>
                        <td><?= $row['FN'] ?></td>
                        <td><?= $row['akurasi'] ?></td>
                        <td><?= $row['presisi'] ?></td>
                        <td><?= $row['recall'] ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<br>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="./testing.php" class="btn btn-primary" role="button">Kembali</a>
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