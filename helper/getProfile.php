<?php

//Get profile information from admin
function getProfile() {
    require("connection.php");

    //Create sql
    $sql = "SELECT * FROM accounts";
    $res = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($res)["fullname"];
}