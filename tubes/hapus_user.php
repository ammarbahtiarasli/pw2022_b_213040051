<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require './functions.php';
$id_user = $_GET["id_user"];

if (hapus_user($id_user) > 0) {
    echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'users.php';
            </script>";
}
