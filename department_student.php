<?php 
require_once("header.php");
 ?>
<?php 
require_once("./include/leftbar.php");
 ?>
<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 text-light" style="border-bottom:0.5px solid #ddd">
		<h3>Department students</h3>
	</div>
<!-- breadcrumb -->

<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="department.php">&nbsp;&nbsp;Department</a></li>
    <li class="breadcrumb-item active" aria-current="page">Department students</li>
  </ol>
</div>

<div class="m-md-3 p-3 bg-light rounded">
	<div class="row justify-content-center">
	<div class="col-12">
		<div class=" p-3 ">
			<div class="row justify-content-between">
				<div class="col-12 col-md-3">
					<h5 class="mb-3">Department students</h5>
				</div>
				</div>
			</div>
		</div>
<div class="col-12 border">
	<div class="row justify-content-center">
		<div class="col-12 col-md-10 p-3 border my-4">

<?php 
	if (isset($_REQUEST['department_btn'])) {
		$department = $_REQUEST['department'];
		$session = $_REQUEST['session'];
		$Db = new Database();
		$viewStudent = "SELECT * FROM students WHERE department='$department' AND session = '$session' ";
		$result = $Db->ResultQuery($viewStudent);
		$total_student = $result->num_rows;
		$serial = 1;
?>
		<h6>Total students : <?php echo $total_student ?></h6>
			<table class="table border table-hover table-sm">
				<tr class="bg-dark text-light border">
					<th>No.</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Department</th>
					<th>Roll</th>
					<th>Session</th>
					<th>Action</th>
				</tr>
	<?php
			while($data = $result->fetch_object()){
				$id = $data->id;
				$fname = $data->fname;
				$lname = $data->lname;
				$roll = $data->roll;
				$department = $data->department;
				$session = $data->session;
				?>
				<tr>
					<td class="border"><?php echo $serial; $serial++ ?></td>
					<td class="border"><?php echo $fname ?></td>
					<td class="border"><?php echo $lname ?></td>
					<td class="border"><?php echo $roll ?></td>
					<td class="border"><?php echo $department ?></td>
					<td class="border"><?php echo $session ?></td>
					
					<td>
						<a title="Edit" class="btn btn-primary btn-sm" href="edit_student.php?id=<?php echo $id ?> "><span><i class="fas fa-edit"></i></span></a>
						<a title="Delete" onclick="return confirm('Are you sure to delete this?') " class="btn btn-danger btn-sm" href="delete_student.php?id=<?php echo $id ?> "><span><i class="fas fa-trash-alt"></i></span></a>
						<a title="Info" class="btn btn-info btn-sm" href="student_info.php?id=<?php echo $id ?>  "><span><i class="fas fa-info-circle"></i></span></a>
					</td>
				</tr>
			<?php }
		}
	?>
			</table>
		</div>
	</div>
</div>

	</div>
</div>
</div>

</div>

 <?php 
require_once("footer.php");
 ?>