<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index_admin.php");
    exit;
}

require './layouts/header.php';
require 'functions.php';

$conn = Koneksi();

if (
    isset($_POST["login"])
) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;
            header("Location: index_admin.php");
            exit;
        }
    }

    $error = true;
}
?>
<!-- Navbar Login -->
<header class="section-header border-bottom sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.png" height="40" class="logo">
            </a>
        </div>
    </nav>
</header>
<!-- End Navbar Login -->

<!-- Login -->
<div class="card shadow mx-auto" style="max-width:400px; margin-top:40px;">
    <div class="card-body">
        <h2 class="card-title mb-4">Masuk</h2>
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">username / password salah</p>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">username</label>
                <input class="form-control" placeholder="masukkan username" type="text" name="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" placeholder="masukkan password" type="password" name="password" required>
            </div>
            <div class="mb-4">
                <button type="submit" name="login" class="btn btn-success-light w-100"> Masuk </button>
                <a class=" mt-3 btn btn-light w-100" href="index.php"> Kembali </a>
            </div>
        </form>
        <hr>
        <p class="text-center mb-2">Belum punya akun ? <a href="register.php">Daftar</a></p>

    </div>
</div>
<!-- End Login -->

<?php
require './layouts/script.php';
?>
