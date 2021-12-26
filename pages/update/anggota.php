<?php
    require("../../connection.php");
    require("../../helper/auth.php");
    require("../../getter/getProfile.php");
    require("../../getter/getAnggota.php");
    require("../../setter/updateAnggota.php");
    //Nav Guard
    if ( !auth() ) header("Location: ../../login.php?auth=403"); 

    //query by id_anggota
    $response;
    if ( isset($_GET["key"]) ) $response = getAnggota($conn, $_GET["key"]);

    //Update handler
    $isUpdate = false;
    if ( isset($_POST["updateAnggota"]) ) $isUpdate = updateAnggota($conn);
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
                    <a class="active" href="../laporanDataAnggota.php">Lap. Data Anggota</a>
                </li>
                <li>
                    <a href="../laporanDataBuku.php">Lap. Data Buku</a>
                </li>
            </ul>
        </nav>

        <main>
            <h1>Update data anggota</h1>

            <?php
              if ( $isUpdate > 0 ) echo "<strong>Update sukses</strong>";
            ?>

            <form method="post" class="pure-form pure-form-aligned">
                <fieldset>
                <?php
                  //Get data from db
                  $id = $response[0]["id_anggota"];
                  $nama = $response[0]["nama"];
                  $alamat = $response[0]["alamat"];
                  $gender = $response[0]["jenis_kelamin"];
                  
                  echo <<<EOT
                    <div class="pure-control-group">
                        <label for="id">ID anggota</label>
                        <input value="$id" type="text" id="id" name="id_anggota" placeholder="Masukkan id anggota" />
                    </div>
                    <div class="pure-control-group">
                        <label for="nama">Nama Anggota</label>
                        <input value="$nama" type="text" id="nama" name="nama_anggota" placeholder="Masukkan nama anggota" />
                    </div>
                    <div class="pure-control-group">
                        <label for="alamat">Alamat</label>
                        <input value="$alamat" type="text" id="alamat" name="alamat_anggota" placeholder="Masukkan alamat anggota" />
                    </div>
                    <div class="pure-control-group">
                        <div class="pure-form">
                            <label>Jenis Kelamin</label>
                            <input type="hidden" id="gender" value="$gender" />
                            <label for="checkbox-radio-option-two" class="pure-radio">
                                <input type="radio" id="checkbox-radio-option-two" name="jenis_kelamin" value="pria" /> Pria
                            </label>
                            <label for="checkbox-radio-option-three" class="pure-radio">
                                <input type="radio" id="checkbox-radio-option-three" name="jenis_kelamin" value="wanita" /> Wanita
                            </label>
                        </div>
                    </div>
                    <div class="pure-controls">
                        <button type="submit" name="updateAnggota" class="pure-button pure-button-primary">Submit</button>
                    </div>
                EOT;
                ?>
                </fieldset>
            </form>
        </main>
    </div>
    <script>
       const radios = document.querySelectorAll('input[type=radio]');
       const gender = document.querySelector('#gender').value;

       radios.forEach(radio => {
       	if ( radio.value === gender ) radio.setAttribute('checked', true)
       })
    </script>
</body>
</html>
