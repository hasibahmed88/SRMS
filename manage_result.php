<?php 
require_once("header.php");
 ?>
<?php 
require_once("./include/leftbar.php");
 ?>
<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 text-light" style="border-bottom:0.5px solid #ddd">
		<h3>Manage Result</h3>
	</div>
<!-- breadcrumb -->
<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    
    <li class="breadcrumb-item active" aria-current="page">Manage Result</li>
  </ol>
</div>
<div class="m-md-3 p-3 bg-light rounded">
	<div class="row justify-content-center">
	<div class="col-12">
		<div class="row justify-content-between mb-2">
			<div class="col-3">
				<a href="add_result.php" class="btn btn-primary btn-sm">Add Result</a>
			</div>
			<div class="col-2">
				<!-- <form action="">
					<div class="input-group">
						<input type="text" name="search_key" class="form-control form-control-sm" >
						<input type="submit" value="Search" name="result_search_btn" class="btn btn-success btn-sm">
					</div>
				</form> -->
			</div>
		</div>
		<hr>

		<div class="border bounded p-3 rounded">
			<div class="row justify-content-end">
			<div class="col-3">
				<?php 
					if (isset($_REQUEST['resultDeletedSuccessfully'])) {
						?>
							<div class="alert alert-success">
								<strong>Success! </strong> <span> Result deleted successfull.</span>
							</div>
					<?php }
				 ?>
			</div>
		</div>

<?php
if (isset($_REQUEST['manage_result_btn'])) {
	$dep = $_REQUEST['department'];
	$sess = $_REQUEST['session'];
}
	$Db = new Database();
	$getResult = "SELECT * FROM result WHERE department = '$dep' AND session = '$sess' ";
	$result = $Db->ResultQuery($getResult);
	$count_student = $result->num_rows;
	$serial = 1;
?>
<h6>Total student : <?php echo $count_student ?></h6>
			<table class="table table-sm table-responsive-sm table-striped table-hover table-bordered">
					<tr class="bg-dark text-light">
						<th>No</th>
						<th>Department</th>
						<th>Session</th>
						<th>Board Roll</th>
						<th>1st</th>
						<th>2nd</th>
						<th>3rd</th>
						<th>4th</th>
						<th>5th</th>
						<th>6th</th>
						<th>7th</th>
						<th>8th</th>
						<th>Final CGPA</th>
						<th>Action</th>
					</tr>
	<?php
	
		while ($data = $result->fetch_array()) {
			$id = $data['id'];
			$department = $data['department'];
			$session = $data['session'];
			$roll = $data['roll'];
			$one = $data['1st'];
			$two = $data['2nd'];
			$three = $data['3rd'];
			$four = $data['4th'];
			$five = $data['5th'];
			$six = $data['6th'];
			$seven = $data['7th'];
			$eight = $data['8th'];
			$final = $data['final_cgpa'];

			?>
					<tr>
						<td><?php echo $serial; $serial++ ?></td>
						<td><?php echo $department ?></td>
						<td><?php echo $session ?></td>
						<td><?php echo $roll ?></td>
						<td><?php echo $one ?></td>
						<td><?php echo $two ?></td>
						<td><?php echo $three ?></td>
						<td><?php echo $four ?></td>
						<td><?php echo $five ?></td>
						<td><?php echo $six ?></td>
						<td><?php echo $seven ?></td>
						<td><?php echo $eight ?></td>
						<td><?php echo $final ?></td>
						
						<td>
							<a href="edit_result.php?id=<?php echo $id ?>" class="btn btn-info btn-sm"><span><i class="fas fa-edit"></i></span></a>
							<a href="delete_result_core.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?') "><span><i class="fas fa-trash-alt"></i></span></a>
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