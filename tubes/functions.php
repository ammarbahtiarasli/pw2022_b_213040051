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


    $query = "INSERT INTO sejarah_teknologi VALUES (null, '$judul', '$tanggal', '$gambar', '$body', '$kategori')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    $filetytpe = pathinfo($namaFile, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek apakah yang di upload bukan gambar
    if (!in_array(strtolower($filetytpe), $allowedtype)) {
        echo "<script>
            alert('yang di upload bukan gambar');
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
    $namaFileBaru = uniqid() . $namaFile;

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

    // query mahasiswa berdasarkan id
    $sejarah = query("SELECT * FROM sejarah_teknologi WHERE id_sejarah = $id_sejarah")[0];

    // cek jika gambar default
    if ($sejarah['gambar'] !== 'nophoto.png') {
        // hapus gambar dari folder
        unlink('img/' . $sejarah['gambar']);
    }

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

function cari_user($keyword)
{
    $query = "SELECT * FROM users NATURAL JOIN level
                WHERE
                username LIKE '%$keyword%' OR
                email LIKE '%$keyword%'
                ";
    return query($query);
}

function cari_kategori($keyword)
{
    $query = "SELECT * FROM kategori
                WHERE
                nama_kategori LIKE '%$keyword%'
                ";
    return query($query);
}

function tambah_kategori($data)
{
    $conn = Koneksi();

    $kategori = htmlspecialchars($data["nama_kategori"]);


    $query = "INSERT INTO kategori VALUES (null, '$kategori')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah_kategori($data)
{
    $conn = Koneksi();

    $id_kategori = $data["id_kategori"];
    $nama_kategori = htmlspecialchars($data["nama_kategori"]);

    $query = "UPDATE kategori SET
                nama_kategori = '$nama_kategori'
                WHERE id_kategori = $id_kategori
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus_kategori($id_kategori)
{
    $conn = Koneksi();

    $query = "DELETE FROM kategori WHERE id_kategori = $id_kategori";
    mysqli_query($conn, $query) or die(mysqli_error(($conn)));

    return mysqli_affected_rows($conn);
}

function register($data)
{
    $conn = Koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $id_level = 1;

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
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$email', '$password', '$gambar', '$id_level')");

    return mysqli_affected_rows($conn);
}

function ubah_user($data)
{
    $conn = Koneksi();

    $id_user = $data["id_user"];
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $id_level = htmlspecialchars($data["id_level"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if (
        $_FILES['gambar']['error'] === 4
    ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE users SET
                username = '$username',
                email = '$email',
                gambar = '$gambar',
                id_level = '$id_level'
                WHERE id_user = $id_user
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah_akun($data)
{
    $conn = Koneksi();

    $id_user = $data["id_user"];
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $id_level = 1;
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if (
        $_FILES['gambar']['error'] === 4
    ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE users SET
                username = '$username',
                email = '$email',
                gambar = '$gambar',
                id_level = '$id_level'
                WHERE id_user = $id_user
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus_user($id_user)
{
    $conn = Koneksi();

    // query mahasiswa berdasarkan id
    $users = query("SELECT * FROM users WHERE id_user = $id_user")[0];

    // cek jika gambar default
    if ($users['gambar'] !== 'nophoto.png') {
        // hapus gambar dari folder
        unlink('img/' . $users['gambar']);
    }

    $query = "DELETE FROM users WHERE id_user = $id_user";
    mysqli_query($conn, $query) or die(mysqli_error(($conn)));

    return mysqli_affected_rows($conn);
}

function ubah_password($data)
{
    $conn = Koneksi();

    $id_user = $data["id_user"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // ganti password baru ke database
    mysqli_query($conn, "UPDATE users SET password = '$password' WHERE id_user = $id_user");

    return mysqli_affected_rows($conn);
}

function disukai($data)
{
    $conn = Koneksi();

    $id_sejarah = htmlspecialchars($data["id_sejarah"]);
    $id_user = htmlspecialchars($data["id_user"]);


    $query = "INSERT INTO love VALUES (null, '$id_sejarah', '$id_user')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus_disukai($id_love)
{
    $conn = Koneksi();

    $query = "DELETE FROM love WHERE id_love = $id_love";
    mysqli_query($conn, $query) or die(mysqli_error(($conn)));

    return mysqli_affected_rows($conn);
}
