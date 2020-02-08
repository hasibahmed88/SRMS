<?php
include "classes/Cookie.class.php";
$access = Cookie::InactiveUser();
include "include/config.php";
include "classes/Database.class.php";
include "classes/User.class.php";
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $user = new User();
    $delete = $user->DeleteUser($id);
    if ($delete) {
        header("location: manage_users.php?userDeleteSuccess");
        exit();
    }
    else{
        header("location: manage_users.php?userDeleteFailed");
        exit();
    }

}
