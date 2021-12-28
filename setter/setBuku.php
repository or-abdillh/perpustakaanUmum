<?php 

function setBuku($conn) {
    //Get all data from $_POST
    $id = $_POST["id_buku"];
    $judul = $_POST["judul_buku"];
    $keterangan = $_POST["keterangan_buku"];
    $jumlah = $_POST["jumlah_buku"];
    $kategori = $_POST["kategori_buku"];

    //Create sql
    $sql = "INSERT INTO buku VALUES('$id', '$judul', '$kategori', '$keterangan', '$jumlah')";

    //Query
    $res = mysqli_query($conn, $sql);
    return $res;
}
