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
?>


<!-- Page kategori sejarah -->
<div class="container my-3">
    <h2>Daftar Kategori</h2>
    <div class="d-flex justify-content-between col-lg mt-3">
        <a href="tambah_kategori.php" class="btn btn-success-light">Tambah Data Kategori</a>
        <form action="#">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Cari  ...">
            </div>
        </form>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <table class="table table-responsive table-bordered">
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
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k['nama_kategori']; ?></td>
                            <td>
                                <a href="" class="btn btn-warning-light">Ubah</a>
                                <a href="" class="btn btn-danger-light">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <section class="d-flex mt-4">
                <nav class="ms-3">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">2</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Selanjutnya</a>
                        </li>
                    </ul>
                </nav>
            </section>

        </div>
    </div>
</div>
<!-- End Page Users Admin -->

<?php
require './layouts/script.php';
require './components/footer.php';
?>
