<?php
require '../layouts/header.php';
require '../components/navbar_admin.php';
?>
<div class="container my-3">
    <div class="row">
        <div class="col">
            <h2>Hai Admin !</h2>
            <hr>
            <p>Selamat datang di halaman admin, di sini anda dapat mengelola data sejarah teknologi.</p>
            <p>Anda dapat menambahkan data sejarah teknologi, mengubah data sejarah teknologi, dan menghapus data sejarah teknologi.</p>
            <p>Anda dapat mencari data sejarah teknologi berdasarkan kategori.</p>
            <p>Anda dapat mengunduh data sejarah teknologi dalam format PDF.</p>

        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col mb-5"></div>
        <center>
            <img class="sponsor" src="../img/logo-unpas.png" width="75px" alt="" />
            <img class="sponsor ms-3" src="../img/tif.png" width="75px" alt="" />
        </center>
    </div>
</div>
<?php
require '../components/footer.php';
require '../layouts/script.php';
?>
