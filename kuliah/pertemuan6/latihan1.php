<?php

// array
// membuat array
$hari = array("senin", "Selasa");
$bulan = ["Januari", "februari"];
$arr = [100, "teks", true];
// menampilkan array
// versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
// menampilkann 1 elemen pada array
echo $arr[0];

echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>latihan array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <!-- foraeach untuk array normal -->
    <!-- <?php
            $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
            ?>
<?php foreach ($angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?> -->

    <!-- foreach untuk array diladalam array -->
    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>

    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>
