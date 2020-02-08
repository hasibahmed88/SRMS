<?php
include "classes/Cookie.class.php";
$access = Cookie::InactiveUser();
include "include/config.php";
include "classes/Database.class.php";
include "classes/Student.class.php";
if (isset($_REQUEST['id'])) {
    $userId = $_REQUEST['id'];

    $student = new Student();
    $delete = $student->DeleteStudent($userId);
    if ($delete==true) {
        header("location: all_student.php");
    }

}
