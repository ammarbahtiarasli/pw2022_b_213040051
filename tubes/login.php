<?php
session_start();
require './layouts/header.php';
require 'functions.php';

$conn = Koneksi();

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id_user = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}
if (isset($_SESSION["login"])) {
    header("Location: index_admin.php?dashboard");
    exit;
}

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
            $_SESSION['id_level'] = $row["id_level"];
            $_SESSION['id_user'] = $row["id_user"];
            // cek remember me
            if (
                isset($_POST['remember'])
            ) {
                // buat cookie
                setcookie('id', $row['id_user'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            if ($row['id_level'] == 1) {
                # code...
                header("Location: index.php");
            } elseif ($row['id_level'] == 2) {
                header("Location: index_admin.php?dashboard");
            }
            exit;
        }
    }

    $error = true;
}
?>
<!-- Navbar Login -->
<header class="section-header border-bottom sticky-top" id="scrollNavbar">
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
            <p style="color: red;">Username / Password salah.</p>
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
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
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
