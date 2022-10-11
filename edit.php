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
                <div class="col-6">
                    <div class="card">
                        <h5 class="card-header">Data Dosen</h5>
                        <div class="card-body">
                        <form action="updatedosen.php" method="post">
                <div class="mb-3">
                <label for="exampleInputnim" class="formlabel">NIDN</label>
                <input type="text" class="form-control" id="nidn" name="nidn" value="<?= $nidn ?>">
                    </div>
                <div class="mb-3">
                    <label for="exampleInputnim" class="formlabel">Nama Dosen</label>
                    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?= $nama_dosen ?>">
                    </div>
                <div class="mb-3">
                <label for="exampleInputnim" class="formlabel">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $alamat ?>">
                    </div>
                <div class="mb-3">
                <label for="exampleInputnim" class="formlabel">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $tempat_lahir ?>">
                    </div>
                <div class="mb-3">
                <label for="exampleInputnim" class="formlabel">Tanggal Lahir</label>
                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $tanggal_lahir ?>">
                    </div>
                <div class="mb-3">
                <label for="exampleInputnim" class="formlabel">Hobi</label>
                <input type="text" class="form-control" id="hobi" name="hobi" value="<?= $hobi ?>">
                    </div>
                <div class="mb-3">
                <label for="exampleInputnim" class="formlabel">Pendidikan Terakhir</label>
                <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="<?= $pendidikan_terakhir ?>">
                    </div>
                <div class="mb-3">
                <label for="exampleInputnim" class="formlabel">Keahlian</label>
                <input type="text" class="form-control" id="keahlian" name="keahlian" value="<?= $keahlian ?>">
                    </div>
                <div class="mb-3">
                <label for="exampleInputnim" class="formlabel">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="<?= $status ?>">
                    </div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>