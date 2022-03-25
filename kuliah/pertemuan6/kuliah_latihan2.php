<?php
$mahasiswa = [
    [
        "nama" => "Ahmad Ammar Bahtiar",
        "gambar" => "img/gambar1.jpg",
        "npm" => "213040051",
        "email" => "ahmad.213040051@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Udin",
        "gambar" => "img/gambar2.jpg",
        "npm" => "103040077",
        "email" => "udin@gmail.com",
        "jurusan" => "Teknik Industri"
    ],
    [
        "nama" => "Asep",
        "gambar" => "img/gambar3.jpg",
        "email" => "asep@yahoo.com",
        "jurusan" => "Teknik Mesin",
        "npm" => "203040055"
    ],
    [
        "nama" => "Dadan",
        "gambar" => "img/gambar1.jpg",
        "email" => "Dadan@unpas.com",
        "jurusan" => "Teknik inormatika",
        "npm" => "253040099"
    ]
]; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
</head>

<body>
    <div class="container my-3">
        <h1>Daftar Mahasiswa</h1>
        <a href="#" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $mhs) : ?>
                    <tr class="align-middle">
                        <td><?= $no++; ?></td>
                        <td>
                            <img src="<?= $mhs['gambar']; ?>" class="rounded-circle" width="50px">
                        </td>
                        <td><?= $mhs['nama']; ?></td>
                        <td><?= $mhs['npm']; ?></td>
                        <td><?= $mhs['email']; ?></td>
                        <td><?= $mhs['jurusan']; ?></td>
                        <td>
                            <a href="#" class="btn btn-warning">ubah</a>
                            <a href="#" class="btn btn-danger" onclick="return confirm('yakin data akan dihapus?');">hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
