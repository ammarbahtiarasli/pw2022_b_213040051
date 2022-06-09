<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
} elseif (isset($_SESSION["login"]) && $_SESSION["id_level"] == 1) {
    header("Location: index.php");
    exit;
}

require './layouts/header.php';
require './components/navbar_admin.php';

$user = query("SELECT * FROM users NATURAL JOIN level WHERE id_user = '$_SESSION[id_user]'")[0];

$total_sejarah = query("SELECT * FROM sejarah_teknologi");
$total_user = query("SELECT * FROM users");
$total_kategori = query("SELECT * FROM kategori");


?>
<div class="container my-3">
    <br>
    <div class="row">
        <div class="col">
            <h2>Hai, <?= $user['username']; ?> !</h2>
            <p>
                Selamat datang di Dashboard admin.
            </p>
            <hr>
            <br>
        </div>
    </div>
    <div class="row gy-3">
        <div class="col-lg-6 col-md-6">
            <article class="card content-body">
                <figure class="text-center mx-lg-4">
                    <span class="rounded-circle text-success icon-lg bg-success-light">
                        <i class="fa fa-file"></i>
                    </span>
                    <figcaption class="pt-3">
                        <a class="title h5" href="sejarah_teknologi.php">Data Sejarah Teknologi</a>
                        <p class="mb-0 mt-2 title h6">Jumlah data : <?= count($total_sejarah); ?></p>
                    </figcaption>
                </figure> <!-- itemside // -->
            </article> <!-- card.// -->
        </div><!-- col // -->
        <div class="col-lg-6 col-md-6">
            <article class="card content-body">
                <figure class="text-center mx-lg-4">
                    <span class="rounded-circle text-success icon-lg bg-success-light">
                        <i class="fa fa-users"></i>
                    </span>
                    <figcaption class="pt-3">
                        <a class="title h5" href="users.php">Data Pengguna</a>
                        <p class="mb-0 mt-2 title h6">Jumlah data : <?= count($total_user); ?></p>
                    </figcaption>
                </figure> <!-- itemside // -->
            </article> <!-- card.// -->
        </div> <!-- col // -->
        <div class="col-lg-6 col-md-6">
            <article class="card content-body">
                <figure class="text-center mx-lg-4">
                    <span class="rounded-circle text-success icon-lg bg-success-light">
                        <i class="fa fa-file"></i>
                    </span>
                    <figcaption class="pt-3">
                        <a class="title h5" href="profil_admin.php">Data Kategori</a>
                        <p class="mb-0 mt-2 title h6">Jumlah data : <?= count($total_kategori); ?></p>
                    </figcaption>
                </figure> <!-- itemside // -->
            </article> <!-- card.// -->
        </div> <!-- col // -->
        <div class="col-lg-6 col-md-6">
            <article class="card content-body">
                <figure class="text-center mx-lg-4">
                    <span class="rounded-circle text-success icon-lg bg-success-light">
                        <i class="fa fa-user"></i>
                    </span>
                    <figcaption class="pt-3">
                        <a class="title h5" href="profil_admin.php">Profil</a>
                        <p class="mb-0 mt-2 title h6">Lorem ipsum dolor sit amet,</p>
                    </figcaption>
                </figure> <!-- itemside // -->
            </article> <!-- card.// -->
        </div> <!-- col // -->
    </div> <!-- row // -->
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col mb-5"></div>
        <center>
            <img class="sponsor" src="./img/logo-unpas.png" width="75px" alt="" />
            <img class="sponsor ms-3" src="./img/tif.png" width="75px" alt="" />
        </center>
    </div>
</div>
<?php
require './components/footer.php';
require './layouts/script.php';
?>
