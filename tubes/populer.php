<?php
session_start();
require 'functions.php';
require './layouts/header.php';
require './components/navbar.php';
?>
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <h2>Populer Coming Soon :)</h2>
                <hr>
            </div>
        </div>
        <!-- Populer -->
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <figure class="card card-product-grid">
                    <div class="img-wrap">
                        <img src="./img/nophoto.png">
                    </div>
                    <figcaption class="info-wrap border-top">
                        <div class="price-wrap">
                            <strong class="price">Judul</strong>
                        </div>
                        <a href="#" class="title">isi konten</a>
                        <p class="text-muted small mt-2"> tanggal</p>
                    </figcaption>
                </figure>
            </div>

        </div>
        <!-- Populer end -->
    </div>
</section>

<?php
require './components/footer.php';
require './layouts/script.php';
?>
