<?php

function updateBuku($conn) {
   //Get form 
   $id = $_POST["id_buku"];
   $judul = $_POST["judul_buku"];
   $keterangan = $_POST["keterangan_buku"];
   $jumlah = $_POST["jumlah_buku"];
   $kategori = $_POST["kategori_buku"];
   
   //sql
   $sql = "UPDATE buku SET id_buku = '$id', judul_buku = '$judul',
   jumlah_buku = '$jumlah', kategori_buku = '$kategori', keterangan = '$keterangan' 
   WHERE id_buku = '$id'";
   
   //Query
   $res = mysqli_query($conn, $sql);
   
   //return status
   return true;
}