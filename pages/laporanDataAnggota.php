<?php

require("../connection.php");
require("../getter/getAnggota.php");
require("../helper/auth.php");
require("../getter/getProfile.php");

if ( !auth() ) header("Location: ../login.php?auth=403"); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="background-color" content="#05445E">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/app.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <title>Perpustakaan Umum</title>
</head>
<body>
    
    <div class="app">

        <header>
            <h1>Perpustakaan Umum</h1>
            <p>Politeknik Hasnur</p>

            <div class="bottom-bar">
                <?php
                    echo "Hello, " . getProfile($conn);
                ?>
            </div>
        </header>

        <nav>
            <ul>
                <li>
                    <a href="../index.php">Beranda</a>
                </li>
                <li>
                    <p class="nav-title">Entry data dan transaksi<p>
                </li>
                <li>
                    <a href="./inputDataAnggota.php">Data Anggota</a>
                </li>
                <li>
                    <a href="./inputDataBuku.php">Data Buku</a>
                </li>
                <li>
                    <a href="./manajemenTransaksi.php">Transaksi peminjaman</a>
                </li>
                <li>
                    <p class="nav-title">Laporan</p>
                </li>
                <li>
                    <a class="active" href="./laporanDataAnggota.php">Lap. Data Anggota</a>
                </li>
                <li>
                    <a href="./laporanDataBuku.php">Lap. Data Buku</a>
                </li>
            </ul>
        </nav>

        <main>
            <h1>Daftar Anggota</h1>

            <table class="pure-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Anggota</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach(getAnggota($conn) as $item) {
                            $key = $item["id_anggota"];
                            $nama = $item["nama"];
                            $kelamin = $item["jenis_kelamin"];
                            $alamat = $item["alamat"];
                            $id = $item["id_anggota"];
                            echo <<<EOT
                                <tr>
                                    <td>$no</td>
                                    <td>$key</td>
                                    <td>$nama</td>
                                    <td>$kelamin</td>
                                    <td>$alamat</td>
                                    <td>
                                    <a class="pure-button pure-button-primary" href="update/anggota.php?key=$key">Ubah</a>
                                    <a class="pure-button pure-button-error" href="../setter/removeAnggota.php?key=$key">Hapus</a>
                                    </td>
                                </tr>
                            EOT;
                            $no++;
                        }
                    ?>
                </tbody>
            </table>             
        </main>

    </div>

</body>
</html>
