<?php 
require_once("header.php");
 ?>
<?php 
require_once("./include/leftbar.php");
 ?>
<!-- page title -->
<div class="col-md-9 col-lg-10 m-0 p-0">
	<div class="p-lg-4 p-md-3 text-light" style="border-bottom:0.5px solid #ddd">
		<h3>Select Department</h3>
	</div>

<!-- breadcrumb -->
<div class="pl-2 m-0">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a class="text-primary" href="dashboard.php"><span><i class="fas fa-home"></i></span>&nbsp;&nbsp;Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Select Department</li>
  </ol>
</div>

<div class="m-md-3 p-3 bg-light rounded">

	<div class="row justify-content-center">
	<div class="col-12">
		<div class=" p-3 ">
			<div class="row justify-content-between">
				<div class="col-12 col-md-3">
					<h5 class="mb-3">Select Department</h5>
				</div>
				
				</div>
			</div>
		</div>
		<div class="col-12 border">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6 p-3 border my-4">
					<h6>Select department for view result</h6>
					<br>
					<form action="manage_result.php" method="POST">
						<div class="form-group">
							<label for="department">Department</label>
							<select name="department" id="department" class="form-control form-control-sm">
								<option value="">Select</option>
								<option value="Computer">Computer</option>
								<option value="Electrical">Electrical</option>
								<option value="Mechanical">Mechanical</option>
								<option value="Civil">Civil</option>
								<option value="Marine">Marine</option>
								<option value="Textile">Textile</option>
								<option value="GDPM">GDPM</option>
								<option value="RAC">RAC</option>
							</select>
						</div>
						<div class="form-group">
							<label for="session">Session</label>
							<select name="session" id="session" class="form-control form-control-sm">
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
							<input type="submit" name="manage_result_btn" value="Submit" class="btn btn-success btn-sm">
						</div>
					</form>
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