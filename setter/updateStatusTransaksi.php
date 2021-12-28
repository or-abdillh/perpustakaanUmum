<?php

function updateStatusTransaksi($conn) {
   //Get primary key
   $key = $_GET["key"];
   
   //sql
   $sql = "UPDATE transaksi SET status_pengembalian = true WHERE id_transaksi = '$key'";
   
   //query
   mysqli_query($conn, $sql);
}