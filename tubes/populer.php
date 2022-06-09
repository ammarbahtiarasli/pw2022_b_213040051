<?php
session_start();
require 'functions.php';
require './layouts/header.php';
require './components/navbar.php';
?>
<section class="bg-light">
    <div class="container">
        <header class="section-heading pt-3">
            <h2>Populer Coming Soon :)</h2>
        </header>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <figure class="card-product-grid">
                    <a href="#" class="img-wrap rounded bg-gray-light">
                        <img height="250" class="mix-blend-multiply" src="./img/nophoto.png">
                    </a>
                    <figcaption class="pt-2">
                        <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        <strong class="price">Judul</strong> <!-- price.// -->
                        <a href="#" class="title text-truncate">body</a>
                        <small class="text-muted">Tanggal</small>
                    </figcaption>
                </figure>
            </div> <!-- col end.// -->
        </div> <!-- row end.// -->
    </div>
</section>

<?php
require './components/footer.php';
require './layouts/script.php';
?>
