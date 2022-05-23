<?php

function Koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'tubes_sejarah_teknologi') or die('KONEKSI GAGAL!!');

    return $conn;
}

function query($query)
{
    $conn = Koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = Koneksi();

    $judul = htmlspecialchars($data["judul"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $body = htmlspecialchars($data["body"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO sejarah_teknologi VALUES (null, '$judul', '$tanggal', '$gambar', '$body', '$kategori')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id_sejarah)
{
    $conn = Koneksi();

    $query = "DELETE FROM sejarah_teknologi WHERE id_sejarah = $id_sejarah";
    mysqli_query($conn, $query) or die(mysqli_error(($conn)));

    return mysqli_affected_rows($conn);
}
