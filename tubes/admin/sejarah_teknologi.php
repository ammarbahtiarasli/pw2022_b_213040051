<?php
require '../functions.php';
require '../layouts/header.php';
require '../components/navbar_admin.php';

$sejarah = query("SELECT * FROM sejarah_teknologi NATURAL JOIN kategori ORDER BY id_sejarah DESC");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $sejarah = cari($_POST["keyword"]);
}
?>

<div class="container my-3">
    <h2>Daftar Sejarah Teknologi</h2>
    <div class="d-flex justify-content-between col-lg col-sm-12 mt-3">
        <a href="../admin/tambah_sejarah.php" class="btn btn-success-light">Tambah Data Sejarah</a>
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
                            <td><img src="../img/<?= $s['gambar']; ?>" width="125px" alt="gambar"></td>
                            <td><?= $s['judul']; ?></td>
                            <td><?= (str_word_count($s['body']) > 60 ? substr($s['body'], 0, 250) . "..." : $s['body']); ?></td>
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

<?php
require '../components/footer.php';
require '../layouts/script.php';
?>
