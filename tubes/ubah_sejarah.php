<?php
require './functions.php';
require './layouts/header.php';
require './components/navbar_admin.php';

// ambil data dari uRL
$id_sejarah = $_GET["id_sejarah"];

// query data sejarah berdasarkan id_sejarah
$sejarah = query("SELECT * FROM sejarah_teknologi WHERE id_sejarah = $id_sejarah")[0];

// Cek apakah tombol tambah di klik
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_sejarah($_POST) > 0) {
        echo "<script>
            alert('data berhasil diubah');
            document.location.href = '../admin/sejarah_teknologi.php';
            </script>";
    } else {
        echo "<script>
            alert('data gagal diubah');
            document.location.href = '../admin/sejarah_teknologi.php';
            </script>";
    }
}

$kategori = query("SELECT * FROM kategori");
?>


<div class="container my-3">
    <h2>Form Ubah Data Sejarah</h2>
    <a href="javascript: history.back()" class="btn btn-light"> &laquo; Kembali ke Daftar Sejarah</a>
    <div class="row mt-3">
        <div class="col-sm-12 col-lg-8">
            <form action="" method="POST" autocomplete="off">
                <input type="hidden" name="id_sejarah" value="<?= $sejarah['id_sejarah']; ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required autofocus value="<?= $sejarah['judul']; ?>">
                </div>
                <div class=" mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required value="<?= $sejarah['tanggal']; ?>">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea type="text" class="form-control" id="body" name="body" required value="<?= $sejarah['body']; ?>"><?= $sejarah['body']; ?></textarea>
                </div>
                <div class=" mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="kategori" id="kategori" name="kategori" required>
                        <option selected disabled>Pilih Kategori</option>
                        <?php foreach ($kategori as $k) : ?>
                            <option value=" <?= $k['id_kategori']; ?>" <?= ($k['id_kategori'] == $sejarah['id_kategori'] ? 'selected' : '') ?>><?= $k['nama_kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $sejarah['gambar']; ?>">
                </div>
                <button type=" submit" name="ubah" class="btn btn-success-light">Ubah Data Sejarah</button>
            </form>
        </div>
    </div>

</div>

<?php
require './layouts/script.php';
require './components/footer.php';
?>
