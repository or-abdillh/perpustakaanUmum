<?php

//Get all field from table anggota
function getAnggota($conn) {

    //Create sql
    $sql = "SELECT * FROM anggota";

    //Query
    $res = mysqli_query($conn, $sql);

    $rows = [];

    //Fetch
    while ( $row = mysqli_fetch_assoc($res) ) {
        array_push($rows, $row);
    }

    return $rows;    
}