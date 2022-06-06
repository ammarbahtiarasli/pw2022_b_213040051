<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';
$users = query("SELECT * FROM users NATURAL JOIN level");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pengguna</title>
</head>
<body>
   <h1>Daftar Pengguna</h1>
   <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Username</th>
            <th>Email</th>
            <th>Level</th>
        </tr>';

$i = 1;
foreach ($users as $row) {
    $html .= '<tr>
            <td>' . $i++ . '</td>
            <td><img src="./img/' . $row["gambar"] . '" width="50"></td>
            <td>' . $row["username"] . '</td>
            <td>' . $row["email"] . '</td>
            <td>' . $row["nama_level"] . '</td>
        </tr>';
}

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-pengguna.pdf', 'I');
