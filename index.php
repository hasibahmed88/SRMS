<?php
  include "include/config.php";
  include "include/autoload.php";
  $access = Cookie::ActiveUser();
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
    <link rel="stylesheet" href="css/style.css">
    <title>NIET</title>
  </head>
  <body style="background:#f9f9f9">
<div class="my-4">
    <h2 class="text-center text-dark">National Institute of Engineering & Technology</h2>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">
      <br>
      <h5 class="text-center">Student Login</h5> <br>

<!-- Student Login -->
      <div class="border bg-light  rounded p-4" style="box-shadow: 0px 0px 30px 0px #00000040">
<?php
  if (isset($_REQUEST['noresultfound'])) {
    echo "<h6 class='text-center text-danger'>No result found!</h6>";
  }
?>
          <form action="result_core.php" method="POST">
            <div class="form-group">
              <label for="roll"><strong>Board Roll</strong></label>
              <input type="number" name="roll" id="roll" class="form-control form-control-sm" required>
            </div>
            <div class="form-group">
              <label for="pwd"><strong>Password</strong></label>
              <input id="pwd" type="password" name="password" class="form-control form-control-sm"required>
            </div>
            <div class="form-group">
              <input type="submit" name="user_login_btn" class="btn btn-success btn-sm"required>
            </div>
            
          </form>
      </div>
    </div>
<!-- Admin Login -->
<?php
  $admin = new Admin();
  if (isset($_REQUEST['admin_login_btn'])) {
    $admin_login = $admin->AdminLogin($_REQUEST);
    if ($admin_login==true) {
      header("location: dashboard.php");
      return true;
    }
    else{
      header("location: index.php?loginFailed");
      echo "<strong class='text-danger'>Username or password incorrect!</strong>";
    }
  }
?>
    <div class="col-12 col-md-6">
      <br>
      <h5 class="text-center">Admin Login</h5> <br>
      
      <div class="border bg-light rounded p-4" style="box-shadow: 0px 0px 30px 0px #00000040">
        <form action="" method="POST">
    <?php
      if (isset($_REQUEST['loginFailed'])) {
        echo "<h6 class='text-center text-danger'>Username or password incorrect!</h6>";
      }
    ?>
          <div class="form-group">
            <label for="username"><strong>Username</strong></label>
            <input id="username" name="admin_username" type="text" class="form-control form-control-sm" required>
          </div>

          <div class="form-group">
            <label for="password"><strong>Password</strong></label>
            <input id="password" name="admin_pwd" type="password" class="form-control form-control-sm" required>
          </div>
          <div class="form-group">
            <input type="submit" name="admin_login_btn" value="Login" class="btn btn-primary btn-sm">
          </div>
        </form>
      </div>
       <br>
       <br>
    </div>
  </div>
</div>
        <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>