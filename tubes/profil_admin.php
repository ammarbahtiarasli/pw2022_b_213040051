<?php
session_start();
require 'functions.php';
require './layouts/header.php';
require './components/navbar_admin.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$user = query("SELECT * FROM users NATURAL JOIN level WHERE id_user = '$_SESSION[id_user]'")[0];

?>

<!-- Page Profil-->
<section class="padding-y bg-light">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profil</li>
            </ol>
        </nav>

        <div class="row">
            <aside class="col-lg-3 col-xl-3">
                <!--  COMPONENT MENU LIST  -->
                <nav class="nav flex-lg-column nav-pills mb-4 d-sm-none d-lg-block ">
                    <a class="nav-link active" href="#">Profil</a>
                    <a class="nav-link" href="logout.php">Keluar</a>
                </nav>
                <!--   COMPONENT MENU LIST END .//   -->
            </aside>
            <main class="col-lg-9">
                <article class="card">
                    <div class="card-body">

                        <form action="" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row gx-3">
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control" type="text" value="<?= $user['username']; ?>">
                                        </div> <!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="text" value="<?= $user['email']; ?>">
                                        </div> <!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Level</label>
                                            <input class="form-control" type="text" value="<?= $user['nama_level']; ?>" disabled>
                                        </div> <!-- col .// -->
                                    </div> <!-- row.// -->
                                    <button type="submit" name="ubah" class="btn btn-success-light mt-2">Simpan Perubahan</button>
                                </div> <!-- col.// -->
                                <aside class="col-lg-4">
                                    <figure class="text-lg-center">
                                        <h6>Foto</h6>
                                        <img class="img-lg img-avatar mt-3" src="./img/<?= $user['gambar']; ?>" alt="User Photo">
                                        <br>
                                        <a class="btn  btn-sm btn-light mt-2" href="#">
                                            <i class="fa fa-camera"></i> Upload
                                        </a>
                                    </figure>
                                </aside> <!-- col.// -->
                            </div> <!-- row.// -->
                        </form>

                        <hr class="my-4">

                        <div class="row" style="max-width:920px">
                            <div class="col-md">
                                <article class="box mb-3 bg-light">
                                    <a class="btn float-end btn-light btn-sm" href="#">Ganti</a>
                                    <p class="title mb-0">Password</p>
                                    <small class="text-muted d-block" style="width:70%">
                                        Kamu dapat mengatur ulang atau mengubah kata sandi dengan mengklik di sini</small>
                                </article>
                            </div> <!-- col.// -->
                            <div class="col-md">
                                <article class="box mb-3 bg-light">
                                    <a class="btn float-end btn-outline-danger btn-sm" href="#">Hapus</a>
                                    <p class="title mb-0">Hapus Akun</p>
                                    <small class="text-muted d-block" style="width:70%">Setelah kamu menghapus akun, tidak tidak bisa kembali.</small>
                                </article>
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->


                    </div> <!-- card-body .// -->
                </article> <!-- card .// -->
            </main>
        </div> <!-- row.// -->

        <br><br>


    </div> <!-- container .//  -->
</section>
<?php
require './layouts/script.php';
require './components/footer.php';
?>
