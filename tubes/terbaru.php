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
                <!-- new desain -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card-product-grid">
                        <a href="detail.php?id_sejarah=<?= $s['id_sejarah']; ?>" class="img-wrap rounded bg-gray-light">
                            <img height="250" class="mix-blend-multiply" src="./img/<?= $s['gambar']; ?>">
                        </a>
                        <figcaption class=" pt-2">
                            <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                            <a href="detail.php?id_sejarah=<?= $s['id_sejarah']; ?>"><strong class="price"><?= $s['judul']; ?></strong></a>
                            <p class="text-muted small mt-1"><?= $s['nama_kategori']; ?></p>
                            <hr>
                            <p class="text-truncate small"><?= (htmlspecialchars_decode(str_word_count($s['body']) > 60 ? substr($s['body'], 0, 250) . "..." : $s['body'])); ?></p>
                            <a href="detail.php?id_sejarah=<?= $s['id_sejarah']; ?>">Baca Selengkapnya</a><br>
                            <small class="text-muted"><?= date("d-M-Y", strtotime($s['tanggal'])); ?></small>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->
            <?php endforeach; ?>

        </div>
        <!-- Populer end -->
    </div>
</section>




<?php
require './components/footer.php';
require './layouts/script.php';
?>
