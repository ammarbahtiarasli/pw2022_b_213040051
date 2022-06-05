<?php

function Koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_b_213040051') or die('KONEKSI GAGAL!!');

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

    // cek apakah user ttidak mengupload gambar
    if ($_FILES["gambar"]["error"] === 4) {
        // pilih gambar default
        $gambar = 'nophoto.png';
    } else {
        // jalankan fungsi upload
        $gambar = upload();
        // cek jika upload gagal
        if (!$gambar) {
            return false;
        }
    }

    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    // $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa VALUES (null, '$npm', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = Koneksi();

    $id = $data['id'];
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
                npm = '$npm',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = Koneksi();

    // query mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    // cek jika gambar default
    if ($mhs['gambar'] !== 'nophoto.png') {
        // hapus gambar dari folder
        unlink('img/' . $mhs['gambar']);
    }

    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query) or die(mysqli_error(($conn)));

    return mysqli_affected_rows($conn);
}

function upload()
{
    // siapkan data gambar
    $filename = $_FILES['gambar']['name'];
    $filetmpname = $_FILES['gambar']['tmp_name'];
    $filesize = $_FILES['gambar']['size'];
    $filetytpe = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek apakah yang di upload bukan gambar
    if (!in_array(strtolower($filetytpe), $allowedtype)) {
        echo "<script>
            alert('upload gambar nya yang bener dong !');
            </script>";
        return false;
    }

    // cek apakah gambar terlalu besar
    if ($filesize > 1000000) {
        echo "<script>
            alert('ukuran gambar nya kegedean woi !');
            </script>";
        return false;
    }

    // proses upload gambar
    $newfilename = uniqid() . $filename;
    move_uploaded_file($filetmpname, 'img/' . $newfilename);

    return $filename;
}
