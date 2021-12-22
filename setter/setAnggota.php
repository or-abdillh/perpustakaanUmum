<?php

function setAnggota($conn) {
    //Get data
    $id = $_POST["id_anggota"];
    $nama = $_POST["nama_anggota"];
    $alamat = $_POST["alamat_anggota"];
    $kelamin = $_POST["jenis_kelamin"];

    
    //Create sql
    $sql = "INSERT INTO anggota VALUES('$id', '$nama', '$kelamin', '$alamat')";

    //Query
    return mysqli_query($conn, $sql);
}