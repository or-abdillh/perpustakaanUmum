<?php

function updateAnggota($conn){
	//Get all form
	$id = $_POST["id_anggota"];
	$nama = $_POST["nama_anggota"];
	$alamat = $_POST["alamat_anggota"];
	$gender = $_POST["jenis_kelamin"];

	//sql
	$sql = "UPDATE anggota SET id_anggota = '$id', nama = '$nama',
	alamat = '$alamat', jenis_kelamin = '$gender' WHERE id_anggota = '$id'";

	//query
	$res = mysqli_query($conn, $sql);

	return true;
}
