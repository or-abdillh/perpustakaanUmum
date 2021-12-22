<?php

function getBuku($conn){
    
    //Get all field from table buku
    $sql = "SELECT * FROM buku";
    
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
