<?php
include "include/config.php";
include "classes/Database.class.php";
include "classes/Result.class.php";

if (isset($_REQUEST['id'])) {
    $deleteId = $_REQUEST['id'];
}

$result = new Result();
$delete_result = $result->DeleteResult($deleteId);
if ($delete_result==true) {
    header("location: dashboard.php");
    exit();
}
