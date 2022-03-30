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
        "nama" => "Rivan",
        "gambar" => "img/gambar2.jpg",
        "npm" => "103040077",
        "email" => "Rivan@mail.unpas.ac.id",
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

    <title>Detail Mahasiswa</title>
</head>

<body>
    <div class="container my-3 ">
        <h1>Detail Mahasiswa</h1>

        <div class="card mb-3 " style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= $_GET['gambar']; ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $_GET['nama']; ?></h5>
                        <p class="card-text"><?= $_GET['npm']; ?></p>
                        <p class="card-text"><?= $_GET['email']; ?></p>
                        <p class="card-text"><?= $_GET['jurusan']; ?></p>

                        <a href="kuliah_latihan3.php" class="btn btn-warning">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
