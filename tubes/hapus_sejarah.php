<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require './functions.php';
$id_sejarah = $_GET["id_sejarah"];

if (hapus($id_sejarah) > 0) {
    echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'sejarah_teknologi.php';
            </script>";
}
