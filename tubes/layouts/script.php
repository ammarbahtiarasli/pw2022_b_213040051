<aside class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas_cart">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Sejarah Yang Disukai</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <?php if (!isset($_SESSION['login'])) : ?>

        <?php else : ?>
            <?php
            $user = $user['id_user'];

            $disukai = query("SELECT * FROM love NATURAL JOIN sejarah_teknologi NATURAL JOIN kategori WHERE id_user = $user");
            $total = count($disukai);
            ?>
            <?php if ($total > 0) : ?>
                <?php foreach ($disukai as $like) : ?>
                    <figure class="itemside mb-4">
                        <div class="aside">
                            <img src="img/<?= $like['gambar']; ?>" class="border img-sm rounded">
                        </div>
                        <figcaption class="info">
                            <a href="hapus_love.php?id_love=<?= $like['id_love']; ?>" class="btn btn-icon btn-light float-end"><i class="fa fa-trash"></i></a>
                            <strong class="price"><?= $like['judul']; ?></strong> <br>
                            <span class="text-muted"><?= $like['nama_kategori']; ?></span>
                        </figcaption>
                    </figure>
                    <hr>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="alert alert-danger" role="alert">
                                Anda belum menyukai sejarah teknologi apapun.
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</aside>
<!-- offcanvas -->

<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#text-editor'))
        .catch(error => {
            console.error(error);
        });
</script>

<script src="./js/myscript.js"></script>
</body>

<!-- Bootstrap js -->
<script src="./js/bootstrap.bundle.min.js"></script>

<!-- Custom js -->
<script src="./js/script.js?v=1.0"></script>

</html>
