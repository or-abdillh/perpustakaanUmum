<?php


session_start();

//Auth handler
function auth() {
    return isset($_SESSION["login"]) ? true : false; 
}