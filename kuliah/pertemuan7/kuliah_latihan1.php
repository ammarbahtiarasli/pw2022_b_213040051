<?php
// Superglobals
// variabel bawaan php yang bisa di akses di mana pun
// bentuk nya array associative
// 1. $_GET
// 2. $_POST
// 3. $_SERVER
// $_GET = [
//     'nama' => 'sandhika',
//     'email' => 'sandhika@gmail.com',
// ];
// $_GET['nama'] = 'sandhika';
// $_GET['email'] = 'sandhika@gmail.com';

// var_dump($_GET);

?>

<!-- <h1>Hallo, <?= $_GET['nama']; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=ammar&npm=213040051&email=ammarbahtiarasli@gmail.com">ammar</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=rivan&npm=203040077&email=rivan@gmail.com">rivan</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=ardhi&npm=183040067&email=ardhi@gmail.com">ardhi</a>
    </li>
</ul>
