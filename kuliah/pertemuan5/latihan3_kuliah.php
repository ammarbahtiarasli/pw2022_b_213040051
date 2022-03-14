<?php
$mahasiswa = [
    ["Ahmad Ammar Bahtiar", "213040051", "ahmad.213040051@mail.unpas.ac.id", "Teknik Informatika"],
    ["Udin", "103040077", "udin@gmail.com", "Teknik Informatika"],
    ["Asep", "153040025", "asep@yahoo.com", "Teknik Informatika"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php foreach ($mahasiswa as $mhs) { ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NPM : <?= $mhs[1]; ?></li>
            <li>Email : <?= $mhs[2]; ?></li>
            <li>Jurusan : <?= $mhs[3]; ?></li>
        </ul>
    <?php } ?>
</body>

</html>
