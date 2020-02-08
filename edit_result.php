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
    <li class="breadcrumb-item active" aria-current="page">Edit Result</li>
  </ol>
</div>
<div class="m-md-3 p-3 bg-light rounded">

	<div class="row justify-content-center">
	<div class="col col-md-8">
		<div class="border bounded p-3 rounded">
<!-- get Data -->
<?php
	$Db = new Database();
	if (isset($_REQUEST['id'])) {
		$userId = $_REQUEST['id'];
		$getData = "SELECT * FROM result WHERE id=$userId ";
		$result = $Db->ResultQuery($getData);
		while($data = $result->fetch_array()){
			$id = $data['id'];
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
			$final_cgpa = $data['final_cgpa'];
		}
	}
?>
				<form action="" method="POST">
					<h5>Update Result</h5>
<!-- Update result  -->
<?php
	$result = new Result();
	if (isset($_REQUEST['update_result_btn'])) {
		$update_result = $result->UpdateResult($_REQUEST);
	}
	if (isset($update_result)) {
		echo $update_result;
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
						<label for="roll">Session</label>
						<input type="text" name="session"  value="<?php echo $session ?>" class="form-control form-control-sm" required>
					</div>
					<div class="form-group">
						<label for="roll">Roll No</label>
						<input type="number" name="roll"  value="<?php echo $roll ?>" class="form-control form-control-sm" required>
					</div>
					<div class="form-group">
						<span class="text-secondary">CGPA</span>
						<hr>
					</div>
					<div class="form-group">
						<label for="1st">1st</label>
						<input type="text" id="1st" name="1st" class="form-control form-control-sm" value="<?php echo $one ?>">
					</div>
					<div class="form-group">
						<label for="2nd">2nd</label>
						<input type="text" id="2nd" name="2nd" class="form-control form-control-sm" value="<?php echo $two ?>">
					</div>
					<div class="form-group">
						<label for="3rd">3rd</label>
						<input type="text" id="3rd" name="3rd" class="form-control form-control-sm" value="<?php echo $three ?>">
					</div>
					<div class="form-group">
						<label for="4th">4th</label>
						<input type="text" id="4th" name="4th" class="form-control form-control-sm" value="<?php echo $four ?>">
					</div>
					<div class="form-group">
						<label for="5th">5th</label>
						<input type="text" id="5th" name="5th" class="form-control form-control-sm" value="<?php echo $five ?>">
					</div>
					<div class="form-group">
						<label for="6th">6th</label>
						<input type="text" id="6th" name="6th" class="form-control form-control-sm" value="<?php echo $six ?>">
					</div>
					<div class="form-group">
						<label for="7th">7th</label>
						<input type="text" id="7th" name="7th" class="form-control form-control-sm" value="<?php echo $seven ?>">
					</div>
					<div class="form-group">
						<label for="8th">8th</label>
						<input type="text" id="8th" name="8th" class="form-control form-control-sm" value="<?php echo $eight ?>">
					</div>
					<div class="form-group">
						<label for="final_cgpa">Final CGPA</label>
						<input type="text" id="final_cgpa" name="final_cgpa" class="form-control form-control-sm" value="<?php echo $final_cgpa ?>">
					</div>
					<div class="form-group">
						<input type="hidden" name="student_id" value="<?php echo $id ?>">
						<input type="submit" value="Update" name="update_result_btn" class="btn btn-success btn-sm">
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