<?php
// Array associative
// array yang index nya berupa string, yang ber asosiasi (berpasangan) dengan nilainya.

$mahasiswa = [
    [
        "nama" => "Ahmad Ammar Bahtiar",
        "npm" => "213040051",
        "email" => "ahmad.213040051@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Udin",
        "npm" => "103040077",
        "email" => "udin@gmail.com",
        "jurusan" => "Teknik Industri"
    ],
    [
        "nama" => "Asep",
        "email" => "asep@yahoo.com",
        "jurusan" => "Teknik Mesin",
        "npm" => "203040055"
    ],
    [
        "nama" => "siti",
        "email" => "siti@unpas.com",
        "jurusan" => "Teknik inormatika",
        "npm" => "253040099"
    ]
];

// var_dump($mahasiswa[1]["email"]);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kuliah latihan 1</title>
</head>

<body>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>
