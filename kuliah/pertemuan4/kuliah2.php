<?php
// definisikan masing-masing sisi kubus
$a = 9;
$b = 4;

// hitung masing-masing volume kubus
$volume_a = pow($a, 3);
$volume_b = pow($b, 3);

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kembalikan nilai total
echo "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";

echo '<hr>';

// deklarasi / definisi function
function totalVolumeDuaKubus($a, $b)
{
    return "Jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah" . pow($a, 3) + pow($b, 3);
}

// Pemanggilan / Eksekusi function
echo totalVolumeDuaKubus(9, 4);
echo '<br>';
echo totalVolumeDuaKubus(10, 20);
echo '<br>';
echo totalVolumeDuaKubus(5, 6);

echo '<hr>';

// buat sebuah fungsi untuk menghitung luas segitiga
function luasSegitiga($alas, $tinggi)
{
    return "Luas segi tiga dengan alas $alas dan tinggi $tinggi adalah" . 0.5 * $alas * $tinggi;
}

// menampilkan fungsi luas segitiga
echo luasSegitiga(2, 4);
echo '<br>';
echo luasSegitiga(5, 12);
