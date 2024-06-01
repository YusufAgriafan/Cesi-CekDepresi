<?php
$connect = mysqli_connect("localhost", "root", "", "cesi");

if (!$connect) {
    echo "Koneksi Gagal";
    die;
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
    <title>Cesi | Tampilan Hasil</title>
</head>
<body>
<div class="container pt-4">
    <div class="card">
        <div class="card-header text-bg-primary text-white">TAMPILAN HASIL</div>
        <div class="m-3">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>WA</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Menikah</th>
                        <th>Pendidikan</th>
                        <th>Hasil</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($connect, "SELECT * FROM hasil");
                    while($row = mysqli_fetch_assoc($data)):
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['wa'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['jenisk'] ?></td>
                        <td><?= $row['umur'] ?></td>
                        <td><?= $row['menikah'] ?></td>
                        <td><?= $row['pendidikan'] ?></td>
                        <td><?= $row['hasil'] ?></td>
                        <td><?= $row['pesan'] ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
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

