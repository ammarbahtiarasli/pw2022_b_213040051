<?php
session_start();


require './layouts/header.php';
require './components/navbar.php';
?>

<!-- Page Tentang -->
<div class="bg-light">
    <div class="container ">
        <div class="row">
            <div class="col">
                <article class="p-4 p-xl-5 text-center">
                    <img src="./img/logo.png" class="img-avatar img-lg">
                    <h2 class="card-title mt-3">Ahmad Ammar Bahtiar 213040051</h2>
                    <p>
                        Pangandaran, ID<br>
                        ahmad.213040051@mail.unpas.ac.id
                    </p>
                    <a href="https://instagram.com/ammarbahtiarasli" class="btn btn-light">Ikuti</a>
                    <a href="https://ammarbahtiar.my.id" class="btn btn-light">Portofolio</a>
                </article>

                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <!-- ================ COMPONENT FAQ ================ -->
                        <div class="card my-3">
                            <div class="card-body">
                                <h4 class="card-title">FAQs</h4>


                                <div class="accordion accordion-flush" id="accordion_faq">
                                    <article class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#content_faq_1">
                                                Website apa ini ?
                                            </button>
                                        </h4>
                                        <div id="content_faq_1" class="accordion-collapse collapse show" data-bs-parent="#accordion_faq">
                                            <div class="accordion-body">
                                                Website yang menyediakan berbagai sejarah teknologi dan informasi.
                                            </div>
                                        </div>
                                    </article> <!-- accordion-item.// -->
                                    <article class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content_faq_2">
                                                Pakai teknologi apa aja website ini ?
                                            </button>
                                        </h4>
                                        <div id="content_faq_2" class="accordion-collapse collapse" data-bs-parent="#accordion_faq">
                                            <div class="accordion-body">
                                                Website ini menggunakan teknologi HTML, CSS, PHP, MySQL, dan Bootstrap 5.
                                            </div>
                                        </div>
                                    </article> <!-- accordion-item.// -->
                                    <article class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content_faq_3">
                                                Kenapa website ini dibuat ?
                                            </button>
                                        </h4>
                                        <div id="content_faq_3" class="accordion-collapse collapse" data-bs-parent="#accordion_faq">
                                            <div class="accordion-body">
                                                Karena website ini adalah sebuah tugas besar matakuliah Pemrograman Web yang dibuat oleh Ahmad Ammar Bahtiar.
                                            </div>
                                        </div>
                                    </article> <!-- accordion-item.// -->
                                </div> <!-- accordion .// -->


                            </div> <!-- card-body // -->
                        </div> <!-- card.// -->
                        <!-- ================ COMPONENT FAQ END .// ================ -->
                    </div> <!-- col.// -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <center>
                    <img class="sponsor" src="./img/logo-unpas.png" width="75px" alt="" />
                    <img class="sponsor ms-3" src="./img/tif.png" width="75px" alt="" />
                </center>
            </div>
        </div>
    </div>
</div>


<?php
require './components/footer.php';
require './layouts/script.php';
?>
