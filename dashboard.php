<?php
  require_once("header.php");

 ?>
<style>
<?php
include "css/style.css";
?>
</style>

</div>
<!-- Main container -->
<div class="container-fluid m-0 p-0">
  <div class="row m-0 p-0"> <!-- main row -->
    

    <div class="col-md-3 col-lg-2 m-0 p-0 d-none d-md-block" style="box-shadow: 0px 10px 10px 2px #00000090">
      <div class="dash-sidebar p-3">
    
<?php
  $Db = new Database();
  $adminInfo = "SELECT * FROM admin";
  $result = $Db->ResultQuery($adminInfo);
  while ($data = $result->fetch_object()) {
    $username = $data->name;
    $bio = $data->bio;
    $dp = $data->dp;
  }
?>
<!-- User profile section -->
    <div class="collapse show profileBlock border rounded">
      <div class="user-profile">
        <div class="user-img" style="border: 1px solid #555">
          <img style="width:100%;height: 100%;" src="admin-img/<?php echo $dp ?>" alt="">
        </div>

        <div class="user-info text-center">
          <h5><?php echo $username ?></h5>
          <h6><?php echo $bio ?></h6>
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
                  <li class="pl-2"><a href="manage_result_dep.php"><small><span><i class="fas fa-user-cog"></i></span>&nbsp; &nbsp;Manage Result</small></a></li>
                </ul>
              </div>
            </li>
            <!--  -->
            <li>
              <a href="#" data-toggle="collapse" data-target="#users" ><span><i class="fas fa-users"></i></span>&nbsp;&nbsp;Users &nbsp; &nbsp;<span class="text-right"><i class="fas fa-caret-down"></i></span></a>
              <div class="collapse sub-menu" id="users">
                <ul class="m-0 p-0">
                  <li class="pl-2"><a href="add_user.php"><small><span><i class="fas fa-folder-plus"></i></span>&nbsp; &nbsp;Add User</small></a></li>
                  <li class="pl-2"><a href="manage_users.php"><small><span><i class="fas fa-user-cog"></i></span>&nbsp; &nbsp;Manage Users</small></a></li>
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

<!-- DASHBOARD -->
  <div class="col-md-9 col-lg-10">
    
    <div class="p-lg-4 p-md-3 text-light page-heading">
    <h2 class="text-center"><strong>National Institute of Engineering & Technology</strong></h2>
  </div>
  
<!-- User menu -->

<div class="row">

<div class="col-12 col-md-4 col-lg-3 mt-4">
    <a href="all_student.php">
      <div class="pb-3 pr-3 pl-1 dashboard-item3 bordered rounded">
        <span style="font-size:60px"><i class="fas fa-users-cog"></i></span>
        <h4 class="text-right">Students</h4>
      </div>
    </a>
  </div>
  <div class="col-12 col-md-4 col-lg-3 mt-4">
    <a href="manage_result_dep.php">
      <div class="pb-3 pr-3 pl-1 dashboard-item1 bordered rounded">
        <span style="font-size:60px"><i class="fas fa-graduation-cap"></i></span>
        <h4 class="text-right">Result</h4>
      </div>
    </a>
  </div>
 <div class="col-12 col-md-4 col-lg-3 mt-4">
    <a href="manage_users.php">
      <div class="pb-3 pr-3 pl-1 dashboard-item2 bordered rounded">
        <span style="font-size:60px"><i class="fas fa-users"></i></span>
        <h4 class="text-right">Users</h4>
      </div>
    </a>
  </div>
  
  <div class="col-12 col-md-4 col-lg-3 mt-4">
    <a href="admin.php">
      <div class="pb-3 pr-3 pl-1 dashboard-item4 bordered rounded">
        <span style="font-size:60px"><i class="fas fa-user-shield"></i></span>
        <h4 class="text-right">Admin</h4>
      </div>
    </a>
  </div>

    <!-- owl carousel -->
    <div class="col-12 mt-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
        <div class="owl-carousel">
            <!-- <div class="owl-items"> <img src="img/image3.png" alt=""> </div> -->
            <div class="owl-items"><img src="img/image1.png" alt=""></div>
            <div class="owl-items"><img src="img/image2.png" alt=""></div>
            <div class="owl-items"><img src="img/image3.png" alt=""></div>
            <div class="owl-items"><img src="img/image4.png" alt=""></div>
            <div class="owl-items"><img src="img/image5.png" alt=""></div>
            
          </div>
        </div>
      </div>
    </div>

</div>  <!-- row -->

  </div>  <!-- second column / col-md-9 col-lg-10 -->


 


<?php 
require_once("footer.php");
 ?>