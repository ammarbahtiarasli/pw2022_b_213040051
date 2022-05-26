<?php
require './layouts/header.php';
require './components/navbar_admin.php';
?>


<!-- Page kategori sejarah -->
<div class="container my-3">
    <h2>Daftar Kategori</h2>
    <div class="d-flex justify-content-between col-lg mt-3">
<<<<<<< HEAD:tubes/kategori.php
        <a href="tambah_kategori.php" class="btn btn-success-light">Tambah Data Kategori</a>
=======
        <a href="#" class="btn btn-success-light">Data Kategori</a>
>>>>>>> f5be0b73f4c57eb39ef58a93a355aea6edc71c85:tubes/admin/kategori.php
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Nama Kategori</td>
                        <td>
                            <a href="" class="btn btn-warning-light">Ubah</a>
                            <a href="" class="btn btn-danger-light">Hapus</a>
                        </td>
                    </tr>
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
