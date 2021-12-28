<?php

function removeTransaksi($conn) {
   //Get primary key
   $key = $_GET["del"];
   
   //sql
   $sql = "DELETE FROM transaksi WHERE id_transaksi = '$key'";
   
   //query
   mysqli_query($conn, $sql);
}