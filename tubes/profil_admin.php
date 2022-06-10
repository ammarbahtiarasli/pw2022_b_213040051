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

// Cek apakah tombol tambah di klik
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_akun($_POST) > 0) {
        echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'profil.php';
            </script>";
    } else {
        echo "<script>
            alert('data gagal diubah');
            document.location.href = 'profil.php';
            </script>";
    }
}

// Cek apakah tombol tambah di klik
if (isset($_POST["ubah_pw"])) {
    // cek apakah data berhasil diubah atau tidak
    if (ubah_password($_POST) > 0) {

        echo "<script>
            alert('Password berhasil diubah');
            document.location.href = 'profil.php';
            </script>";
    } else {
        echo "<script>
            alert('Password gagal diubah');
            document.location.href = 'profil.php';
            </script>";
    }
}
?>

<!-- Page Profil-->
<section class="padding-y bg-light">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index_admin.php">Beranda</a></li>
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
                            <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                            <input type="hidden" name="gambarLama" value="<?= $user['gambar']; ?>">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row gx-3">
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control" name="username" id="username" type="text" value="<?= $user['username']; ?>" maxlength="25">
                                        </div> <!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" name="email" id="email" type="text" value="<?= $user['email']; ?>">
                                        </div> <!-- col .// -->
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Level</label>
                                            <input class="form-control" name="level" id="level" type="text" value="<?= $user['nama_level']; ?>" disabled>
                                        </div> <!-- col .// -->
                                    </div> <!-- row.// -->
                                    <button type="submit" name="ubah" class="btn btn-success-light mt-2">Simpan Perubahan</button>
                                </div> <!-- col.// -->
                                <aside class="col-lg-4">
                                    <figure class="text-lg-center ">
                                        <h6 class="mt-3">Foto</h6>
                                        <img class="img-lg img-avatar mt-3" src="./img/<?= $user['gambar']; ?>" alt="User Photo">
                                        <img src="" class=" flex mx-auto img-lg img-avatar mt-2" id="img-preview" style="display: none;" alt="User Photo">
                                        <br>
                                        <input type="file" class="form-control mt-2" name="gambar" id="gambar" onchange="previewImage();">
                                    </figure>
                                </aside> <!-- col.// -->
                            </div> <!-- row.// -->
                        </form>

                        <hr class=" my-4">

                        <div class="row" style="max-width:920px">
                            <div class="col-md">
                                <article class="box mb-3 bg-light">
                                    <button type="button" class="btn float-end btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Ganti</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="" method="POST">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                                                        <div class="mb-3">
                                                            <label class="form-label">Password Baru</label>
                                                            <input class="form-control" placeholder="password" type="text" name="password" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Konfirmasi Password</label>
                                                            <input class="form-control" placeholder="password" type="text" name="password2">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-success-light" id="ubah_pw" name="ubah_pw">Simpan Perubahan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="title mb-0">Password</p>
                                    <small class="text-muted d-block" style="width:70%">
                                        Kamu dapat mengatur ulang atau mengubah kata sandi dengan mengklik di sini</small>
                                </article>
                            </div> <!-- col.// -->
                            <div class="col-md">
                                <article class="box mb-3 bg-light">
                                    <a class="btn float-end btn-outline-danger btn-sm" href="hapus_akun.php?id_user=<?= $user['id_user']; ?>">Hapus</a>
                                    <p class="title mb-0">Hapus Akun</p>
                                    <small class="text-muted d-block" style="width:70%">Setelah kamu menghapus akun, akun tidak bisa kembali.</small>
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
