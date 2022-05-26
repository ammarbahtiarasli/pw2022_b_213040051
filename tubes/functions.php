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

    // upload gambar
    $gambar = upload();
    if (
        !$gambar
    ) {
        return false;
    }


    $query = "INSERT INTO sejarah_teknologi VALUES (null, '$judul', '$tanggal', '$gambar', '$body', '$kategori')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if (
        $error === 4
    ) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (
        !in_array($ekstensiGambar, $ekstensiGambarValid)
    ) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if (
        $ukuranFile > 1000000
    ) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, './img/' . $namaFileBaru);

    return $namaFileBaru;
}

function ubah_sejarah($data)
{
    $conn = Koneksi();

    $id_sejarah = $data["id_sejarah"];
    $judul = htmlspecialchars($data["judul"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $body = htmlspecialchars($data["body"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if (
        $_FILES['gambar']['error'] === 4
    ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE sejarah_teknologi SET
                judul = '$judul',
                tanggal = '$tanggal',
                gambar = '$gambar',
                body = '$body',
                id_kategori = '$kategori'
                WHERE id_sejarah = $id_sejarah
                ";
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

function cari($keyword)
{
    $query = "SELECT * FROM sejarah_teknologi NATURAL JOIN kategori
                WHERE
                judul LIKE '%$keyword%' OR
                nama_kategori LIKE '%$keyword%'
                ";
    return query($query);
}

function register($data)
{
    $conn = Koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $id_level = ($data["id_level"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
        return false;
    }


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '', '$password', '', '$id_level')");

    return mysqli_affected_rows($conn);
}
