<!-- Navbar Admin -->
<header class="section-header border-bottom sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light nav-blur ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" height="40" class="logo">
            </a>

            <div class="order-lg-last flex-shrink-0">
                <a class="nav-link py-0 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Admin</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li> <a class="dropdown-item" href="profil.php">Profil</a> </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li> <a class="dropdown-item" href="../users/index.php">Keluar</a> </li>
                </ul>
                <div class="d-none d-lg-block">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>

            <div class="collapse navbar-collapse d-none d-lg-block" id="navbar_main">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php"> Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/sejarah_teknologi.php"> Sejarah Teknologi </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/kategori.php"> Kategori </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/level.php"> Level </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/users.php"> Pengguna </a>
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
        <!-- ==============COMPONENT MENU HOR =============== -->
        <div class="card p-3 nav-blur">
            <nav class="nav nav-pills mx-auto">
                <a class="nav-link active" aria-current="page" href="../admin/index.php">Dashboard</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kelola Tabel
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="../admin/sejarah_teknologi.php">Sejarah Teknologi</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../admin/kategori.php">Kategori</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../admin/level.php">Level</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../admin/users.php">Pengguna</a>
                        </li>
                    </ul>
                </li>
            </nav>
    </aside>
</div>
