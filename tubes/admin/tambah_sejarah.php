<?php
require '../functions.php';
require '../layouts/header.php';
require '../components/navbar_admin.php';
// Cek apakah tombol tambah di klik
if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = '../admin/sejarah_teknologi.php';
            </script>";
    }
}

$kategori = query("SELECT * FROM kategori");
?>


<div class="container my-3">
    <h2>Form Tambah Data Sejarah</h2>
    <a href="javascript: history.back()" class="btn btn-light"> &laquo; Kembali ke Daftar Sejarah</a>
    <div class="row mt-3">
        <div class="col-sm-12 col-lg-8">
            <form action="" method="POST" autocomplete="off">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required autofocus>
                </div>
                <div class=" mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea type="text" class="form-control" id="body" name="body" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="kategori" id="kategori" name="kategori" required>
                        <option selected disabled>Pilih Kategori</option>
                        <?php foreach ($kategori as $k) : ?>
                            <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    <p>Extension upload file : .jpg, .png, .jpeg</p>
                </div>
                <button type="submit" name="tambah" class="btn btn-success-light">Tambah Data Sejarah</button>
            </form>
        </div>
    </div>

</div>

<?php
require '../layouts/script.php';
require '../components/footer.php';
?>
