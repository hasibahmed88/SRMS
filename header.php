<?php 
include "classes/Cookie.class.php";
$access = Cookie::InactiveUser();
include "include/config.php";
include "include/autoload.php";
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,600i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <!-- External Stylesheet -->

    <style>
      <?php
        include "css/style.css";
      ?>
    </style>

    <title>NIET</title>
  </head>
  <body>

<div class="container-fluid m-0 p-0">
  <nav class="navbar navbar-expand-lg navbar-dark bg-light sticky-top">
    <h2><a class="navbar-brand" href="dashboard.php"><strong>NIET</strong></a></h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="mt-0 ml-3">
          <div style="text-decoration: none;cursor: pointer;" class="text-dark btn d-inline-block UserProfile">&nbsp;&nbsp;&nbsp;<span class="text-light"><i class="fas fa-user"></i></span></div>
        </li>

      </ul>
      <strong><a style="text-decoration: none;" href="admin_logout.php" class="text-danger border rounded p-1"><span><i class="fas fa-sign-out-alt"></i> </span> Logout</a></strong>
    

<!-- menubar -->

<div class="col-md-3 col-lg-2 m-0 mt-3 p-0 d-block d-md-none" style="box-shadow: 0px 10px 10px 2px #00000090">
      <div class="dash-sidebar p-3">
        
<!-- User profile section -->

    <div class="collapse show profileBlock border rounded">
      <div class="user-profile">
        <div class="user-img">
          <img style="width:100%;height: 100%;" src="admin-img/<?php echo $dp ?>" alt="">
        </div>
        <div class="user-info text-center">
          <h5>Name</h5>
          <h6>Bio</h6>
        </div>
      </div>
    </div>
        <p class="pt-3 text-muted">MAIN CATEGORY</p>
        <div class="">
          <ul class="p-0">
            <li>
              <a href="#"><span><i class="fas fa-tachometer-alt"></i></span>&nbsp;&nbsp;Dashboard</a>
            </li>
          </ul>
        </div>
        <p class="text-muted">APPEARANCE</p>
        <div class="menu-list">
          <ul class="p-0 p-0">
          <li >
              <a href="department.php" data-toggle="collapse" data-target="#departments" ><span><i class="fas fa-file-alt"></i></span>&nbsp;&nbsp;Department &nbsp; &nbsp;<span class="text-right"><i class="fas fa-caret-down"></i></span></a>
              <div class="collapse sub-menu" id="departments">
                <ul class="m-0 p-0">
                  <li class="pl-2"><a href="department.php"><small><span><i class="fas fa-align-justify"></i></span>&nbsp;&nbsp;View department</small></a></li>
                </ul>
              </div>
            </li>
            <!--  -->
            <li>
              <a href="#"data-toggle="collapse" data-target="#Students" ><span><i class="fas fa-users-cog"></i></span>&nbsp;&nbsp;Students &nbsp; &nbsp;<span class="text-right"><i class="fas fa-caret-down"></i></span></a>
              <div class="collapse sub-menu" id="Students">
                <ul class="m-0 p-0">
                  <li class="pl-2"><a href="add_student.php"><small><span><i class="fas fa-user-plus"></i></span>&nbsp;&nbsp;Add Student</small></a></li>
                  <li class="pl-2"><a href="all_student.php"><small><span><i class="fas fa-users"></i></span>&nbsp;&nbsp;All Student</small></a></li>
                </ul>
              </div>
            </li>
            <!--  -->
            <li>
              <a href="#" data-toggle="collapse" data-target="#Result" ><span><i class="fas fa-graduation-cap"></i></span>&nbsp;&nbsp;Result &nbsp; &nbsp;<span class="text-right"><i class="fas fa-caret-down"></i></span></a>
              <div class="collapse sub-menu" id="Result">
                <ul class="m-0 p-0">
                  <li class="pl-2"><a href="add_result.php"><small><span><i class="fas fa-folder-plus"></i></span>&nbsp; &nbsp;Add Result</small></a></li>
                  <li class="pl-2"><a href="manage_result.php"><small><span><i class="fas fa-user-cog"></i></span>&nbsp; &nbsp;Manage Result</small></a></li>
                </ul>
              </div>
            </li>
            <!--  -->
            <li>
              <a href="admin.php" ><span><i class="fas fa-user-shield"></i></span>&nbsp;&nbsp;Admin</a>
            </li>
          </ul>
        </div>

      </div>
    </div>

    </div>
  </nav>



<div class="container-fluid m-0 p-0">
  <div class="row m-0 p-0"> <!-- main row -->