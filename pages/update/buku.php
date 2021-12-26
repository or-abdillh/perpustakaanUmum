<?php
    require("../../connection.php");
    require("../../helper/auth.php");
    require("../../getter/getProfile.php");
    require("../../getter/getBuku.php");
    require("../../setter/updateBuku.php");
    //Nav Guard
    if ( !auth() ) header("Location: ../../login.php?auth=403"); 

    //query by id_buku
    $response;
    if ( isset($_GET["key"]) ) $response = getBuku($conn, $_GET["key"]);

    //Update handler
    $isUpdate = false;
    if ( isset($_POST["updateBuku"]) ) $isUpdate = updateBuku($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="background-color" content="#05445E">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/app.css">
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
                    <a href="../../index.php">Beranda</a>
                </li>
                <li>
                    <p class="nav-title">Entry data dan transaksi<p>
                </li>
                <li>
                    <a href="../inputDataAnggota.php">Data Anggota</a>
                </li>
                <li>
                    <a href="../inputDataBuku.php">Data Buku</a>
                </li>
                <li>
                    <a href="">Transaksi peminjaman</a>
                </li>
                <li>
                    <p class="nav-title">Laporan</p>
                </li>
                <li>
                    <a href="../laporanDataAnggota.php">Lap. Data Anggota</a>
                </li>
                <li>
                    <a class="active" href="../laporanDataBuku.php">Lap. Data Buku</a>
                </li>
            </ul>
        </nav>

        <main>
            <h1>Update data buku</h1>
            <?php
                if ( $isUpdate ) echo "<strong>Data berhasil diubah</strong>";
            ?>
            <form method="post" class="pure-form pure-form-aligned">
                <fieldset>
                <?php
                //parsing data
                $id = $response[0]["id_buku"];
                $judul = $response[0]["judul_buku"];
                $kategori = $response[0]["kategori_buku"];
                $jumlah = $response[0]["jumlah_buku"];
                $kererangan = $response[0]["keterangan"];
                
                   echo <<<EOT
                    <div class="pure-control-group">
                        <label for="id">ID Buku</label>
                        <input value="$id" type="text" id="id" name="id_buku" placeholder="Masukkan ID buku" />
                    </div>
                    <div class="pure-control-group">
                        <label for="judul">Judul Buku</label>
                        <input value="$judul" type="text" id="judul" name="judul_buku" placeholder="Masukkan judul buku" />
                    </div>
                    <div class="pure-control-group">
                        <label for="keterangan">Keterangan</label>
                        <input value="$kererangan" type="text" id="keterangan" name="keterangan_buku" placeholder="Masukkan keterangan buku" />
                    </div>
                    <div class="pure-control-group">
                        <label for="jumlah">Jumlah buku</label>
                        <input value="$jumlah" type="text" id="jumlah" name="jumlah_buku" placeholder="Masukkan jumlah buku" />
                    </div>
                    <div class="pure-control-group">
                        <label for="kategori">Kategori buku</label>
                        <input type="hidden" value="$kategori" id="kategori" />
                        <select id="kategori" name="kategori_buku">
                            <option value="0">--Kategori--</option>
                            <option value="novel">Novel</option>
                            <option value="pelajaran">Pelajaran</option>
                            <option value="informatika">Informatika</option>
                        </select>
                    </div>
                    <div class="pure-controls">
                        <button type="submit" name="updateBuku" class="pure-button pure-button-primary">Submit</button>
                    </div>
EOT;
               ?>
                </fieldset>
            </form>
        </main>
    </div>
    <script>
       const options = document.querySelectorAll('option')
       const kategori = document.querySelector('#kategori').value
       
       options.forEach(opt => {
          if ( opt.value === kategori ) opt.setAttribute('selected', true)
       })
    </script>
</body>
</html>
