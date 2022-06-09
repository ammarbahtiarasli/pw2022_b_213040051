<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require './functions.php';
$id_love = $_GET["id_love"];

if (hapus_disukai($id_love) > 0) {
    echo "<script>
            alert('berhasil dihapus!');
            document.location.href = 'index.php';
        </script>";
} else {
    echo "<script>
            alert('gagal dihapus!');
            document.location.href = 'index.php';
        </script>";
}
