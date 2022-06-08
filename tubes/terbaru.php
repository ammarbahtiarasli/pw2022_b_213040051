<?php
session_start();
require 'functions.php';
require './layouts/header.php';
require './components/navbar.php';

$sejarah = query("SELECT * FROM sejarah_teknologi  NATURAL JOIN kategori ORDER BY tanggal DESC");
$kategori = query("SELECT * FROM kategori");
?>

<!-- Back to top button -->
<button type="button" class="btn btn-success-light btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>

<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <h2>Terbaru</h2>
                <hr>
            </div>
        </div>
        <!-- Populer -->
        <div class="row">
            <?php foreach ($sejarah as $s) : ?>
                <div class="col-lg-3 col-sm-6 col-12">
                    <a href="detail.php?id_sejarah=<?= $s['id_sejarah']; ?>">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <img src="./img/<?= $s['gambar']; ?>">
                            </div>
                            <figcaption class="info-wrap border-top">
                                <div class="price-wrap">
                                    <strong class="price"><?= $s['judul']; ?></strong>
                                    <p class="text-muted small mt-1"><?= $s['nama_kategori']; ?></p>
                                </div>
                                <p class="text-muted small mt-2"><?= date("d-M-Y", strtotime($s['tanggal'])); ?></p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
        <!-- Populer end -->
    </div>
</section>




<?php
require './components/footer.php';
require './layouts/script.php';
?>
