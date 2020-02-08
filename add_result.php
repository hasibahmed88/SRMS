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
		<h3>Add Result</h3>
	</div>
<!-- breadcrumb -->
<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Result</li>
  </ol>
</div>

<div class="m-md-3 p-3 bg-light rounded">
	
	<div class="row justify-content-center">
		<div class="col col-md-8">
			<div class="border bounded p-3 rounded">
				<h5>Add Result</h5>
		<?php
			if (isset($addResult)) {
				echo $addResult;
			}
		?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="department">Department</label>
						<select class="form-control form-control-sm" name="department" id="department" required> 
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
						<label for="roll">Board Roll</label>
						<input type="number" id="roll" name="roll" class="form-control-sm form-control" required>
					</div>
					<div class="form-group">
						<span>CGPA</span>
						<hr>
					</div>
					<div class="form-group">
						<label for="1st">1st</label>
						<input type="text" id="1st" name="1st" class="form-control form-control-sm">
					</div>
					<div class="form-group">
						<label for="2nd">2nd</label>
						<input type="text" id="2nd" name="2nd" class="form-control form-control-sm">
					</div>
					<div class="form-group">
						<label for="3rd">3rd</label>
						<input type="text" id="3rd" name="3rd" class="form-control form-control-sm">
					</div>
					<div class="form-group">
						<label for="4th">4th</label>
						<input type="text" id="4th" name="4th" class="form-control form-control-sm">
					</div>
					<div class="form-group">
						<label for="5th">5th</label>
						<input type="text" id="5th" name="5th" class="form-control form-control-sm">
					</div>
					<div class="form-group">
						<label for="6th">6th</label>
						<input type="text" id="6th" name="6th" class="form-control form-control-sm">
					</div>
					<div class="form-group">
						<label for="7th">7th</label>
						<input type="text" id="7th" name="7th" class="form-control form-control-sm">
					</div>
					<div class="form-group">
						<label for="8th">8th</label>
						<input type="text" id="8th" name="8th" class="form-control form-control-sm">
					</div>
					<div class="form-group">
						<label for="final_cgpa">Final CGPA</label>
						<input type="text" id="final_cgpa" name="final_cgpa" class="form-control form-control-sm">
					</div>
					
					<div class="form-group">
						<input type="submit" name="result_btn" class="btn btn-sm btn-success" >
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