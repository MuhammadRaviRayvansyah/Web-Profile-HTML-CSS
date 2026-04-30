<?php
include "koneksi.php";

$nama = $_POST['nama'];
$usia = $_POST['usia'];
$email = $_POST['email'];
$no_telepon = $_POST['no_telepon'];
$pesan = $_POST['pesan'];

$nama_file = $_FILES['file']['name'];
$tmp_file = $_FILES['file']['tmp_name'];

$folder = "upload/";

// jika folder upload belum ada
if (!file_exists($folder)) {
    mkdir($folder, 0777, true);
}

// upload file jika ada
if ($nama_file != "") {
    move_uploaded_file($tmp_file, $folder . $nama_file);
}

$query = "INSERT INTO pesan 
(nama, email, usia, no_telepon, pesan, file)
VALUES
('$nama', '$email', '$usia', '$no_telepon', '$pesan', '$nama_file')";

//proses debugging
if (mysqli_query($conn, $query)) {
    echo "<h1 style='color:green;'>BERHASIL! Data berhasil masuk ke database.</h1>";
    echo "<a href='pesan_masuk.php'>Klik di sini untuk melihat data</a>";
} else {
    echo "<h1 style='color:red;'>GAGAL DISIMPAN! Terjadi kesalahan MySQL:</h1>";
    echo "<p><b>Error:</b> " . mysqli_error($conn) . "</p>";
    echo "<p><b>Query:</b> " . $query . "</p>";
    echo "<button onclick='history.back()'>Kembali ke Form</button>";
}
?>