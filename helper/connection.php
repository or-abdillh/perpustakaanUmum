<?php

//Setup
$hostName = "localhost";
$username = "root";
$password = "";
$dbName = "DB_Perpus";

//Create connection to MySQL server
$conn = mysqli_connect($hostName, $username, $password, $dbName);

//Error connection
if ( !$conn ) die();