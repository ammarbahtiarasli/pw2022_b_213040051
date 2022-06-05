<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM sejarah_teknologi NATURAL JOIN kategori
                WHERE
                judul LIKE '%$keyword%' OR
                tanggal LIKE '%$keyword%' OR
                nama_kategori LIKE '%$keyword%'
                ";
$sejarah = query($query);
?>
<!-- Konten -->
<?php foreach ($sejarah as $s) : ?>
    <article class="card card-product-list product-lg">
        <div class="row g-0">
            <aside class="col-xl-3 col-md-4">
                <a href="detail.php?id_sejarah=<?= $s['id_sejarah']; ?>" class="img-wrap">
                    <img src="./img/<?= $s['gambar']; ?>">
                </a>
            </aside> <!-- col.// -->
            <div class="col-xl-9 col-md-8 border-start">
                <div class="card-body">
                    <a href="detail.php?id_sejarah=<?= $s['id_sejarah']; ?>" class="h5 mb-1 title"><?= $s['judul']; ?></a>
                    <p class="mb-1 text-muted"><?= $s['tanggal']; ?></p>
                    <p class="text-muted"><?= (htmlspecialchars_decode(str_word_count($s['body']) > 60 ? substr($s['body'], 0, 250) . "..." : $s['body'])); ?></p>
                    <a href="detail.php?id_sejarah=<?= $s['id_sejarah']; ?>">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </article>
<?php endforeach; ?>
<!-- End Konten -->
