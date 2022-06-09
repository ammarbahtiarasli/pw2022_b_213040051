<?php
require './layouts/header.php';
require 'functions.php';

$conn = Koneksi();

$level = query("SELECT * FROM level");

if (
    isset($_POST["register"])
) {

    if (register($_POST) > 0) {
        echo "<script>
				alert('user baru berhasil ditambahkan!');
                document.location.href = 'login.php';
			  </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!-- Navbar register -->
<header class="section-header border-bottom sticky-top" id="scrollNavbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./img/logo-st.png" height="40" class="logo">
            </a>
        </div>
    </nav>
</header>
<!-- End Navbar register -->

<!-- Register  -->
<div class="card shadow mx-auto" style="max-width:400px; margin-top:40px;">
    <div class="card-body">
        <h2 class="card-title mb-4">Daftar</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" class="form-control" id="gambar" name="gambar" hidden>
            <div class=" mb-3">
                <label class="form-label">username*</label>
                <input class="form-control" placeholder="username" type="text" name="username" required maxlength="25">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" placeholder="email" type="email" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password*</label>
                <input class="form-control" placeholder="password" type="password" name="password" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Konfirmasi Password</label>
                <input class="form-control" placeholder="password" type="password" name="password2">
            </div>
            <div class="mb-4">
                <button type="submit" name="register" class="btn btn-success-light w-100"> Daftar </button>
                <a class=" mt-3 btn btn-light w-100" href="index.php"> Kembali </a>
            </div>
        </form>
        <hr>
        <p class="text-center mb-2">Sudah punya akun ? <a href="login.php">Masuk</a></p>
    </div>
</div>
<!-- End Register -->

<div class="col mt-5">
    <center>
        <img class="sponsor" src="./img/logo-unpas.png" width="35px" alt="" />
        <img class="sponsor ms-3" src="./img/tif.png" width="35px" alt="" />
    </center>
</div>

<?php
require './layouts/script.php';
?>
