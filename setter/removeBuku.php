<?php

require("../connection.php");

//Get primary key buku
if ( isset($_GET["key"]) ) {
   $key = $_GET["key"];
   //sql
   $sql = "DELETE FROM buku WHERE id_buku = '$key'";
   //query
   $res = mysqli_query($conn, $sql);
   //success ?
   if (mysqli_affected_rows($res) > 0) header("Location: ../pages/laporanDataBuku.php?remove=200");
   else header("Location: ../pages/laporanDataBuku.php?remove=501");
}