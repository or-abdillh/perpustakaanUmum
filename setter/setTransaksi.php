<?php

function setTransaksi($conn) {
	//Parse data from unique pattern into array
	$anggota = explode("#", $_POST["id_anggota"]);

	$buku = explode("#", $_POST["id_buku"]);
 
	$tanggal = $_POST["tanggal_transaksi"];
	$id = $_POST["id_transaksi"];
	//SQL
	$sql = "INSERT INTO transaksi (id_transaksi, tanggal_transaksi, id_anggota, id_buku, nama, judul_buku, status_pengembalian) VALUES('$id','$tanggal','$anggota[0]', '$buku[0]', '$anggota[1]', '$buku[1]', false)";
	
	mysqli_query($conn, $sql);
}