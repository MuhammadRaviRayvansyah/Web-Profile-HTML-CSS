<?php
include "koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM pesan ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pesan Masuk</title>
</head>
<body>
    <h2>Data Pesan Masuk</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Umur</th>
            <th>No Telepon</th>
            <th>Pesan</th>
            <th>File</th>
            <th>Tanggal</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['usia']; ?></td> 
            <td><?= $row['no_telepon']; ?></td>
            <td><?= $row['pesan']; ?></td>
            <td><?= $row['file']; ?></td> 
            <td><?= $row['tanggal']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>