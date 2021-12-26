<?php

function getBuku($conn, $key = false){
    
    //Get all field from table buku
    $sql = "SELECT * FROM buku";
    
    //Query using where
    if ( $key !== false ) $sql = "SELECT * FROM buku WHERE id_buku = '$key'";
    
    // Query to DB
    $res = mysqli_query($conn, $sql);
    
    //For save all fields
    $rows = [];

    //Fetch
    while ( $row = mysqli_fetch_assoc($res) ) {
        array_push($rows, $row);
    }

    return $rows;
}
