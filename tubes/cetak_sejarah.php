<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';
$sejarah = query("SELECT * FROM sejarah_teknologi NATURAL JOIN kategori");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Sejarah Teknologi</title>
</head>
<body>
   <h1>Daftar Sejarah Teknologi</h1>
   <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Tanggal</th>
        </tr>';

$i = 1;
foreach ($sejarah as $row) {
    $html .= '<tr>
            <td>' . $i++ . '</td>
            <td><img src="./img/' . $row["gambar"] . '" width="50"></td>
            <td>' . $row["judul"] . '</td>
            <td>' . $row["nama_kategori"] . '</td>
            <td>' . $row["tanggal"] . '</td>
        </tr>';
}

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-sejarah.pdf', 'I');
