<?php 
include "include/config.php";
include "classes/Database.class.php";
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,600i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>NIET</title>
  </head>
  <body>

<?php
	$Db = new Database();
	if (isset($_REQUEST['userroll'])) {
		$roll = $_REQUEST['userroll'];

// Result information
		$getResult = "SELECT * FROM result WHERE roll='$roll ' ";
		$runResult = $Db->ResultQuery($getResult);
		$getAllResult = $runResult->fetch_array();
		
		$department = $getAllResult['department'];
		$roll = $getAllResult['roll'];

		$one = $getAllResult['1st'];
		$two = $getAllResult['2nd'];
		$three = $getAllResult['3rd'];
		$four = $getAllResult['4th'];
		$five = $getAllResult['5th'];
		$six = $getAllResult['6th'];
		$seven = $getAllResult['7th'];
		$eight = $getAllResult['8th'];
		$final = $getAllResult['final_cgpa'];


// 	Student information
		$getInfo = "SELECT * FROM students WHERE roll=$roll ";
		$runInfo = $Db->ResultQuery($getInfo);
		$getStdData = $runInfo->fetch_array();
		
		$fname = $getStdData['fname'];
		$lname = $getStdData['lname'];
		$st_id = $getStdData['st_id'];
		$roll = $getStdData['roll'];
		$reg = $getStdData['reg'];
		$department = $getStdData['department'];
		$semister = $getStdData['semister'];
		$session = $getStdData['session'];
		$phone = $getStdData['phone'];
		$email = $getStdData['email'];
		$dob = $getStdData['dob'];
		$blood = $getStdData['blood'];
		$home = $getStdData['home'];
		$lname = $getStdData['lname'];
		$lname = $getStdData['lname'];

	}

?>


<div class="container">
	<div class="row">
		<div class="col-12 m-0 p-0 border bg-light">

	<div class="mb-4">
    	<h2 class="text-center text-dark">National Institute of Engineering & Technology</h2>
	</div>	
<div class="m-md-3 p-3 bg-light rounded">
	<div class="row justify-content-center">
	<div class="col-12 col-md-8">
		<div class="border bounded p-3 rounded">
		
			<div class="row justify-content-between">
				<div class="col-12">
					<h5>Student name: <strong><?php echo $fname.' '.$lname ?></strong></h5>
				</div>
				<div class="col-2">
					<a style="font-size:12px" href="index.php" class="btn btn-dark btn-sm">Back</a>
				</div>
				
			</div>
			<hr>
			
			<div class="row justify-content-around">
				<div class="col-12 ">
					<h6 class="text-center"><big class="text-center mb-3"><strong>Result</strong></big></h6>
					<table class="table table-bordered ">
			<!-- result -->
						<tr>
							<td class="p-2 text-right">Department :</td>
							<td class="p-2"><?php echo $department ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">Board Roll :</td>
							<td class="p-2"><?php echo $roll ?></td>
						</tr>
						
						<tr>
							<td class="p-2 text-right">1st semister :</td>
							<td class="p-2"><?php echo $one ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">2nd semister :</td>
							<td class="p-2"><?php echo $two ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">3rd semister :</td>
							<td class="p-2"><?php echo $three ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">4th semister :</td>
							<td class="p-2"><?php echo $four ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">5th semister :</td>
							<td class="p-2"><?php echo $five ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">6th semister :</td>
							<td class="p-2"><?php echo $six ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">7th semister :</td>
							<td class="p-2"><?php echo $seven ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right">8th semister :</td>
							<td class="p-2"><?php echo $eight ?></td>
						</tr>
						<tr>
							<td class="p-2 text-right"><strong>Final CGPA</strong> :</td>
							<td class="p-2"><strong><?php echo $final ?></strong></td>
						</tr>
						<tr class="text-center">
							<td colspan="2" >
								<h6 class="text-center"><big class="text-center mb-3"><strong>Information</strong></big></h6>
							</td>
						</tr>

			<!-- Information -->
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
							<td class="p-2"><?php echo $st_id ?></td>
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
	</div>
</div>


    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

    </script>

  </body>
</html>