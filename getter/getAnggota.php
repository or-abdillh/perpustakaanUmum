<?php

//Get all field from table anggota
function getAnggota($conn, $key = false) {

    //Create sql
    $sql = "SELECT * FROM anggota";

    //Query using WHERE
    if ($key !== false) $sql = "SELECT * FROM anggota WHERE id_anggota = '$key'";
    
    //Query
    $res = mysqli_query($conn, $sql);

    $rows = [];

    //Fetch
    while ( $row = mysqli_fetch_assoc($res) ) {
        array_push($rows, $row);
    }

    return $rows;    
}
