<?php
session_start();
require './functions.php';
require './layouts/header.php';
require './components/navbar_admin.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// pagination
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM sejarah_teknologi"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$sejarah = query("SELECT * FROM sejarah_teknologi  NATURAL JOIN kategori ORDER BY id_sejarah DESC LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $sejarah = cari($_POST["keyword"]);
}
?>

<div class="container my-3">
    <h2>Daftar Sejarah Teknologi</h2>
    <div class="d-flex justify-content-between col-lg col-sm-12 mt-3">
        <a href="tambah_sejarah.php?tambah_sejarah" class="btn btn-success-light">Tambah Data Sejarah</a>
        <form action="#" method="POST">
            <div class="input-group">
                <select class="form-select bg-light" style="max-width:30%">
                    <option>Semua</option>
                    <option>Aplikasi</option>
                    <option>Handphone</option>
                    <option>Transportasi</option>
                    <option>Komputer</option>
                    <option>Lainnya</option>
                </select>
                <input type="text" placeholder="Cari ..." name="keyword" class="form-control" autofocus autocomplete="off">
                <button type="submit" name="cari" hidden></button>
            </div>
        </form>
        <a href="#" class="btn btn-light">Export PDF</a>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col" width="500px">Body</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($sejarah as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><img src="./img/<?= $s['gambar']; ?>" width="125px" alt="gambar"></td>
                            <td><?= $s['judul']; ?></td>
                            <td><?= (htmlspecialchars_decode(str_word_count($s['body']) > 60 ? substr($s['body'], 0, 250) . "..." : $s['body'])); ?></td>
                            <td><?= $s['nama_kategori']; ?></td>
                            <td><?= $s['tanggal']; ?></td>
                            <td class="d-flex">
                                <a href="ubah_sejarah.php?id_sejarah=<?= $s["id_sejarah"]; ?>" class="btn btn-warning-light">Ubah</a>
                                <a href="hapus_sejarah.php?id_sejarah=<?= $s["id_sejarah"]; ?>" class="btn btn-danger-light ms-2" onclick="return confirm('yakin ?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- navigasi -->
            <section class="d-flex mt-4">
                <nav class="ms-3">
                    <ul class="pagination">
                        <?php if ($halamanAktif > 1) : ?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $halamanAktif - 1; ?>">Sebelumnya</a></li>
                        <?php endif; ?>
                        <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                            <?php if ($i == $halamanAktif) : ?>
                                <li class="page-item active"><a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a></li>
                            <?php else : ?>
                                <li class="page-item"><a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a></li>
                            <?php endif; ?>
                        <?php endfor; ?>
                        <?php if ($halamanAktif < $jumlahHalaman) : ?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $halamanAktif + 1; ?>">Selanjutnya</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </section>

        </div>
    </div>
</div>

<?php
require './components/footer.php';
require './layouts/script.php';
?>
