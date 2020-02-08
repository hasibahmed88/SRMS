<?php
require_once("header.php");
 ?>
<?php 
require_once("./include/leftbar.php");
 ?>

<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 text-light" style="border-bottom:0.5px solid #ddd">
		<h3>Admin Page</h3>
	</div>

<!-- breadcrumb -->
<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Admin page</li>
  </ol>
</div>

<div class="m-md-3 p-3 bg-light rounded">
	<div class="row justify-content-center">
	<div class="col col-md-8">
		<div class="border bounded p-3 rounded">
<?php
	$admin = new Admin();
	if (isset($_REQUEST['admin_info_btn'])) {
		$info = $admin->AdminInfo($_REQUEST);
	}
?>
			<form enctype="multipart/form-data" action="" method="post">
				<h5>Admin Information</h5>
	<?php
		if (isset($info)) {
			echo $info;
		}
	?>			<div class="form-group">
					<label for="admin_username">Username</label>
					<input id="admin_username" name="admin_username" type="text" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<label for="name">Full Name</label>
					<input id="name" name="admin_name" type="text" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<label for="bio">Bio</label>
					<input id="bio" type="text" name="admin_bio" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<label for="dp">Photo</label>
					<input id="dp" type="file" name="admin_photo" class="form-control-file form-control-sm" required>
				</div>
				<div class="form-group">
					<input type="submit" name="admin_info_btn" value="Update" class="btn btn-success btn-sm">
				</div>
			</form>
		</div>

		<!-- change password -->
		<div class="border bounded p-3 rounded mt-4">
			<form action="" method="POST">
				<h5>Admin change password</h5>
<!-- Change password -->
<?php
	if (isset($_REQUEST['admin_pwd_btn'])) {
		$adminPwd = $admin->AdminPassword($_REQUEST);
	}
	if (isset($adminPwd)) {
		echo $adminPwd;
	}
?>
				<div class="form-group">
					<label for="cur-pwd">Current Password</label>
					<input id="cur-pwd" name="admin_pwd" type="text" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<label for="n-pwd">New Password</label>
					<input id="n-pwd" name="new_pwd" type="text" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<label for="con-pwd">Confirm Password</label>
					<input id="con-pwd" name="con_pwd" type="text" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<input type="submit" value="Update" name="admin_pwd_btn" class="btn btn-success btn-sm">
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>

 <?php 
require_once("footer.php");
 ?>