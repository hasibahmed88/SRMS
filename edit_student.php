<?php 
	require_once("header.php");
 ?>
<?php 
	require_once("./include/leftbar.php");
 ?>
<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 text-light" style="border-bottom:0.5px solid #ddd">
		<h3>Edit Student Info</h3>
	</div>

<!-- breadcrumb -->
<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="all_student.php">All Students</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Student Info</li>
  </ol>
</div>

<div class="m-md-3 p-3 bg-light rounded">
	<div class="row justify-content-center">
	<div class="col col-md-8">
		<div class="border bounded p-3 rounded">
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
			<form enctype="multipart/form-data" action="" method="POST">
				<h5 class="mb-3">Edit Student Info</h5>
		<?php
			$student = new Student();
			if (isset($_REQUEST['edit_student_btn'])) {
				$editStudent = $student->EditStudent($_REQUEST);	
			}
			if (isset($editStudent)) {
				echo $editStudent;
			}
		?>
				<div class="form-group">
					<label for="fname">First Name</label>
					<input id="fname" name="fname" type="text" class="form-control form-control-sm"required value="<?php echo $fname ?>">
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input id="lname" name="lname" type="text" class="form-control form-control-sm" value="<?php echo $lname ?>">
				</div>
				<div class="form-group">
					<label for="Id">ID</label>
					<input id="Id" name="Id" type="text" class="form-control form-control-sm" value="<?php echo $identity ?>" >
				</div>
				<div class="form-group">
					<label for="roll">Roll</label>
					<input id="roll" name="roll" type="text" class="form-control form-control-sm"required value="<?php echo $roll ?>">
				</div>
				<div class="form-group">
					<label for="reg">Register No</label>
					<input id="reg" name="reg" type="text" class="form-control form-control-sm"required value="<?php echo $reg ?>">
				</div>
				<div class="form-group">
					<label for="Department">Department</label>
					<input type="text" name="department" id="semister" class="form-control form-control-sm" value="<?php echo $department ?>">	
				</div>
				<div class="form-group">
					<label for="semister">Semister</label>
					<input type="text" name="semister" class="form-control form-control-sm" id="semister" value="<?php echo $semister ?>">
				</div>
				<div class="form-group">
					<label for="session">Session</label>
					<input id="session" name="session" type="text" class="form-control form-control-sm" value="<?php echo $session ?>">
				</div>
				<div class="form-group">
					<label for="phone">Phone</label>
					<input id="phone" name="phone" type="number" class="form-control form-control-sm" value="<?php echo $phone ?>">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input id="email" name="email" type="email" class="form-control form-control-sm" value="<?php echo $email ?>">
				</div>
				<div class="form-group">
					<label for="dob">Date of birth</label>
					<input id="dob" name="dob" type="date" class="form-control form-control-sm" value="<?php echo $dob ?>">
				</div>
				<div class="form-group">
					<label for="blood">Blood group</label>
					<input id="blood" name="blood" type="text" class="form-control form-control-sm" value="<?php echo $blood ?>">
				</div>
				<div class="form-group">
					<label for="home">Home</label>
					<input id="home" name="home" type="text" class="form-control form-control-sm" value="<?php echo $home ?>">
				</div>
				
				<div class="form-group">
					<input type="hidden" name="editId" value="<?php echo $id ?>">
					<input type="submit" name="edit_student_btn" value="Update" class="btn btn-success btn-sm">
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