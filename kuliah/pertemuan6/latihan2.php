<?php
$mahasiswaa = [
    ["Ahmad Ammar Bahtiar", "213040051", "ammarbahtiarasli@gmail.com", "Teknik Informatika"],
    ["Ardhi", "203040000", "ardhi@gmail.com", "Teknik industri"]
];

// array assosiative
// definisi nya sama dengan array numerik, kecuali
// key nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "gambar" => "gambar1.jpg",
        "nama" => "Udin and Friend",
        "npm" => "183040061",
        "email" => "udin@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => "gambar2.jpg",
        "nama" => "Asep saepuloh",
        "npm" => "103040051",
        "email" => "asep@gmail.com",
        "jurusan" => "Teknik Mesin"
    ],
    [
        "gambar" => "gambar3.jpg",
        "nama" => "David",
        "npm" => '193040069',
        "email" => "david@gmai.com",
        "jurusan" => "Teknik Informatika"
    ]
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="" width="50px">
            </li>
            <Li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["npm"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>
