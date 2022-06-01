<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require './functions.php';
$id_kategori = $_GET["id_kategori"];

if (hapus_kategori($id_kategori) > 0) {
    echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'kategori.php';
            </script>";
}
