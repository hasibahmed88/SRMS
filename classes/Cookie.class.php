<?php

class Cookie{
    public function SetCookie($userData){
        $setCookie = setcookie("USSD",$userData, time()+86400*365, '/');
        return $setCookie;
    }

    public function RemoveCookie($userData){
        $removeCookie = setcookie("USSD",$userData, time()-86400*365, '/');
        return $removeCookie;
    }

    public function ActiveUser(){
        if (isset($_COOKIE['USSD'])) {
            header("location: dashboard.php");
        }
    }

    public function InactiveUser(){
        if (!isset($_COOKIE['USSD'])) {
            header("location: index.php");
            exit();
        }
    }

}

