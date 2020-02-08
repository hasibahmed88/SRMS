<?php 
require_once("header.php");
 ?>
<?php 
require_once("./include/leftbar.php");

 ?>
<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 text-light" style="border-bottom:0.5px solid #ddd">
		<h3>Student Information</h3>
	</div>
<!-- breadcrumb -->

<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="all_student.php">All Students</a></li>
    <li class="breadcrumb-item active" aria-current="page">Student Info</li>
  </ol>
</div>
<!-- Student information -->
<?php
		if (isset($_REQUEST['id'])) {
			$userId = $_REQUEST['id'];

			$Db = new Database();
			$getStudentInfo = "SELECT * FROM students WHERE id=$userId ";
			$result = $Db->ResultQuery($getStudentInfo);
			while($data = $result->fetch_object()){
				$id = $data->id;
				$fname = $data->fname;
				$lname = $data->lname;
				$identity = $data->st_id;
				$roll = $data->roll;
				$reg = $data->reg;
				$department = $data->department;
				$semister = $data->semister;
				$session = $data->session;
				$phone = $data->phone;
				$email = $data->email;
				$dob = $data->dob;
				$blood = $data->blood;
				$home = $data->home;
			}
		}
	?>
<div class="m-md-3 p-3 bg-light rounded">
	<div class="row justify-content-center">
	<div class="col col-md-8">
		<div class="border bounded p-3 rounded">
		
			<div class="row justify-content-between">
				<div class="col-12 col-md-8">
					<h5>Student name: <strong><?php echo $fname.' '.$lname ?></strong></h5>
				</div>
				<div class="col-12 col-md-3">
					<a title="Edit" class="btn btn-primary btn-sm" href="edit_student.php?id=<?php echo $id ?>"><span><i class="fas fa-edit"></i></span> Edit Info</a>
					<a title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="process/delete_student_core.php?id=<?php echo $id ?>"><span><i class="fas fa-trash-alt"></i></span> Delete</a>
				</div>
			</div>
			<hr>
			<div class="row justify-content-around">
				<div class="col-12 col-md-6">
					<h5 class="text-center mb-3">Information</h5>
					<table class="table table-bordered">
						<tr>
							<td class="p-2 text-right">First Name :</td>
							<td class="p-2"><?php echo $fname ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Last Name :</td>
							<td class="p-2"><?php echo $lname ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">ID :</td>
							<td class="p-2"><?php echo $identity ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Roll No :</td>
							<td class="p-2"><?php echo $roll ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Register No :</td>
							<td class="p-2"><?php echo $reg ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Department :</td>
							<td class="p-2"><?php echo $department ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Semister :</td>
							<td class="p-2"><?php echo $semister ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Phone :</td>
							<td class="p-2"><?php echo $phone ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Email :</td>
							<td class="p-2"><?php echo $email ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Date of Birth :</td>
							<td class="p-2"><?php echo $dob ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Blood group :</td>
							<td class="p-2"><?php echo $blood ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Address :</td>
							<td class="p-2"><?php echo $home ?></td>
						</tr>
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