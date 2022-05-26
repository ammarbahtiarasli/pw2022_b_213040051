<?php
require './functions.php';
require './layouts/header.php';
require './components/navbar.php';
$sejarah = query("SELECT * FROM sejarah_teknologi NATURAL JOIN kategori ORDER BY id_sejarah DESC");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $sejarah = cari($_POST["keyword"]);
}
?>

<!-- Header -->
<main class="bg-dark p-5" style="min-height:280px; background-size: cover; background-position: center; background-image: url('./img/bannerr.jpg');">

    <header class="text-center mt-5">
        <h1 class="text-white">Sejarah Teknologi</h2>
            <p class="text-white">Discover the best history in the World</p>
    </header>

    <form class="mx-auto w-100 mb-3" action="" method="POST" style="max-width: 720px">
        <div class="row g-2 w-100">
            <div class="col flex-grow">
                <div class="input-group">
                    <select class="form-select bg-light" style="max-width:30%">
                        <option>Semua</option>
                        <option>Aplikasi</option>
                        <option>Handphone</option>
                        <option>Transportasi</option>
                        <option>Komputer</option>
                        <option>Lainnya</option>
                    </select>
                    <input type="text" placeholder="Cari Sejarah Apa Ya ?" class="form-control" name="keyword" autofocus autocomplete="off">
                    <button type="submit" name="cari" hidden></button>
                </div>
            </div> <!-- col.// -->
        </div> <!-- row.// -->
    </form>

</main>
<!-- End Header -->

<!-- Page Beranda -->
<section class="padding-y bg-light">
    <div class="container">
        <div class="row">
            <h2>Terbaru</h2>
            <hr>
            <main class="col-lg-8">
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
                                    <p class="text-muted"><?= (str_word_count($s['body']) > 60 ? substr($s['body'], 0, 250) . "..." : $s['body']); ?></p>
                                    <a href="detail.php?id_sejarah=<?= $s['id_sejarah']; ?>">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
                <!-- End Konten -->

            </main>
            <aside class="col-lg-4">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Populer</h5>

                        <article class="itemside mb-3">
                            <a href="detail.php" class="aside"><img src="./img/nophoto.png" class="img-md img-thumbnail"></a>
                            <div class="info">
                                <a href="detail.php" class="title mb-1">Sejarah tercipta nya adam dan hawa</a>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </article> <!-- itemside.// -->

                    </div>
                </div>

            </aside>
        </div>
        <!-- End Konten -->

        <hr>

        <!-- Pagination -->
        <section class="d-flex mt-4">
            <nav class="ms-3">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">2</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Selanjutnya</a>
                    </li>
                </ul>
            </nav>
        </section>
        <!-- End Pagination -->

        </main>

    </div>
    </div>
</section>
<!-- End Page Beranda -->

<?php
require './components/footer.php';
require './layouts/script.php';
?>