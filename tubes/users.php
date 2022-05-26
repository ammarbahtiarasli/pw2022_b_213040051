<?php
require './layouts/header.php';
require './components/navbar_admin.php';
?>

<!-- Page Users Admin -->
<div class="container my-3">
    <h2>Daftar Pengguna</h2>
    <div class="d-flex justify-content-between col-lg col-md col-12 mt-3">
        <a href="tambah_user.php" class="btn btn-success-light">Tambah Data Pengguna</a>
        <form action="#">
            <div class="input-group">
                <select class="form-select bg-light" style="max-width:30%">
                    <option>Semua</option>
                    <option>Admin</option>
                    <option>User</option>
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
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Level</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>gambar.jpg</td>
                        <td>Judul</td>
                        <td>Body</td>
                        <td>Body</td>
                        <td>Kategori</td>
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
require './components/footer.php';
require './layouts/script.php';
?>
