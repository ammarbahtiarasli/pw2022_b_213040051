<?php
session_start();
require 'functions.php';
require './layouts/header.php';
require './components/navbar_admin.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$kategori = query("SELECT * FROM kategori");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $kategori = cari_kategori($_POST["keyword"]);
}
?>


<!-- Page kategori sejarah -->
<div class="container my-3">
    <h2>Daftar Kategori</h2>
    <div class="d-flex justify-content-between col-lg mt-3">
        <a href="tambah_kategori.php" class="btn btn-success-light">Tambah Data Kategori</a>
        <form action="#" method="POST">
            <div class="input-group">
                <input type="text" placeholder="Cari ..." name="keyword" class="form-control" autocomplete="off">
                <button type="submit" name="cari" hidden></button>
            </div>
        </form>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <table class="table table-responsive table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kategori as $k) : ?>
                        <tr class="align-middle">
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k['nama_kategori']; ?></td>
                            <td>
                                <a href="ubah_kategori.php?id_kategori=<?= $k["id_kategori"]; ?>" class="btn btn-warning-light">Ubah</a>
                                <a href="hapus_kategori.php?id_kategori=<?= $k["id_kategori"]; ?>" class="btn btn-danger-light">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Page Users Admin -->

<?php
require './layouts/script.php';
require './components/footer.php';
?>
