<!-- Navbar Admin -->
<header class="section-header border-bottom">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./img/logo-st.png" height="40" class="logo">
            </a>

            <div class="order-lg-last flex-shrink-0">
                <?php if (!isset($_SESSION['login'])) : ?>
                    <a class="btn btn-success-light" href="login.php">Masuk </a>
                    <a class="btn btn-light" href="register.php">Daftar </a>
                <?php else : ?>
                    <?php
                    $user = query("SELECT * FROM users NATURAL JOIN level WHERE id_user = '$_SESSION[id_user]'")[0];
                    ?>
                    <div class="nav-item dropdown">
                        <a class="nav-link py-0 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./img/<?= $user['gambar']; ?>" alt="" class="icon-sm bg-gray rounded-circle me-2">
                            <span> <?= $user['username']; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="profil_admin.php">Profil</a> </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" target="_blank" href="https://srv46.niagahoster.com:2096/cpsess1949319814/3rdparty/roundcube/?_task=mail&_mbox=INBOX">Email</a> </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="logout.php">Keluar</a> </li>
                        </ul>
                    </div>
                <?php endif ?>
                <div class="d-none d-lg-block">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>

            <div class="collapse navbar-collapse d-none d-lg-block" id="navbar_main">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index_admin.php"> Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sejarah_teknologi.php"> Sejarah Teknologi </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php"> Kategori </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php"> Pengguna </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Navbar -->

<!-- Nav Mobile -->
<div class="row gy-3 fixed-bottom">
    <aside class="col-xl-6 d-lg-none d-sm-block">
        <!--  -->
        <div class="card p-3 nav-blur">
            <nav class="nav nav-pills mx-auto">
                <a class="nav-link mx-2 active" aria-current="page" href="index_admin.php">
                    <small class="text">Dashboard</small> </a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <small class="text">Data Tabel</small>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="sejarah_teknologi.php">Sejarah Teknologi</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="kategori.php">Kategori</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="users.php">Pengguna</a>
                        </li>
                    </ul>
                </li>
            </nav>
    </aside>
</div>
