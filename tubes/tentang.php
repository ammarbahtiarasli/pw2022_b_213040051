<?php
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
                        <div class="card my-5">
                            <div class="card-body">
                                <h4 class="card-title">FAQs</h4>


                                <div class="accordion accordion-flush" id="accordion_faq">
                                    <article class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#content_faq_1">
                                                Kenapa Website ini dibuat ?
                                            </button>
                                        </h4>
                                        <div id="content_faq_1" class="accordion-collapse collapse show" data-bs-parent="#accordion_faq">
                                            <div class="accordion-body">
                                                The answer is simple just like lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur.
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
                                                Placeholder content for this accordion, which is intended to demonstrate the class. This is the second item's accordion body. Let's imagine this being filled with some actual content. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                            </div>
                                        </div>
                                    </article> <!-- accordion-item.// -->
                                    <article class="accordion-item">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content_faq_3">
                                                Kritik dan Saran ?
                                            </button>
                                        </h4>
                                        <div id="content_faq_3" class="accordion-collapse collapse" data-bs-parent="#accordion_faq">
                                            <div class="accordion-body">
                                                Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
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
    </div>
</div>


<?php
require './components/footer.php';
require './layouts/script.php';
?>
