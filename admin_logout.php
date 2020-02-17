<?php
include "classes/Cookie.class.php";

session_start();
session_destroy();

if (isset($_COOKIE['USSD'])) {
    $username = $_COOKIE['name'];
    $removeCookie = Cookie::RemoveCookie($username);
    header("location: index.php");
}