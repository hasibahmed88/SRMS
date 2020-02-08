<?php 
require_once("header.php");
 ?>
<?php 
require_once("./include/leftbar.php");
?>
<?php
	$result = new Result();
	if (isset($_REQUEST['result_btn'])) {
		$addResult = $result->AddResult($_REQUEST);
	}
?>
<style>
	body h6{
		font-size:16px;
	}
</style>
<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 text-light" style="border-bottom:0.5px solid #ddd">
		<h3>Add User</h3>
	</div>
<!-- breadcrumb -->
<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="manage_users.php">&nbsp;&nbsp;Manage users</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add User</li>
  </ol>
</div>

<div class="m-md-3 p-3 bg-light rounded">
	<div class="row justify-content-center">
		<div class="col col-md-8">
			<div class="border bounded p-3 rounded">
                <h5>Add User</h5>
				
	<?php
		$user = new User();
		if (isset($_REQUEST['add_user_btn'])) {
			$addUser = $user->AddUser($_REQUEST);
		}
		if (isset($addUser)) {
			echo $addUser;
		}
	?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="Department">Department</label>
						<select name="department" id="semister" class="form-control form-control-sm" required>
							<option value="">Select</option>
							<option value="Computer">Computer</option>
							<option value="Electrical">Electrical</option>
							<option value="Civil">Civil</option>
							<option value="Mechanical">Mechanical</option>
							<option value="Marine">Marine</option>
							<option value="RAC">RAC</option>
							<option value="GDPM">GDPM</option>
							<option value="Textile">Textile</option>
						</select>				
					</div>
					<div class="form-group">
						<label for="roll">Board Roll</label>
						<input type="number" id="roll" name="roll" class="form-control form-control-sm" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control form-control-sm">
					</div>
					<div class="form-group">
						<label for="con_password">Confirm password</label>
						<input type="password" id="con_password" name="con_password" class="form-control form-control-sm">
					</div>
					<div class="form-group">
						<input type="submit" name="add_user_btn" class="btn btn-sm btn-success" >
					</div>
				</form>
						
			</div>
		</div>
	</div>
</div>

</div>
</div>

 <?php 
require_once("footer.php");

 ?>