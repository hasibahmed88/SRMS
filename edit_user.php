<?php 
	require_once("header.php");
 ?>
<?php 
	require_once("./include/leftbar.php");
 ?>
<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 text-light" style="border-bottom:0.5px solid #ddd">
		<h3>Edit User Info</h3>
	</div>

<!-- breadcrumb -->
<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="manage_users.php">Manage Users</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit User Info</li>
  </ol>
</div>

<div class="m-md-3 p-3 bg-light rounded">
	<div class="row justify-content-center">
	<div class="col col-md-8">
		<div class="border bounded p-3 rounded">
<!-- Get user data -->
<?php
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $Db = new Database();
        $userInfo = "SELECT * FROM users WHERE id=$id ";
        $result = $Db->ResultQuery($userInfo);
        while ($userData = $result->fetch_array()) {
            $id = $userData['id'];
            $roll = $userData['roll'];
        }
    }
?>
<!-- Update user -->
<?php
        $user = new User();
        if (isset($_REQUEST['user_update_btn'])) {
            $updateUser = $user->UpdateUser($_REQUEST);
        }
    ?>
			<form action="" method="POST">
				<h5 class="mb-3">Edit User Info</h5>
            <?php
                if (isset($updateUser)) {
                    echo $updateUser;
                }
            ?>
                <div class="form-group">
                    <label for="department">Department</label>
                    <select name="department" id="department" class="form-control form-control-sm" required>
                        <option value="">Select</option>
                        <option value="Computer">Computer</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="Civil">Civil</option>
                        <option value="RAC">RAC</option>
                        <option value="Textile">Textile</option>
                        <option value="Marine">Marine</option>
                        <option value="GDPM">GDPM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="roll">Board Roll</label>
                    <input type="number" id="roll" name="roll" class="form-control form-control-sm" value="<?php echo $roll ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="con_pwd">Confirm password</label>
                    <input type="text" id="con_pwd" name="con_password" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <input type="hidden" name="update_id" value="<?php echo $id ?>">
                    <input type="submit" value="Update" name="user_update_btn" class="btn btn-success btn-sm"> 
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