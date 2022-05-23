<?php
require '../functions.php';
require '../layouts/header.php';
require '../components/navbar_admin.php';

$sejarah = query("SELECT * FROM sejarah_teknologi NATURAL JOIN kategori");
?>

<div class="container my-3">
    <h2>Daftar Sejarah Teknologi</h2>
    <div class="d-flex justify-content-between col-lg col-sm-12 mt-3">
        <a href="../admin/tambah_sejarah.php" class="btn btn-success-light">Tambah Data Sejarah</a>
        <form action="#">
            <div class="input-group">
                <select class="form-select bg-light" style="max-width:30%">
                    <option>Semua</option>
                    <option>Aplikasi</option>
                    <option>Handphone</option>
                    <option>Transportasi</option>
                    <option>Komputer</option>
                    <option>Lainnya</option>
                </select>
                <input type="text" placeholder="Cari ..." class="form-control" name="">
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
                        <th scope="col">Body</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sejarah as $s) : ?>
                        <tr>
                            <th scope="row"><?= $s['id_sejarah']; ?></th>
                            <td><?= $s['gambar']; ?></td>
                            <td><?= $s['judul']; ?></td>
                            <td><?= $s['body']; ?></td>
                            <td><?= $s['nama_kategori']; ?></td>
                            <td class="d-flex">
                                <a href="" class="btn btn-warning-light">Ubah</a>
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
