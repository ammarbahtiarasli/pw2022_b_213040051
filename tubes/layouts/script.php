<aside class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas_cart">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Sejarah Yang Disukai</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <figure class="itemside mb-4">
            <div class="aside">
                <img src="img/nophoto.png" class="border img-sm rounded">
            </div>
            <figcaption class="info">
                <a href="#" class="btn btn-icon btn-light float-end"><i class="fa fa-trash"></i></a>
                <strong class="price"> Judul</strong>
                <p> Kategori</p>
                <span class="text-muted">Tanggal</span> <br>
            </figcaption>
        </figure>
        <hr>

    </div> <!-- offcanvas-body -->
</aside> <!-- offcanvas -->

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
