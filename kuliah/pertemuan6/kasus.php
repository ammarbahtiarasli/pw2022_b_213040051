<?php

$laptop = [
    [
        "merk" => "Asus",
        "type" => "Vivobook 14X Oled",
        "spek" => "core i5 12th gen, 8GB RAM, RTX 3050, Windows 11",
        "harga" => "15.999.000",
        "gambar" => "vivobook.jpg"
    ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laptop</title>
</head>

<body>
    <h1>Daftar Laptop</h1>

    <?php foreach ($laptop as $l) : ?>
        <ul>
            <li>
                <img src="img/<?= $l["gambar"]; ?>" alt="" width="100px" height="auto">
            </li>
            <Li>Merk : <?= $l["merk"]; ?></li>
            <li>Type : <?= $l["type"]; ?></li>
            <li>Spek : <?= $l["spek"]; ?></li>
            <li>Harga : <?= $l["harga"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>
