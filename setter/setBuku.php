<?php 

function setBuku($conn) {
    //Get all data from $_POST
    $judul = $_POST["judul_buku"];
    $keterangan = $_POST["keterangan_buku"];
    $jumlah = $_POST["jumlah_buku"];
    $kategori = $_POST["kategori_buku"];

    //Create sql
    $sql = "INSERT INTO buku VALUES('', '$judul', '$kategori', '$keterangan', '$jumlah')";

    //Query
    $res = mysqli_query($conn, $sql);
    return $res;
}