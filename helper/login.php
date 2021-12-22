<?php
include("./connection.php");

//Get data from $_POST
if ( isset($_POST["login"]) ) {
    //Query to db for validation data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT username FROM accounts WHERE username = '$username' AND password = '$password'";

    $res = mysqli_query($conn, $sql);
    echo count($res);
}