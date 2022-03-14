<?php
// ARRAY
// Array adalah varibe=le yang dapat menyimpan lebih dari satu nilai sekaligus.
$hari1 = "Senin";
$hari2 = "Selasa";
$hari7 = "Minggu";

$bulan1 = "Januari";
$bulan12 = "Desember";

$mahasiswa = "Ammar";

// Membuat Array

$hari = [
    "Senin",
    "Selasa",
    "Rabu",
    "Kamis",
    "Jumat",
]; // cara baru

$bulan = array("Januari", "Februari", "Maret", "April");  // cara lama

$myArray = [100, "Ammar", true];

// Menampilkan Array
// menampilkan satu elemen menggunakan index, dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// menampilkan semua isi array sekaligus
// var_dump() atau print_r()
// khusus debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak semua isi array menggunakan looping
// for
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach
foreach ($bulan as $b) {
    echo $b;
    echo "<br>";
}
echo "<hr>";

// Memanipulasi Array
// Menambahkan elemen di akhir array
$hari[] = "Sabtu";
$hari[] = "Minggu";
var_dump($hari);
