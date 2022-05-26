<?php
require './layouts/header.php';
?>
<!-- Navbar register -->
<header class="section-header border-bottom sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.png" height="40" class="logo">
            </a>
        </div>
    </nav>
</header>
<!-- End Navbar register -->

<!-- Register  -->
<div class="card shadow mx-auto" style="max-width:400px; margin-top:40px;">
    <div class="card-body">
        <h2 class="card-title mb-4">Daftar</h2>
        <form>
            <div class="mb-3">
                <label class="form-label">Nama*</label>
                <input class="form-control" placeholder="nama" type="text">
            </div>
            <div class="mb-3">
                <label class="form-label">Email*</label>
                <input class="form-control" placeholder="email" type="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password*</label>
                <input class="form-control" placeholder="password" type="password">
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-success-light w-100"> Daftar </button>
                <a class=" mt-3 btn btn-light w-100" href="index.php"> Kembali </a>
        </form>
        <hr>
        <p class="text-center mb-2">Sudah punya akun ? <a href="login.php">Masuk</a></p>
    </div>
</div>
<!-- End Register -->

<?php
require './layouts/script.php';
?>
