<?php
// memanggil koneksi pada database
include 'koneksi.php';
// Menerima data dari form
$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama_dosen'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$hobi = $_POST['hobi'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$keahlian= $_POST['keahlian'];
$status = $_POST['status'];
// update data dosen
$result = mysqli_query(
    $conn,
    "UPDATE dosen SET
    nama_dosen='$nama_dosen',alamat='$alamat',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',hobi='$hobi
    ' WHERE nim=$nim"
    );
    // kembali ke tampilan home
    header('Location: mahasiswa.php');
    ?>
    