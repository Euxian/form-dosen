<?php
include 'head.php';
// memanggil koneksi pada database
include 'koneksi.php';
// memunculkan semua data dosen dari database
$result = mysqli_query($conn, 'SELECT * FROM dosen ORDER BY nidn ASC');
?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="tambahdosen.php" class="btn btn-success">Tambah Data
Dosen</a>
        </div>
    </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Data Dosen</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                                <th scope="col">NIDN</th>
                                <th scope="col">Nama Dosen</th>
                                <th scope="col">Keahlian</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                                    </tr>
                            </thead>
                            <tbody>
                                    <tr>
                <?php while (
                $data = mysqli_fetch_array($result)
                ) { ?>
                <tr>
                <td><?= $data['nidn'] ?></td>
                <td><?= $data['nama_dosen'] ?></td>
                <td><?= $data['keahlian'] ?></td>
                <td><?= $data['status']?></td>
                <td><a href="detaildosen.php?id=<?= $data['nidn']?>"
class="btn btn-warning">Detail</a> | <a href="edit.php?id=<?= $data['nidn']?>"
class="btn btn-primary">Edit</a> | <a href="hapus.php?id=<?= $data['nidn']?>"
class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data?');">Delete</a></td></tr>
                            <?php } ?>
                            </tr>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>