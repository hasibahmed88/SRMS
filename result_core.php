<?php
include "include/config.php";
include "classes/Database.class.php";
include "classes/User.class.php";
  $user = new User();
  if (isset($_REQUEST['user_login_btn'])) {
    $roll = $_REQUEST['roll'];
    $password = $_REQUEST['password'];
    $userLogin = $user->UserLogin($_REQUEST);

    if ($userLogin==true) {
        header("location: result_page.php?userroll=$roll ");
        exit();
    }
    else{
        header("location: index.php?noresultfound");
        exit();
    }
  }
?>