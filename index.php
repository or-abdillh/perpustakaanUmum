<?php
    require("/helper/connection.php");
    require("/helper/auth.php");
    require("/helper/getProfile.php");

    if ( !auth() ) header("Location: ./login.php?auth=403"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="background-color" content="#05445E">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/app.css">
    <title>Perpustakaan Umum</title>
</head>
<body>
    
    <div class="app">

        <header>
            <h1>Perpustakaan Umum</h1>
            <p>Politeknik Hasnur</p>

            <div class="bottom-bar">
                <?php
                    $admin = getProfile();
                    echo "<p>Hello, $admin</p>";
                ?>
            </div>
        </header>

        <nav>
            <ul>
                <li>
                    <a class="active" href="./index.html">Beranda</a>
                </li>
                <li>
                    <p class="nav-title">Entry data dan transaksi<p>
                </li>
                <li>
                    <a href="./pages/inputDataAnggota.html">Data Anggota</a>
                </li>
                <li>
                    <a href="./pages/inputDataBuku.html">Data Buku</a>
                </li>
                <li>
                    <a href="">Transaksi peminjaman</a>
                </li>
                <li>
                    <p class="nav-title">Laporan</p>
                </li>
                <li>
                    <a href="">Lap. Data Anggota</a>
                </li>
                <li>
                    <a href="">Lap. Data Buku</a>
                </li>
            </ul>
        </nav>

        <main>
            <h1>Beranda</h1>

            <div class="banner">
                <h2>SELAMAT DATANG DI SISTEM INFORMASI PERPUSTAKAAN</h2>
                <P>"Membaca adalah jendela dunia"</P>
            </div>
        </main>

    </div>

</body>
</html>
