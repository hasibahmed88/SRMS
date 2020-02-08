<?php 
require_once("header.php");
 ?>
<?php 
require_once("./include/leftbar.php");
 ?>
 <?php
	$student = new Student();
	if (isset($_REQUEST['add_student_btn'])) {
		$addStudent = $student->AddStudent($_REQUEST);	
	}
?>
<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 text-light" style="border-bottom:0.5px solid #ddd">
		<h3>Add Student</h3>
	</div>

<!-- breadcrumb -->
<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="all_student.php">All students</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Student</li>
  </ol>
</div>

<div class="m-md-3 p-3 bg-light rounded">
	<div class="row justify-content-center">
	<div class="col col-md-8">
		<div class="border bounded p-3 rounded">
			<form action="" method="POST">
				<h5 class="mb-3">Add Student Info</h5>
	<?php
		if (isset($addStudent)) {
			echo $addStudent;
		}
	?>
				<div class="form-group">
					<label for="fname">First Name</label>
					<input id="fname" name="fname" type="text" class="form-control form-control-sm"required>
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input id="lname" name="lname" type="text" class="form-control form-control-sm">
				</div>
				<div class="form-group">
					<label for="Id">ID</label>
					<input id="Id" name="Id" type="text" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<label for="roll">Roll</label>
					<input id="roll" name="roll" type="text" class="form-control form-control-sm"required>
				</div>
				<div class="form-group">
					<label for="reg">Register No</label>
					<input id="reg" name="reg" type="text" class="form-control form-control-sm" required>
				</div>
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
					<label for="semister">Semister</label>
					<select name="semister" class="form-control form-control-sm" id="semister"required>
						<option value="">Select</option>
						<option value="1st">1st</option>
						<option value="2nd">2nd</option>
						<option value="3rd">3rd</option>
						<option value="4th">4th</option>
						<option value="5th">5th</option>
						<option value="6th">6th</option>
						<option value="7th">7th</option>
						<option value="8th">8th</option>
					</select>				
				</div>
				<div class="form-group">
				<label for="session">Session</label>
					<select name="session" id="session" class="form-control form-control-sm" required>
						<option value="">Select</option>
						<option value="14-15">14-15</option>
						<option value="15-16">15-16</option>
						<option value="16-17">16-17</option>
						<option value="17-18">17-18</option>
						<option value="18-19">18-19</option>
						<option value="19-20">19-20</option>
						<option value="20-21">20-21</option>
						<option value="21-22">21-22</option>
					</select>			
				</div>
				<div class="form-group">
					<label for="phone">Phone</label>
					<input id="phone" name="phone" type="number" class="form-control form-control-sm" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input id="email" name="email" type="email" class="form-control form-control-sm">
				</div>
				<div class="form-group">
					<label for="dob">Date of birth</label>
					<input id="dob" name="dob" type="date" class="form-control form-control-sm">
				</div>
				<div class="form-group">
					<label for="blood">Blood group</label>
					<input id="blood" name="blood" type="text" class="form-control form-control-sm">
				</div>
				<div class="form-group">
					<label for="home">Home</label>
					<input id="home" name="home" type="text" class="form-control form-control-sm" required>
				</div>
				
				<div class="form-group">
					<input type="submit" name="add_student_btn" value="Submit" class="btn btn-success btn-sm">
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