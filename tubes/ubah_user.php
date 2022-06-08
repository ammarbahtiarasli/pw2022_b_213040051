<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require './functions.php';
require './layouts/header.php';
require './components/navbar_admin.php';

// ambil data dari uRL
$id_user = $_GET["id_user"];

// query data sejarah berdasarkan id_sejarah
$user = query("SELECT * FROM users WHERE id_user = $id_user")[0];
$level = query("SELECT * FROM level");

// Cek apakah tombol tambah di klik
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_user($_POST) > 0) {
        echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'users.php';
            </script>";
    } else {
        echo "<script>
            alert('data gagal diubah');
            document.location.href = 'users.php';
            </script>";
    }
}
?>


<div class="container my-3">
    <h2>Form Ubah Data Pengguna</h2>
    <a href="javascript: history.back()" class="btn btn-light"> &laquo; Kembali ke Daftar Pengguna</a>
    <div class="row mt-3">
        <div class="col-sm-12 col-lg-8">
            <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                <input type="hidden" name="gambarLama" value="<?= $user['gambar']; ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Daftar sebagai :</label>
                    <select class="form-select" name="id_level">
                        <option selected value="<?= $user['id_level']; ?>">Default</option>
                        <?php foreach ($level as $l) : ?>
                            <option value="<?= $l['id_level']; ?>"><?= $l['nama_level']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-4">
                    <img class="mb-2" src="./img/<?= $user['gambar']; ?>" alt="" width="150px"> <br>
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $user['gambar']; ?>">
                </div>
                <button type=" submit" name="ubah" class="btn btn-success-light">Ubah Data Pengguna</button>
            </form>
        </div>
    </div>

</div>

<?php
require './layouts/script.php';
require './components/footer.php';
?>
