<?php
session_start();
require 'functions.php';
require './layouts/header.php';
require './components/navbar.php';

$populer = query("SELECT * , COUNT(id_sejarah) AS jumlah FROM love NATURAL JOIN sejarah_teknologi NATURAL JOIN kategori GROUP BY id_sejarah ORDER BY jumlah DESC LIMIT 5");
?>
<section class="bg-light">
    <div class="container">
        <header class="section-heading pt-3">
            <h2>Populer</h2>
        </header>

        <div class="row">
            <?php foreach ($populer as $p) : ?>
                <!-- new desain -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card-product-grid">
                        <a href="detail.php?id_sejarah=<?= $p['id_sejarah']; ?>" class="img-wrap rounded bg-gray-light">
                            <img height="250" class="mix-blend-multiply" src="./img/<?= $p['gambar']; ?>">
                        </a>
                        <figcaption class=" pt-2">
                            <?php if (!isset($_SESSION['login'])) : ?>
                            <?php else : ?>
                                <form action="" method="POST">
                                    <input type="hidden" name="id_user" id="id_user" value="<?= $user['id_user']; ?>">
                                    <input type="hidden" name="id_sejarah" id="id_sejarah" value="<?= $s['id_sejarah']; ?>">
                                    <button type="submit" name="disukai" title="sukai" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </button>
                                </form>
                            <?php endif; ?>
                            <a href="detail.php?id_sejarah=<?= $p['id_sejarah']; ?>"><strong class="price"><?= $p['judul']; ?></strong></a>
                            <p class="text-muted small mt-1"><?= $p['nama_kategori']; ?></p>
                            <hr>
                            <p class="text-truncate small"><?= (htmlspecialchars_decode(str_word_count($p['body']) > 60 ? substr($p['body'], 0, 250) . "..." : $p['body'])); ?></p>
                            <a href="detail.php?id_sejarah=<?= $p['id_sejarah']; ?>">Baca Selengkapnya</a><br>
                            <small class="text-muted"><?= date("d-M-Y", strtotime($p['tanggal'])); ?></small>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
require './components/footer.php';
require './layouts/script.php';
?>
