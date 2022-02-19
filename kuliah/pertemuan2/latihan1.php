<?php
// pertemuan 2, sintax php

// NILAI
// angka (integer)
// tulisan (string)
// boolean (true/false)
echo 10; // integer
echo "<br>";
echo 'ammar'; // string
echo "<br>";
echo true; // 1
echo false; // boolean null
echo "<hr>";

// VARIABEL (variabel adalah tempat menyimpan data)
// awali dengan $, $nama_variabel, nama nya bebas
// boleh mengandung huruf, angka, underscore (_) , tidak boleh diawali angka dan spasi.

$nama = "ammar"; // variabel string
echo $nama;
echo "<hr>";

// STRING (string adalah kumpulan huruf)
// menggunakan "" atau ''

$hari = "jum'at";
echo $hari;
echo "<br>";
echo 'Sandhika : "Hallo , semua!"';
echo "<br>";
// ESCAPE CHARACTER
// \
echo 'Sandhika : "Selamat hari Jum\'at!"';
echo "<br>";
echo "Sandhika : \"Selamat hari Jum'at!\"";
// INTERPOLASI
// mencetak langsung isi variabel
echo "Hallo, nama saya $nama";
echo "<hr>";

// Concat (menggabungkan string)
// .
$nama_depan = "Ammar";
$nama_belakang = "Bahtiar";
echo $nama_depan . " " . $nama_belakang;
echo "<br>";
echo 'Sandhika : "Selamat' . " " . 'hari Jum\'at!"';
echo "<hr>";

// OPERATOR
// Aritmatika
// +, -, *, /, % (modulo / modulus / sisa bagi)
echo 1 + 1;
echo "Hasil dari 1 + 1 adalah " . 1 + 1;
echo "<br>";
echo 1 + 2 * 3 - 4; // KaBaTaKu
echo "<br>";
echo (1 + 2) * 3 - 4;
echo "<br>";
echo 10 % 5;
echo "<br>";
echo 1 + "1" + 1;
echo "<hr>";

// Perbandingan
// ==, !=, >, <, >=, <=,
// == adalah perbandingan nilai

echo 1 < 5;
echo "<br>";
echo 1 == 1;
echo "<hr>";

// Identitas / strict comparison (perbandingan tipe data)
// === , !== adalah perbandingan tipe data
echo 1 === "1";
echo "<hr>";

// increment / decrement
// ++, -- tambah / kurang 1
$x = 10;
$x--;
$x++;
echo $x++;
echo "<br>";
echo $x;
echo "<hr>";
