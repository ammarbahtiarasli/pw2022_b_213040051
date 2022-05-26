<?php
require './functions.php';
$id_sejarah = $_GET["id_sejarah"];

if (hapus($id_sejarah) > 0) {
    echo "<script>
            alert('data berhasil dihapus');
            document.location.href = '../admin/sejarah_teknologi.php';
            </script>";
}
