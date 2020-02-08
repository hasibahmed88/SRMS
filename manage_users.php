<?php 
require_once("header.php");
 ?>
<?php 
require_once("./include/leftbar.php");
 ?>
<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 text-light" style="border-bottom:0.5px solid #ddd">
		<h3>Manage Users</h3>
	</div>
<!-- breadcrumb -->

<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    
    <li class="breadcrumb-item active" aria-current="page">Manage Users</li>
  </ol>
</div>
<div class="m-md-3 p-3 bg-light rounded">
	<div class="row justify-content-center">
	<div class="col-12 col-md-8">
		<div class="row justify-content-between mb-2">
			<div class="col-3">
				<a href="add_user.php" class="btn btn-primary btn-sm">Add User</a>
			</div>
			<div class="col-3">
				<form action="">
					<div class="input-group">
						<input type="text" name="search_key" class="form-control form-control-sm" >
						<input type="submit" value="Search" name="result_search_btn" class="btn btn-success btn-sm">
					</div>
				</form>
			</div>
		</div>
		<hr>

<!-- Search option -->

<?php

if (isset($_REQUEST['result_search_btn'])) {
	$Db = new Database();
	$s_key = $_REQUEST['search_key'];
	$viewSearchData = "SELECT * FROM users WHERE department like '%$s_key%' OR roll like '%$s_key%' ";
	$search_result = $Db->ResultQuery($viewSearchData);
	$search_count = $search_result->num_rows;

	
	?>

	<h6>Total search result : <?php echo $search_count ?>  </h6>
	<table class="table table-sm table-responsive-sm table-striped table-hover table-bordered">

		<tr class="bg-dark text-light">
			<th>No</th>
			<th>Department</th>
			<th>Board Roll</th>
			<th>Action</th>
		</tr>

<?php 
	$count_row = 1;
	while($sData = $search_result->fetch_array()){
		$department = $sData['department'];
		$roll = $sData['roll'];

		?>

	<tr>
		<td><?php echo $count_row; $count_row++ ?></td>
		<td><?php echo $department ?></td>
		<td><?php echo $roll ?></td>
		
		<td>
			<center>
			<a href="edit_result.php?id=<?php echo $id ?>" class="btn btn-info btn-sm"><span><i class="fas fa-edit"></i></span></a>
			<a href="process/delete_result_core.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?') "><span><i class="fas fa-trash-alt"></i></span></a>
			</center>
		</td>
	</tr>
	<?php }
}
?>
	</table>
	
	

<div class="border bounded p-3 rounded">
	<div class="row justify-content-center">
	<div class="col-3">
		<?php
			if (isset($_REQUEST['userDeleteSuccess'])) {
				echo "<h6 class='text-danger'>User deleted!</h6>";
			}
		?>
	</div>
</div>

<?php
	$Db = new Database();
	$viewUser = "SELECT * FROM users";
	$result = $Db->ResultQuery($viewUser);
	$total_user = $result->num_rows;
	$serial = 1;
?>
<h6>Total users : <?php echo $total_user ?></h6>
<table class="table table-sm table-responsive-sm table-striped table-hover table-bordered">
		<tr class="bg-dark text-light">
			<th>No</th>
			<th>Department</th>
			<th>Board Roll</th>
			<th>Action</th>
			
		</tr>
<?php

while ($data = $result->fetch_object()) {
	$id = $data->id;
	$department = $data->department;
	$roll = $data->roll;
?>
		<tr>
			<td><?php echo $serial; $serial++ ?></td>
			<td><?php echo $department ?></td>
			<td><?php echo $roll ?></td>
			<td>
				<center>
				<a href="edit_user.php?id=<?php echo $id ?>" class="btn btn-info btn-sm"><span><i class="fas fa-edit"></i></span></a>
				<a href="delete_user.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?') "><span><i class="fas fa-trash-alt"></i></span></a>
				</center>
			</td>
		</tr>
	<?php }
?>	
	</table>
		</div>

	</div>
</div>
</div>

</div>


 <?php 
require_once("footer.php");
 ?>