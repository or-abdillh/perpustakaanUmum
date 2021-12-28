<?php

function getTransaksi($conn) {
	//
	$sql = "SELECT * FROM transaksi";

	$data = [];

	$rows = mysqli_query($conn, $sql);

	while ( $row = mysqli_fetch_assoc($rows) ) {
		array_push($data, $row);
	}

	return $data;
}
