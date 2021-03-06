<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require './functions.php';
require './layouts/header.php';
require './components/navbar.php';

// ambil data dari uRL
$id_sejarah = $_GET["id_sejarah"];

// query data sejarah berdasarkan id_sejarah
$sejarah = query("SELECT * FROM sejarah_teknologi NATURAL JOIN kategori WHERE id_sejarah = $id_sejarah")[0];

// tombol like ditekan
if (isset($_POST["disukai"])) {
    if (disukai($_POST) > 0) {
        echo "<script>
            alert('sejarah telah ditambahkan ke daftar disukai');
            document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
            alert('Gagal menyukai');
            document.location.href = 'index.php';
            </script>";
    }
}
?>

<!-- Page Detail Sejarah -->
<section class="padding-y shadow-sm">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Sejarah</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col">
                <main class="bg-dark p-5" style="min-height:500px; background-size:cover; background-repeat: no-repeat; background-image: url('./img/<?= $sejarah['gambar']; ?>');">
                </main>
                <hr>
                <section class="padding-y">
                    <div class="container">

                        <header class="section-heading">
                            <?php if (!isset($_SESSION['login'])) : ?>
                            <?php else : ?>
                                <form action="" method="POST">
                                    <input type="hidden" name="id_user" id="id_user" value="<?= $user['id_user']; ?>">
                                    <input type="hidden" name="id_sejarah" id="id_sejarah" value="<?= $sejarah['id_sejarah']; ?>">
                                    <button type="submit" name="disukai" title="sukai" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </button>
                                </form>
                            <?php endif; ?>
                            <h2 class="section-title"><?= $sejarah['judul']; ?></h2>
                            <p class="lead"><?= $sejarah['nama_kategori']; ?> - <?= date("d-M-Y", strtotime($sejarah['tanggal'])); ?></p>
                        </header>

                        <p><?= htmlspecialchars_decode($sejarah['body']); ?></p>

                        <a href="javascript: history.back()" class="btn btn-light"> &laquo; Kembali</a>

                    </div> <!-- container .//  -->
                </section>

                <section class="bg-light padding-y">
                    <div class="container">

                        <header class="section-heading">
                            <h2 class="section-title">Second section </h2>
                        </header>

                        <div class="row">
                            <div class="col-md-4">

                                <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                </article>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    Consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->

                    </div><!-- container // -->
                </section>
            </div>
        </div> <!-- row.// -->

    </div> <!-- container .//  -->
</section>


<?php
require './components/footer.php';
require './layouts/script.php';
?>
