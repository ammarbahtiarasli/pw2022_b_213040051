<?php
session_start();
require './layouts/header.php';
require 'functions.php';
require './components/navbar.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$user = query("SELECT * FROM users NATURAL JOIN level WHERE id_user = '$_SESSION[id_user]'")[0];

?>

<!-- Page Profil-->
<section class="padding-y bg-light">
    <div class="container">

        <div class="row">
            <aside class="col-lg-3 col-xl-3">
                <!--  COMPONENT MENU LIST  -->
                <nav class="nav flex-lg-column nav-pills mb-4">
                    <a class="nav-link active" href="#">Profil</a>
                    <a class="nav-link" href="logout.php">Keluar</a>
                </nav>
                <!--   COMPONENT MENU LIST END .//   -->
            </aside>
            <main class="col-lg-9">
                <article class="card">
                    <div class="card-body">

                        <form>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row gx-3">
                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control" type="text" placeholder="<?= $user['username']; ?>" readonly>
                                        </div> <!-- col .// -->

                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="text" placeholder="<?= $user['email']; ?>" readonly>
                                        </div> <!-- col .// -->

                                        <div class="col-lg-12  mb-3">
                                            <label class="form-label">Level</label>
                                            <input class="form-control" type="text" placeholder="<?= $user['nama_level']; ?>" readonly>
                                        </div> <!-- col .// -->
                                    </div> <!-- row.// -->
                                </div> <!-- col.// -->
                                <aside class="col-lg-4">
                                    <figure class="text-lg-center">
                                        <h6>Foto</h6>
                                        <img class="img-lg img-avatar" src="./img/logo.png" alt="User Photo">
                                    </figure>
                                </aside> <!-- col.// -->
                            </div> <!-- row.// -->
                        </form>

                        <hr class="my-4">

                        <div class="row" style="max-width:920px">
                            <div class="col-md">
                                <article class="box mb-3 bg-light">
                                    <a class="btn float-end btn-light btn-sm" href="#">Ganti</a>
                                    <p class="title mb-0">Ganti Password</p>
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
