<?php
require_once("header.php");
 ?>
<?php 
require_once("./include/leftbar.php");
 ?>

<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 text-light" style="border-bottom:0.5px solid #ddd">
		<h3>All Students</h3>
	</div>
<!-- breadcrumb -->
<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">All Students</li>
  </ol>
</div>

<div class="m-md-3 p-3 bg-light rounded">
<div class="row justify-content-center">
	<div class="col-12">
	<div class="border bounded p-3 rounded">
<!-- add result -->
	<div>
		<a href="add_student.php" class="btn btn-primary btn-sm mb-2">Add Student</a>
	</div>
		<div class="row justify-content-between">
		
		<div class="col-12 col-md-3">
			<h4>All Students</h4>
		</div>
	<!-- search option -->
		<div class="col-md-3 col-12 mb-3">
			<form action="" method="POST">
				<div class="input-group">
					<input type="text" name="search_keyword" class="form-control form-control-sm" >
					<input type="submit" name="student_search" value="Search" class="btn btn-success btn-sm">
				</div>
			</form>
		</div>
	</div>
	<br>

<!-- Search Result here -->

<?php

if (isset($_REQUEST['student_search'])) {
	$Db = new Database();
	$s_key = $_REQUEST['search_keyword'];
	$viewSearchData = "SELECT * FROM students WHERE fname like '%$s_key%' OR lname like '%$s_key% 'OR st_id like '%$s_key%' OR roll like '%$s_key%' OR reg like '%$s_key%' OR department like '%$s_key%' OR semister like '%$s_key%' OR session like '%$s_key%' OR phone like '%$s_key%' OR email like '%$s_key%' OR dob like '%$s_key%' OR blood like '%$s_key%' OR home like '%$s_key%' ";
	$result = $Db->ResultQuery($viewSearchData);
	$count_result = $result->num_rows;

	?>
	<div class="row">
	<div class="col-12">
		<h6>Total search result :  <?php echo $count_result ?> </h6>
		<table class="table table-sm table-bordered table-striped table-responsive-md">
			<tr class="bg-dark text-light ">
				<th>No</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Roll No</th>
				<th>Register No</th>
				<th>Department</th>
				<th>Semister</th>
				<th>Action</th>
			</tr>

	<?php
	$count = 1;
	while($sData = $result->fetch_array()){
		$fname = $sData['fname'];
		$lname = $sData['lname'];
		$roll = $sData['roll'];
		$reg = $sData['reg'];
		$department = $sData['department'];
		$session = $sData['session'];

		?>
		<tr>
			<td><?php echo $count; $count++ ?></td>
			<td><?php echo $fname ?></td>
			<td><?php echo $lname ?></td>
			<td><?php echo $roll ?></td>
			<td><?php echo $reg ?></td>
			<td><?php echo $department ?></td>
			<td><?php echo $session ?></td>
			
			<td>
				<a title="Edit" class="btn btn-primary btn-sm" href="#"><span><i class="fas fa-edit"></i></span></a>
				<a title="Delete" class="btn btn-danger btn-sm" href="#"><span><i class="fas fa-trash-alt"></i></span></a>
				<a title="Info" class="btn btn-info btn-sm" href="#"><span><i class="fas fa-info-circle"></i></span></a>
			</td>
			
		</tr>
	<?php }
}
?>	
</table>


<!-- all Student -->

	<?php
	$Db = new Database();
	$viewStudent = "SELECT * FROM students";
	$result = $Db->ResultQuery($viewStudent);
	$count_student = $result->num_rows;
	$serial = 1;
?>

<h6>Total Student : <?php echo $count_student ?></h6>
		<table class="table table-sm table-bordered table-striped table-responsive-md table-hover">
			
			<tr class="bg-dark text-light ">
				<th>No</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Roll No</th>
				<th>Register No</th>
				<th>Department</th>
				<th>Semister</th>
				<th>Action</th>
			</tr>
	<?php
	$student_count = 1;
	while ($data = $result->fetch_object()) {
		$id = $data->id;
		$fname = $data->fname;
		$lname = $data->lname;
		$roll = $data->roll;
		$reg = $data->reg;
		$department = $data->department;
		$semister = $data->semister;
		?>
		<tr>
			<td><?php echo $student_count;$student_count++ ?></td>
			<td><?php echo $fname ?></td>
			<td><?php echo $lname ?></td>
			<td><?php echo $roll ?></td>
			<td><?php echo $reg ?></td>
			<td><?php echo $department ?></td>
			<td><?php echo $semister ?></td>
			<td>
				<a title="Edit" class="btn btn-primary btn-sm" href="edit_student.php?id=<?php echo $id ?> "><span><i class="fas fa-edit"></i></span></a>
				<a title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?') " href="delete_student.php?id=<?php echo $id ?> "><span><i class="fas fa-trash-alt"></i></span></a>
				<a title="Info" class="btn btn-info btn-sm" href="student_info.php?id=<?php echo $id ?> "><span><i class="fas fa-info-circle"></i></span></a>
			</td>
		</tr>
	<?php }

	?>
		</table>
	</div>
</div>
<hr>



		</div>
	</div>
</div>
</div>


</div>


 <?php 
require_once("footer.php");
 ?>