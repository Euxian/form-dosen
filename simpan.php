<?php
// memanggil koneksi pada database
include 'koneksi.php';
// mengambil data dari URL
$nidn = $_GET['id'];
// Delete data Mahasiswa
$result = mysqli_query($conn, "DELETE FROM dosen WHERE nidn=$nidn");
// kembali ke tampilan home setelah data dihapus
header('Location:dosen.php');
?>