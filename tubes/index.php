<?php
session_start();
require 'functions.php';
require './layouts/header.php';
require './components/navbar.php';

// pagination
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM sejarah_teknologi"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$sejarah = query("SELECT * FROM sejarah_teknologi  NATURAL JOIN kategori ORDER BY id_sejarah LIMIT $awalData, $jumlahDataPerHalaman");
$kategori = query("SELECT * FROM kategori");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $sejarah = cari($_POST["keyword"]);
}

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

if (isset($_POST["cari"]) and $_POST["kategori"] != "") {
    // $sejarah = cari($_POST["kategori"]);
    $cariKategori = $_POST["kategori"];
    $jumlahDataPerHalaman = 5;
    $jumlahData = count(query("SELECT * FROM sejarah_teknologi  NATURAL JOIN kategori where nama_kategori = '$cariKategori'"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    $sejarah = query("SELECT * FROM sejarah_teknologi  NATURAL JOIN kategori where nama_kategori = '$cariKategori' ORDER BY id_sejarah LIMIT $awalData, $jumlahDataPerHalaman");
} else {
    $jumlahDataPerHalaman = 8;
    $jumlahData = count(query("SELECT * FROM sejarah_teknologi"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    $sejarah = query("SELECT * FROM sejarah_teknologi  NATURAL JOIN kategori ORDER BY id_sejarah LIMIT $awalData, $jumlahDataPerHalaman");
}

$populer = query("SELECT * , COUNT(id_sejarah) AS jumlah FROM love NATURAL JOIN sejarah_teknologi NATURAL JOIN kategori GROUP BY id_sejarah ORDER BY jumlah DESC LIMIT 5");
?>

<!-- Header -->
<main class="bg-dark p-5" style=" min-height:400px; background-size: cover; background-position: center; background-attachment:fixed; background-image: url('./img/bannerr.jpg');">

    <header class="text-center mt-5">
        <h1 class=" text-white">Website Sejarah Teknologi</h2>
            <p class="text-white">
                ~ Temukan sejarah terbaik di Dunia ~
            </p>
    </header>

    <form class="mx-auto w-100 mb-3" action="#" method="POST" style="max-width: 870px">
        <div class="row g-2 w-100">
            <div class="col flex-grow">
                <div class="input-group">
                    <input type="text" placeholder="Cari Sejarah Apa Ya ?" class="form-control" name="keyword" autocomplete="off" id="keyword">
                    <select class="form-select bg-light" style="max-width:32%" name="kategori">
                        <option value="">Filter berdasarkan :</option>
                        <?php foreach ($kategori as $k) : ?>
                            <option value="<?= $k["nama_kategori"] ?>"><?= $k["nama_kategori"] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div> <!-- col.// -->
            <div class="col-auto">
                <button type="submit" name="cari" id="tombol-cari" class="btn btn-success-light">Cari Kategori</button>
            </div>
        </div> <!-- row.// -->
    </form>

</main>
<!-- End Header -->

<!-- Page Beranda -->
<section class="padding-y bg-light">
    <div class="container">
        <div class="row">
            <h2>List Sejarah</h2>
            <hr>
            <main class="col-lg-8">
                <div id="container">
                    <!-- Konten -->
                    <?php if ($jumlahData > 0) : ?>
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
                                            <?php if (!isset($_SESSION['login'])) : ?>
                                            <?php else : ?>
                                                <form action="" method="POST">
                                                    <input type="hidden" name="id_user" id="id_user" value="<?= $user['id_user']; ?>">
                                                    <input type="hidden" name="id_sejarah" id="id_sejarah" value="<?= $s['id_sejarah']; ?>">
                                                    <button type="submit" name="disukai" title="sukai" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </button>
                                                </form>
                                            <?php endif; ?>
                                            <a href="detail.php?id_sejarah=<?= $s['id_sejarah']; ?>" class="h5 mb-1 title"><?= $s['judul']; ?></a>
                                            <p class="mb-1 text-muted">kategori <?= $s['nama_kategori']; ?></p>
                                            <p class="text-muted"><?= (htmlspecialchars_decode(str_word_count($s['body']) > 60 ? substr($s['body'], 0, 250) . "..." : $s['body'])); ?></p>
                                            <a href="detail.php?id_sejarah=<?= $s['id_sejarah']; ?>">Baca Selengkapnya</a>
                                            <p class="float-end text-muted small mt-5"><i class="fa fa-calendar-alt"></i> <?= date("d-M-Y", strtotime($s['tanggal'])); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                        <hr>
                    <?php else : ?>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="alert alert-danger" role="alert">
                                        Data tidak ditemukan
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- End Konten -->

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
                </div>
            </main>
            <aside class="col-lg-4">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Populer</h5>

                        <?php foreach ($populer as $p) : ?>
                            <article class="itemside mb-3">
                                <a href="#" class="aside"><img src="./img/<?= $p['gambar']; ?>" class="img-md img-thumbnail"></a>
                                <div class="info">
                                    <a href="#" class="title mb-1"><?= $p['judul']; ?></a>
                                    <p class="text-muted mb-1"><?= $p['nama_kategori']; ?></p>
                                    <a href="detail.php?id_sejarah=<?= $s['id_sejarah']; ?>">Baca Selengkapnya</a>
                                </div>
                            </article>
                        <?php endforeach; ?>

                    </div>
                </div>

            </aside>
        </div>
        <!-- End Konten -->

    </div>
</section>
<!-- End Page Beranda -->

<?php
require './components/footer.php';
require './layouts/script.php';
?>
