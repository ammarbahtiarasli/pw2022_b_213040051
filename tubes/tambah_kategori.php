<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require './functions.php';
require './layouts/header.php';
require './components/navbar_admin.php';
// Cek apakah tombol tambah di klik
if (isset($_POST["tambah"])) {
    if (tambah_kategori($_POST) > 0) {
        echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'kategori.php';
            </script>";
    }
}

$kategori = query("SELECT * FROM kategori");
?>


<div class="container my-3">
    <h2>Form Tambah Data kategori</h2>
    <a href="javascript: history.back()" class="btn btn-light"> &laquo; Kembali ke Daftar Kategori</a>
    <div class="row mt-3">
        <div class="col-sm-12 col-lg-8">
            <form action="" method="POST" autocomplete="off">
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required autofocus>
                </div>
                <button type="submit" name="tambah" class="btn btn-success-light">Tambah Data Sejarah</button>
            </form>
        </div>
    </div>

</div>

<?php
require './layouts/script.php';
require './components/footer.php';
?>
