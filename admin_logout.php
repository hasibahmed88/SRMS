<?php
include "classes/Cookie.class.php";

if (isset($_COOKIE['USSD'])) {
    $username = $_COOKIE['name'];
    $removeCookie = Cookie::RemoveCookie($username);
    header("location: index.php");
}