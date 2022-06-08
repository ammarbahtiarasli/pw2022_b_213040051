<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
require './layouts/header.php';
require './components/navbar_admin.php';

$users = query("SELECT * FROM users NATURAL JOIN level");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $users = cari_user($_POST["keyword"]);
}
?>

<!-- Page Users Admin -->
<div class="container my-3">
    <h2>Daftar Pengguna</h2>
    <div class="d-flex justify-content-between col-lg col-md col-12 mt-3">
        <form action="#" method="POST">
            <div class="input-group">
                <input type="text" placeholder="Cari ..." name="keyword" class="form-control" autocomplete="off">
                <button type="submit" name="cari" hidden></button>
            </div>
        </form>
        <a href="cetak_users.php" target="_blank" class="btn btn-light">Export PDF</a>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <table class="table table-responsive table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Level</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $u) : ?>
                        <tr class="align-middle">
                            <th scope="row"><?= $i++; ?></th>
                            <td>
                                <img src="./img/<?= $u['gambar']; ?>" width="125px" alt="gambar">
                            </td>
                            <td><?= $u['username']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><?= $u['nama_level']; ?></td>
                            <td>
                                <a href="ubah_user.php?id_user=<?= $u['id_user']; ?>" class="btn btn-warning-light">Ubah</a>
                                <a href="hapus_user.php?id_user=<?= $u['id_user']; ?>" class="btn btn-danger-light">Hapus</a>
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
require './components/footer.php';
require './layouts/script.php';
?>
