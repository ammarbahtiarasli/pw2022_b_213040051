<?php
require '../layouts/header.php';
?>
<!-- Navbar Login -->
<header class="section-header border-bottom sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" height="40" class="logo">
            </a>
        </div>
    </nav>
</header>
<!-- End Navbar Login -->

<!-- Login -->
<div class="card shadow mx-auto" style="max-width:400px; margin-top:40px;">
    <div class="card-body">
        <h2 class="card-title mb-4">Masuk</h2>
        <form>
            <div class="d-flex gap-2">
                <a href="#" class="d-flex align-items-center btn btn-light w-100">
                    <img class="me-2" src="../img/social/facebook.svg" height="20" width="20">
                    Facebook
                </a>
                <a href="#" class="d-flex align-items-center btn btn-light w-100">
                    <img class="me-2" src="../img/social/google.svg" height="20" width="20">
                    Google
                </a>
            </div>
            <p class="text-divider my-4"> Atau login dengan Email</p>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input class="form-control" placeholder="username" type="text">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" placeholder="password" type="password">
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-success-light w-100"> Masuk </button>
                <a class=" mt-3 btn btn-light w-100" href="../users/index.php"> Kembali </a>
            </div>
        </form>
        <hr>
        <p class="text-center mb-2">Belum punya akun ? <a href="../auth/register.php">Daftar</a></p>

    </div>
</div>
<!-- End Login -->

<?php
require '../layouts/script.php';
?>
