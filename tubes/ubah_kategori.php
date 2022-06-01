<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require './functions.php';
require './layouts/header.php';
require './components/navbar_admin.php';

// ambil data dari uRL
$id_kategori = $_GET["id_kategori"];

// query data sejarah berdasarkan id_sejarah
$kategori = query("SELECT * FROM kategori WHERE id_kategori = $id_kategori")[0];

// Cek apakah tombol tambah di klik
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_kategori($_POST) > 0) {
        echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'kategori.php';
            </script>";
    } else {
        echo "<script>
            alert('data gagal diubah');
            document.location.href = 'kategori.php';
            </script>";
    }
}
?>


<div class="container my-3">
    <h2>Form Ubah Data Kategori</h2>
    <a href="javascript: history.back()" class="btn btn-light"> &laquo; Kembali ke Daftar Kategori</a>
    <div class="row mt-3">
        <div class="col-sm-12 col-lg-8">
            <form action="" method="POST" autocomplete="off">
                <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori']; ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required autofocus value="<?= $kategori['nama_kategori']; ?>">
                </div>
                <button type=" submit" name="ubah" class="btn btn-success-light">Ubah Data Kategori</button>
            </form>
        </div>
    </div>

</div>

<?php
require './layouts/script.php';
require './components/footer.php';
?>
