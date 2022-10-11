<?php
include 'head.php';
// memanggil koneksi pada database
include 'koneksi.php';
// mengambil data dari URL
$nidn = $_GET['id'];
// mengambil data berdasarkan nim
$result = mysqli_query($conn, "SELECT * FROM dosen WHERE nidn=$nidn");
while ($data = mysqli_fetch_array($result)) {
    $nidn = $data['nidn'];
    $nama_dosen = $data['nama_dosen'];
    $alamat = $data['alamat'];
    $tempat_lahir = $data['tempat_lahir'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $hobi = $data['hobi'];
    $pendidikan_terakhir = $data['pendidikan_terakhir'];
    $keahlian = $data['keahlian'];
    $status = $data['status'];
}
?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Data Dosen</h5>
                    <div class="card-body">
                    <h5 class="card-title">NIDN : <?= $nidn ?></h5>
                        <p class="card-text">Nama Dosen : <?= $nama_dosen ?></p>
                        <p class="card-text">Alamat : <?= $alamat ?></p>
                        <p class="card-text">Tempat Lahir : <?= $tempat_lahir ?></p>
                        <p class="card-text">Tangga lahir : <?= $tanggal_lahir ?></p>
                        <p class="card-text">Hobi : <?= $hobi ?></p>
                        <p class="card-text">Pendidikan Terakhir : <?= $pendidikan_terakhir?></p>
                        <p class="card-text">Keahlian : <?= $keahlian?></p>
                        <p class="card-text">Status : <?= $status?></p>
                            <a href="dosen.php" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include 'footer.php'; ?>