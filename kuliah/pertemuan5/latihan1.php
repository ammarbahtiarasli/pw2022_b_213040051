<?php
// array
// variable yang dapat menampung banyak nilai
// elemen pada array boleh tipenya berbeda
// pasangan antara key dan value
// key nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];
echo "<br/>";
print_r($bulan);

// menampilkan array
// vardump() / print_r()
var_dump($hari);

// menampilkan 1 eleman pada array
echo $arr1[0]; // 123
echo "<br/>";
echo $bulan[1]; // februari

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "Jumat";
echo "<br/>";
var_dump($hari);
