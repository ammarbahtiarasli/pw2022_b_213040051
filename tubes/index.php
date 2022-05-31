<?php
session_start();
require './functions.php';
require './layouts/header.php';
require './components/navbar.php';

// pagination
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM sejarah_teknologi"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$sejarah = query("SELECT * FROM sejarah_teknologi  NATURAL JOIN kategori ORDER BY id_sejarah DESC LIMIT $awalData, $jumlahDataPerHalaman");
$kategori = query("SELECT * FROM kategori");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $sejarah = cari($_POST["keyword"]);
}

if (isset($_POST["cari"])) {
    $sejarah = cari($_POST["kategori"]);
}
?>

<!-- Header -->
<main class="bg-dark p-5" style=" min-height:400px; background-size: cover; background-position: center; background-attachment:fixed; background-image: url('./img/bannerr.jpg');">

    <header class="text-center mt-5">
        <h1 class=" text-white">Sejarah Teknologi</h2>
            <p class="text-white">Discover the best history in the World</p>
    </header>

    <form class="mx-auto w-100 mb-3" action="" method="POST" style="max-width: 720px">
        <div class="row g-2 w-100">
            <div class="col flex-grow">
                <div class="input-group">
                    <select class="form-select bg-light" style="max-width:30%" name="kategori">
                        <?php foreach ($kategori as $k) : ?>
                            <option value="<?= $k["nama_kategori"] ?>"><?= $k["nama_kategori"] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="text" placeholder="Cari Sejarah Apa Ya ?" class="form-control" name="keyword" autofocus autocomplete="off">
                    <button type="submit" name="cari" hidden>Cari</button>
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
                    <?php if ($halamanAktif > 1) : ?>
                        <li class="page-item"><a class="page-link" href="?page=<?= $halamanAktif - 1; ?>">Sebelumnya</a></li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                        <?php if ($i == $halamanAktif) : ?>
                            <li class="page-item active"><a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a></li>
                        <?php else : ?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a></li>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <?php if ($halamanAktif < $jumlahHalaman) : ?>
                        <li class="page-item"><a class="page-link" href="?page=<?= $halamanAktif + 1; ?>">Selanjutnya</a></li>
                    <?php endif; ?>
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
