<!-- Navbar -->
<header class="section-header border-bottom d-sm-none d-lg-block sticky-top">
    <nav class=" navbar navbar-expand-lg navbar-light nav-blur ">
        <div class=" container">
            <a class="navbar-brand" href="index_admin.php?dashboard">
                <img src="./img/logo.png" height="40" class="logo">
            </a>

            <div class="order-lg-last flex-shrink-0">
                <?php if (!isset($_SESSION['login'])) : ?>
                    <a class="btn btn-success-light" href="login.php?login">Masuk </a>
                    <a class="btn btn-light" href="register.php?register">Daftar </a>
                <?php else : ?>
                    <?php
                    $user = query("SELECT * FROM users NATURAL JOIN level WHERE id_user = '$_SESSION[id_user]'")[0];
                    ?>
                    <div class="nav-item dropdown">
                        <a class="nav-link py-0 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="icon-xs bg-gray rounded-circle me-2"><i class="fa fa-user"></i> </span>
                            <span><?= $user['username']; ?> </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="profil.php?profil">Profil</a> </li>
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
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="terbaru.php">Terbaru </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="populer.php">Populer </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.php?tentang">Tentang </a>
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
        <div class="card p-3 nav-blur">
            <nav class="nav nav-pills mx-auto">
                <a class="nav-link mx-2 active" aria-current="page" href="index.php?beranda">
                    <small class="text">Beranda</small> </a>
                <a class="nav-link " href="terbaru.php">
                    <small class=" text">Terbaru</small> </a>
                <a class="nav-link " href="populer.php">
                    <small class=" text">Populer</small> </a>
                <a class="nav-link " href="tentang.php?tentang">
                    <small class="text">Tentang</small> </a>
            </nav>
    </aside>
</div>
