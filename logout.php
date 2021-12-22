<?php

//Logout handler
//Destroy all session

session_start();
session_destroy();

header("Location: ./login.php");