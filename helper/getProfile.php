<?php

require_once __DIR__."/../helper/connection.php";

//Get profile information from admin
function getProfile() {
    //Create sql
    $sql = "SELECT * FROM accounts";
    $res = mysqli_query($conn, $sql);
    return $res["fullname"];
}