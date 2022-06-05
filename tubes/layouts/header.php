<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (isset($_GET["login"])) {
            echo "Masuk - Sejarah Teknologi";
        } else if (isset($_GET["register"])) {
            echo "Daftar - Sejarah Teknologi";
        } else if (isset($_GET["tentang"])) {
            echo "Tentang - Sejarah Teknologi";
        } else if (isset($_GET["id_sejarah"])) {
            echo "Detail - Sejarah teknologi";
        } else if (isset($_GET["dashboard"])) {
            echo "Dashboard - Sejarah Teknologi";
        } else if (isset($_GET["sejarah"])) {
            echo "Data Sejarah - Sejarah Teknologi";
        } else if (isset($_GET["tambah_sejarah"])) {
            echo "Tambah Sejarah - Sejarah Teknologi";
        } else if (isset($_GET["kategori"])) {
            echo "Data Kategori - Sejarah Teknologi";
        } else if (isset($_GET["pengguna"])) {
            echo "Data Pengguna - Sejarah Teknologi";
        } else if (isset($_GET["profil"])) {
            echo "Profil - Sejarah Teknologi";
        } else {
            echo "Beranda - Sejarah Teknologi";
        }
        ?>
    </title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="./img/logo.png">

    <!-- Bootstrap css -->
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- Custom css -->
    <link href="./css/ui.css" rel="stylesheet" type="text/css" />
    <link href="./css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="./fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

    <!-- font inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <!-- mycss -->
    <link rel="stylesheet" href="./css/style.css" rel="stylesheet">
    <style>
        .ck-editor__editable {
            min-height: 200px !important;
        }
    </style>
</head>

<body>
