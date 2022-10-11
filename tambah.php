<?php include 'head.php'; ?>
<div class="container">
<div class="row mt-3">
<div class="col-md-6">
<a href="dosen.php" class="btn btn-success">Kembali</a>
</div>
</div>
<div class="row mt-3">
<div class="col-12">
<div class="card">
<h5 class="card-header">Data Dosen</h5>
<div class="card-body">
<form action="dosen_simpan.php" method="post">
<div class="mb-3">
<label for="exampleInputnim" class="formlabel">Nidn</label>
<input type="text" class="form-control" id="nidn"
name="nidn">
</div>
<div class="mb-3">
<label for="exampleInputnim" class="formlabel">Nama dosen</label>
<input type="text" class="form-control" id="nama_dosen"
name="nama_dosen">
</div>
<div class="mb-3">
<label for="exampleInputnim" class="formlabel">Alamat</label>
<input type="text" class="form-control" id="alamat"
name="alamat">
</div>
<div class="mb-3">
<label for="exampleInputnim" class="formlabel">Tempat lahir</label>
<input type="text" class="form-control" id="tempat_lahir"
name="tempat_lahir">
</div>
<div class="mb-3">
<label for="exampleInputnim" class="formlabel">Tanggal lahir</label>
<input type="text" class="form-control" id="tanggal_lahir"
name="tanggal_lahir">
</div>
<div class="mb-3">
<label for="exampleInputnim" class="formlabel">Hobi</label>
<input type="text" class="form-control" id="hobi"
name="hobi">
</div>
<div class="mb-3">
<label for="exampleInputnim" class="formlabel">Pendidikan terakhir</label>
<input type="text" class="form-control" id="pendidikan_terakhir"
name="pendidikan_terakhir">
</div>
<div class="mb-3">
<label for="exampleInputnim" class="formlabel">Keahlian</label>
<input type="text" class="form-control" id="keahlian"
name="keahlian">
</div>
<div class="mb-3">
<label for="exampleInputnim" class="formlabel">Status</label>
<input type="text" class="form-control" id="status"
name="status">
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
<button type="reset" class="btn btn-primary">Batal</button>
</form>
</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>