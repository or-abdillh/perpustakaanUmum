<?php

require("../connection.php");
require("../getter/getBuku.php");
require("../getter/getAnggota.php");
require("../getter/getProfile.php");
require("../getter/getTransaksi.php");
require("../setter/setTransaksi.php");
require("../setter/updateStatusTransaksi.php");
require("../setter/removeTransaksi.php");
require("../helper/auth.php");

if ( !auth() ) header("Location: ../login.php?auth=403"); 

if ( isset($_POST["createTransaksi"]) ) setTransaksi($conn);

if ( isset($_GET["key"]) ) updateStatusTransaksi($conn);

if ( isset($_GET["del"]) ) removeTransaksi($conn);

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
                    <a class="active" href="./manajemenTransaksi.php">Transaksi peminjaman</a>
                </li>
                <li>
                    <p class="nav-title">Laporan</p>
                </li>
                <li>
                    <a href="./laporanDataAnggota.php">Lap. Data Anggota</a>
                </li>
                <li>
                    <a href="./laporanDataBuku.php">Lap. Data Buku</a>
                </li>
            </ul>
        </nav>

        <main>
            <h1>Transaksi peminjaman</h1>

			<form method="post" action="" class="pure-form pure-form-aligned" >
				<fieldset>
				   <div class="pure-control-group">
				      <label for="id_transaksi">ID Transaksi</label>
				      <input type="text" name="id_transaksi" id="id_transaksi" placeholder="Masukkan ID Transaksi peminjaman">
				   </div>
					<div class="pure-control-group">
						<label for="id_anggota">Nama Anggota</label>
						<select name="id_anggota">
							<option>--Nama anggota peminjam</option>
							<?php
								foreach( getAnggota($conn) as $item ) {
									$id_anggota = $item["id_anggota"];
									$nama = $item["nama"];
									echo "<option value=\"$id_anggota#$nama\">$nama</option>";
								};
							?>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="id_buku">Judul Buku</label>
						<select name="id_buku">
							<option>--Judul buku yang dipinjam</option>
							<?php
								foreach( getBuku($conn) as $item ){
									$id_buku = $item["id_buku"];
									$judul = $item["judul_buku"];
									echo "<option value=\"$id_buku#$judul\">$judul</option>";;	
								};
							?>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="tanggal_transaksi">Tanggal peminjaman</label>
						<input type="date" name="tanggal_transaksi" />
					</div>
					<div class="pure-controls">
						<button type="submit" name="createTransaksi" class="pure-button pure-button-primary">Submit</button>
					</div>
				</fieldset>
			</form>			
            
            <table class="pure-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Transaksi</th>
                        <th>ID Anggota</th>
                        <th>Peminjamn</th>
                        <th>ID Buku</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Status pengeembalian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach(getTransaksi($conn) as $item) {
                            $key = $item["id_transaksi"];
                            $tanggal = $item["tanggal_transaksi"];
                            $id_anggota = $item["id_anggota"];
                            $id_buku = $item["id_buku"];
                            $nama = $item["nama"];
                            $judul = $item["judul_buku"];
                            $status = $item["status_pengembalian"] > 0 ? 'sudah dikembalikan' : 'belum dikembalikan';
                            
                            echo <<<EOT
                                <tr>
                                    <td>$no</td>
                                    <td>$key</td>
                                    <td>$id_anggota</td>
                                    <td>$nama</td>
                                    <td>$id_buku</td>
                                    <td>$judul</td>
                                    <td>$tanggal</td>
                                    <td>$status</td>
                                    <td>
                                    <a class="pure-button pure-button-primary" href="manajemenTransaksi.php?key=$key">Ubah status</a>
                                    <a class="pure-button pure-button-error" href="manajemenTransaksi.php?del=$key">Hapus</a>
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
